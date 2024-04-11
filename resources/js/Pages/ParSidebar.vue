<script setup>
import Link from "./Link.vue";

const sidebarLinks = [
  
  { name: 'View Report', href: '/repot', current: true },
 
];
</script>



<template>
    <div class="sb2-1">
      <!--== USER INFO ==-->
      <div class="sb2-12">
        <ul>
          <li><img src="home/images/placeholder.jpg" alt=""></li>
          <li>
            <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
          </li>
          <li></li>
        </ul>
      </div>
      <!--== LEFT MENU ==-->
      <div class="sb2-13">
        <ul class="collapsible" data-collapsible="accordion">
         <li><Link preserve-scroll v-for="link in sidebarLinks" :key="link.name" :href="link.href" :name="link.name" :component="link.name"></Link></li> 
        </ul>
      </div>
    </div>
  </template>
  