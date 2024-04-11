<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AdNavHeader from "./AdNavHeader.vue";
import AdSidebar from "./AdSidebar.vue";
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps(["users"]);


const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};


</script>

<template>
    
<AppLayout title="Dash">



    <body class="hold-transition sidebar-mini">
<div class="wrapper">
<AdNavHeader />


<AdSidebar />


<div class="content-wrapper">
    <div class="card card-dark">
    <div class="card-header text-center">
        <h3 class="card-title"><b>STUDENT DETAILS</b></h3>
    </div>
    <div v-if="successMessage" class="alert alert-success">
        {{ successMessage }}
        <button @click="closeSuccessMessage" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form @submit.prevent="submitForm">
        <div class="card-body">
            <div class="form-group">
                <label for="emailSelect">Select Email:</label>
                <select v-model="formData.email" id="email" name="email" class="form-control" required>
                    <option v-for="user in users" :key="user.id">{{ user.email }}</option>
                </select>
            </div>

            <div class="form-group">
                <label for="pdp">Upload PDF:</label>
                <input
                    type="file"
                    id="pdp"
                    name="pdp"
                    class="form-control-file"
                    accept=".pdp"
                    ref="pdp"
                />
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary full-width-btn">Submit</button>
        </div>
    </form>
</div>

</div>
</div>

   
   
</body>


</AppLayout>

</template>


<script>
export default {
    data() {
        return {
            formData: {
                email: '',
                pdp: null,
            },
        };
    },
    methods: {
        async submitForm() {
            try {
                let formData = new FormData();

                for (let key in this.formData) {
                    formData.append(key, this.formData[key]);
                }

                // Append the file data to FormData
                formData.append('pdp', this.$refs.pdp.files[0]);

                await this.$inertia.post(route('Reportform'), formData);

                // Redirect or show success message as needed
            } catch (error) {
                // Handle errors
                console.error(error);
            }
        },
    },
};
</script>