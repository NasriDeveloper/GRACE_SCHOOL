<script setup>
import Link from "./Link.vue";

const sidebarLinks = [
  { name: 'DASHBOARD', href: '/dashboard',  current: true },
  { name: 'ALL USERS REGISTERED', href: '/dash',  current: true },
  { name: 'STUDENT REGISTRATION', href: '/reg', current: true },
  { name: 'PARENT REGISTRATION', href: '/nasr', current: true },
  { name: 'TEACHER REGISTRATION', href: '/teacher', current: true },
  { name: 'VIEW STUDENTS', href: '/nas', current: true },
  { name: 'VIEW PARENTS', href: '/viewp', current: true },
  { name: 'REPORT UPLOAD1,2', href: '/reportT1', current: true },
  { name: 'REPORT UPLOAD3,4,7', href: '/reportT', current: true },
  { name: 'REPORT UPLOAD5,6', href: '/reportT5', current: true },
  { name: 'REPORT STANDARD1', href: '/reportvT1', current: true },
  { name: 'REPORT STANDARD2', href: '/reportvT2', current: true },
  { name: 'REPORT STANDARD3', href: '/reportvT3', current: true },
  { name: 'REPORT STANDARD4', href: '/reportvT4', current: true },
  { name: 'REPORT STANDARD5', href: '/reportvT5', current: true },
  { name: 'REPORT STANDARD6', href: '/reportvT6', current: true },
  { name: 'REPORT STANDARD7', href: '/reportvT7', current: true },
  { name: 'REPORT UPLOAD', href: '/uplo', current: true },
];
</script>




<template>
  <body class="hold-transition sidebar-mini">
<div class="wrapper">
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <li v-for="link in sidebarLinks" :key="link.name" class="nav-item menu-open">
    <a  class="brand-link">
      <img src="/hod/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <Link :href="link.href" :name="link.name" :component="link.name">
      <span class="brand-text font-weight-light"> {{ link.name }} </span>
      </Link>
    </a>
    </li>
    <li v-for="link in sidebarLinks" :key="link.name" class="nav-item menu-open">
    <a  class="brand-link">
      <img src="/hod/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <Link :href="link.href" :name="link.name" :component="link.name">
      <span class="brand-text font-weight-light"> {{ link.name }} </span>
      </Link>
    </a>
    </li>
   
    
    
    

    <!-- Sidebar -->
   
    <!-- /.sidebar -->
  </aside>
</div>
</body>
</template>
  