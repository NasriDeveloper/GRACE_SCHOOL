<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

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




<body>
    <!--== MAIN CONTRAINER ==-->
    <nav class="bg-red-700 text-white p-4 fixed top-0 w-full z-10">
  <div class="max-w-screen-xl mx-auto flex justify-between items-center">
    <a href="#" class="text-2xl font-semibold" style="padding-bottom: 50px;">
      <img src="homes/img/logo/logo.png" class="h-8" alt="Flowbite Logo" />
      Graceschools
    </a>
    <div class="flex items-center space-x-4">
        <form @submit.prevent="logout">
                <DropdownLink as="button">
                <a class='waves-effect dropdown-button top-user-pro' data-activates='top-menu'>LOGOUT<i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                </DropdownLink>
         </form>
    </div>
  </div>
</nav><br><br><br><br><br><br><br>

            

<div class="bg-green-700 text-white p-4">
  <p class="text-center text-white">Welcome to the Grace Schools system!</p>
  <div class="text-center mt-4">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
    </svg>
    <p class="inline-block ml-2">WHHOPS!! THIS IS NOT YOUR CHILD CLASS OR THE REPORTS ARE NOT UPLOADED YET.</p>
  </div>
</div>








    <!--== BODY CONTNAINER ==-->
    

    <!--Import jQuery before materialize.js-->
  
   
</body>


</AppLayout>

</template>
