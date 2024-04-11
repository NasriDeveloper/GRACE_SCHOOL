<template>
    <div class="container mx-auto p-4">
    
      <button 
      @click = "createSite"
      class="bg-blue-500 hover:bg-blue-700 
      text-white 
      font-bold 
      py-2 
      px-4 rounded">
    Click me
     </button>
 
     <br><br>

      <table class="min-w-full bg-white border border-gray-300">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b border-r">Name</th>
            <th class="py-2 px-4 border-b border-r">URL</th>
            <th class="py-2 px-4 border-b border-r">Status</th>
            <th class="py-2 px-4 border-b border-r">Role</th>
            <th class="py-2 px-4 border-b">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="monitor in monitors" :key="monitor.id">
            <td class="py-2 px-4 border-b border-r">{{ monitor.site_name }}</td>
            <td class="py-2 px-4 border-b border-r">{{ monitor.site_url }}</td>
            <td class="py-2 px-4 border-b border-r">{{ monitor.status }}</td>
            <td class="py-2 px-4 border-b border-r">{{ monitor.role }}</td>
            <td class="py-2 px-4 border-b">
              <button @click="editUser(user.id)" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
 
  </template>
  
  <script setup>
import { router } from '@inertiajs/vue3';

 defineProps(["monitors"]);

 function createSite(){
      router.visit('site/create');
 }

  </script>
  
  <style scoped>
  /* You can add custom styles for your table if needed */
  </style>
  