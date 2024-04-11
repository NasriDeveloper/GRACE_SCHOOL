<template>
    <Navbar />
   
        
 
  
    <slot>  </slot>
    <footer />
</template>

<script setup>
import Footer from "@/components/Footer.vue";
import Link  from "@/components/Link.vue";
import Navbar  from "@/components/Navbar.vue";
</script>
