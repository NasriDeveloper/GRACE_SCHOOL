<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

import Link from "./Link.vue";
  
  const navigation = [
    { name: 'Student Registration', href: '/reg', current: true },
    { name: 'Parent Registration', href: '/nasr', current: true },
    { name: 'View Student', href: '/nas', current: true },
    { name: 'View Parents', href: '/viewp', current: true },
  
  ]
</script>

<template>
    <AppLayout title="Dash">

      <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
          <div>
            <a href="/">Your App Name</a>
          </div>
          <ul class="flex">
            <!-- Seven Navbar Links -->
            <Link v-for="item in navigation" 
                :key="item.name" 
                :href="item.href" 
                :name="item.name"
                :component="item.name"
              ></Link>
          </ul>
        </div>
      </nav>

      <!-- Main content area -->
      <main class="flex-1 p-8">
        
      </main>
    </AppLayout>
  
      <!-- Navbar -->
    

      <!-- Sidebar -->
     
    
</template>
