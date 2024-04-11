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


const successMessage = ref('');

const deleteUse = (id) => {
  router.delete('/uters/' + id);
  successMessage.value = 'User has been successfully deleted.';
};

const editUse = (id) => {
  router.get('/uters/' + id + '/edit');
};



const props = defineProps({
    uters: Array
})



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
        <h3 class="card-title"><b>PARENT DETAILS</b></h3>
    </div>
    <div class="card-body">
        <div v-if="successMessage" class="alert alert-danger mt-3">
            {{ successMessage }}
            <button @click="closeSuccessMessage" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Father Photo</th>
                        <th>Father Name</th>
                        <th>Father First Name</th>
                        <th>Class</th>
                        <th>Email</th>
                        <th>Father Address</th>
                        <th>Father Phone</th>
                        <th>Father Occupation</th>
                        <th>Father Education</th>
                        <th>Father NID</th>
                        <th>Father Religion</th>
                        <th>Actions</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="uter in uters" :key="uter.id">
                        <td>
                            <span class="list-img"><img :src="uter.fatherPhoto" alt="Father Photo" class="img-fluid"></span>
                        </td>
                        <td>{{ uter.fatherName }}</td>
                        <td>{{ uter.fatherFname }}</td>
                        <td>{{ uter.Class }}</td>
                        <td>{{ uter.email }}</td>
                        <td>{{ uter.fatherAddress }}</td>
                        <td>{{ uter.fatherPhone }}</td>
                        <td>{{ uter.fatherOccupation }}</td>
                        <td>{{ uter.fatherEducation }}</td>
                        <td>{{ uter.fatherNID }}</td>
                        <td>{{ uter.fatherReligion }}</td>
                        <td>
                            <button @click.prevent="editUse(uter.id)" class="btn btn-primary">Edit</button>
                        </td>
                        <td>
                            <button @click.prevent="deleteUse(uter.id)" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Mother Photo</th>
                        <th>Mother Name</th>
                        <th>Mother First Name</th>
                        <th>Mother Address</th>
                        <th>Mother Phone</th>
                        <th>Mother Occupation</th>
                        <th>Mother Education</th>
                        <th>Mother NID</th>
                        <th>Mother Religion</th>
                        <th>Actions</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="uter in uters" :key="uter.id">
                        <td>
                            <span class="list-img"><img :src="uter.motherPhoto" alt="Mother Photo" class="img-fluid"></span>
                        </td>
                        <td>{{ uter.MotherName }}</td>
                        <td>{{ uter.motherCname }}</td>
                        <td>{{ uter.motherAddress }}</td>
                        <td>{{ uter.motherPhone }}</td>
                        <td>{{ uter.motherOccupation }}</td>
                        <td>{{ uter.motherEducation }}</td>
                        <td>{{ uter.motherNID }}</td>
                        <td>{{ uter.motherReligion }}</td>
                        <td>
                            <button @click.prevent="editUse(uter.id)" class="btn btn-primary">Edit</button>
                        </td>
                        <td>
                            <button @click.prevent="deleteUse(uter.id)" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>

   
   
</body>




</AppLayout>

</template>

<style>

.card-title{
    text-align: center;
    padding-left: 400px;
  }


</style>

  
  


