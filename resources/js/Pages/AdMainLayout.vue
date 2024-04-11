<!-- MainLayout.vue -->

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Sidebar from './AdSidebar.vue';

const userInfo = {
  name: 'Victoria Baker',
  location: 'Santa Ana, CA',
  image: 'home/images/placeholder.jpg',
};

const sidebarMenu = [
  { name: 'Dashboard', href: 'admin.html', icon: 'fa fa-bar-chart', isActive: true },
  { name: 'Site Setting', href: 'admin-setting.html', icon: 'fa fa-cogs', isActive: false },
  // Add more menu items as needed
];
</script>

<template>
  <div>
    <!-- Navbar -->
    <!-- ... (your existing Navbar code) ... -->

    <!-- Main content area -->
    <main class="flex-1 p-8">
      <!-- Use the dynamic sidebar component -->
      <Sidebar :userImage="userInfo.image" :userName="userInfo.name" :userLocation="userInfo.location" :menuItems="sidebarMenu" />
    </main>
  </div>
</template>
