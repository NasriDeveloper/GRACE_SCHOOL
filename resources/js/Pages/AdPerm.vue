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
    <body>
        <AdNavHeader />
      <!-- ... (existing code) ... -->
      <div class="container-fluid sb2">
        <div class="row">

            <AdSidebar />
            <div class="sb2-2">
                <div class="sb2-2-3">
        <div class="row">
          
          <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4 class="text-center">You have no permission to access this page</h4>
                   
                </div>
              <!-- ... (existing code) ... -->

              <!-- Student Details Form -->
              <div class="tab-inn">
               <h1 class="text-center"><b>THIS IS NOT YOUR CLASS</b></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
            </div>
            
      <!-- User Details Section -->
      
    </div>
</div>
    </body>
  </AppLayout>
</template>


