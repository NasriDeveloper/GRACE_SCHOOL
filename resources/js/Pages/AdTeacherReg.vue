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

defineProps({
    title: String,
});

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
    <div class="card-header">
        <h3 class="card-title"><b>TEACHERS REGISTRATION.</b></h3>
    </div>
    <div v-if="successMessage" class="alert alert-success">
                  {{ successMessage }}
                  <button @click="closeSuccessMessage" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
      </div>
    <div class="card-body">
        <form @submit.prevent="submitForm">
            <div class="row">
                <!-- Existing fields (First Name, Middle Name, Last Name, Parent First Name, Parent Last Name, Class, Year of Entry, Gender, Date of Birth, Upload Photo, Nationality, Place of Birth) -->

                <!-- New English Details -->
                <div class="col-md-6 form-group">
                    <label for="name">Name:</label>
                    <input v-model="formData.name" type="text" id="name" name="name" class="form-control" />
                </div>

                <div class="col-md-6 form-group">
                    <label for="email">Email:</label>
                    <input v-model="formData.email" type="text" id="email" name="email" class="form-control" />
                </div>

                <div class="col-md-6 form-group">
                    <label for="password">Password:</label>
                    <input v-model="formData.password" type="text" id="password" name="password" class="form-control" />
                </div>

                <div class="col-md-6 form-group">
                    <label for="usertype">User Type:</label>
                    <select v-model="formData.usertype" id="usertype" name="usertype" class="form-control" required>
                        <option value="" disabled>Select User Type</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary full-width-btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
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
       name: '',
       email: '',
       password: '',
       usertype: '',  
      },
      successMessage: '',
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
       

        await this.$inertia.post(route('ClassTeacher'), formData);

        this.successMessage = 'Form submitted successfully!';
        
        // Redirect or show success message as needed
      } catch (error) {
        // Handle errors
        console.error(error);
      }
    },
    closeSuccessMessage() {
      this.successMessage = ''; // Clear the success message when the close button is clicked
    },
  },
};
</script>


<style>
.full-width-btn {
  width: 100%;
}

</style>