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

defineProps(["repons"]);

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
</nav><br>


<div class="bg-red-700 text-white p-4 mt-6">
  <div class="max-w-screen-xl mx-auto">
    <div class="overflow-x-auto">
      <div class="inline-block min-w-full overflow-hidden align-middle border border-gray-900 rounded-md shadow-md">
        <iframe v-for="repon in repons" :key="repon.id" :src="repon.pdp" alt="PDF" class="w-full" style="height: 700px;"></iframe>
      </div>
    </div>
  </div>
</div>

            









    <!--== BODY CONTNAINER ==-->
    

    <!--Import jQuery before materialize.js-->
  
   
</body>


</AppLayout>

</template>
