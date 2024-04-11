<template>
       <table class="min-w-full bg-white border border-gray-300">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b border-r">Name</th>
            <th class="py-2 px-4 border-b border-r">  Email</th>
            <th class="py-2 px-4 border-b">Actions</th>
            <th class="py-2 px-4 border-b">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user.id">
            <td class="py-2 px-4 border-b border-r">{{ user.name }}</td>
            <td class="py-2 px-4 border-b border-r">{{ user.email }}</td>
            <td class="py-2 px-4 border-b">
              <button @click="editUser(user.id)" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</button>
            </td>
            <td class="py-2 px-4 border-b">
              <button @click="editUser(user.id)" class="bg-blue-500 text-white px-4 py-2 rounded">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
</template>

<script setup>
defineProps(["users"]);


</script>