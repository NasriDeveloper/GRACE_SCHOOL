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

defineProps(["userp"]);


const asset = (path) => `${import.meta.env.VITE_APP_BASE_URL}/${path}`;

const successMessage = ref('');


function deleteUser(id){
  router.delete('/userp/' + id)
  successMessage.value = 'User has been successfully deleted.';
}

function edit(id){
  router.get('/userp/'+id+'/edit')
}


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
        <h3 class="card-title"><b>STUDENT DETAILS.</b></h3>
       
    </div><hr>
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
                    <th>Photo</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Parent First Name</th>
                    <th>Parent Last Name</th>
                    <th>Class</th>
                    <th>Year of Entry</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Nationality</th>
                    <th>Place of Birth</th>
                    <th>Actions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in userp" :key="user.id">
                    <td>
                        <span class="list-img"><img :src="user.photo" alt="Photo" class="img-fluid"></span>
                    </td>
                    <td>{{ user.firstName }}</td>
                    <td>{{ user.middleName }}</td>
                    <td>{{ user.parentfirstName }}</td>
                    <td>{{ user.parentlastName }}</td>
                    <td>{{ user.class }}</td>
                    <td>{{ user.yearOfEntry }}</td>
                    <td>{{ user.gender }}</td>
                    <td>{{ user.dob }}</td>
                    <td>{{ user.nationality }}</td>
                    <td>{{ user.placeOfBirth }}</td>
                    <td>
                        <a @click.prevent="edit(user.id)" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a @click.prevent="deleteUser(user.id)" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    </div>


</div>
</body>


</AppLayout>

</template>




