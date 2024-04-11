<template>
    
    <h1 class="text-lg text-red-500">Home</h1>
    <br />
    <MonitorList :monitors="monitors"/>
   
</template>


<script setup>
defineProps(['monitors']);
import MonitorList from "@/components/home/MonitorList.vue";
</script>

