<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AdNavHeader from "./AdNavHeader.vue";
import AdSidebar from "./AdSidebar.vue";
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

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

defineProps(["upers"]);

const asset = (path) => `${import.meta.env.VITE_APP_BASE_URL}/${path}`;

// Ref for managing success message
const successMessage = ref('');

// Function to handle delete action
function deleteUsed(id) {
    router.delete('/upers/' + id);
    // Set the success message
    successMessage.value = 'User has been successfully deleted.';
}

function editUsed(id) {
    router.get('/upers/' + id + '/edit');
}

// Function to close the success message
function closeSuccessMessage() {
    successMessage.value = '';
}
</script>

<template>
<AppLayout title="Dash">
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <AdNavHeader />

    <AdSidebar />

    <div class="content-wrapper">
    <div class="card card-dark">
        <div class="card-header border-0">
            <h3 class="card-title"><b>ALL USERS REGISTERED</b></h3>
            <div class="card-tools">
                <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                </a>
                <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </div>
        <div v-if="successMessage" class="alert alert-danger mt-3">
                    {{ successMessage }}
                    <button @click="closeSuccessMessage" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="uper in upers" :key="uper.id">
                        <td>{{ uper.name }}</td>
                        <td>{{ uper.email }}</td>
                        <td>
                            <a @click.prevent="editUsed(uper.id)" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a @click.prevent="deleteUsed(uper.id)" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>






</div>
</body>
        <!--== MAIN CONTAINER ==-->
        
        <!--== BODY CONTAINER ==-->
      
   
</AppLayout>
</template>
