<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3';
import AdNavHeader from "./AdNavHeader.vue";
import AdSidebar from "./AdSidebar.vue";
import AdStyles from "./AdStyles.vue";
import { ref } from 'vue';

const success = ref(false);

const props = defineProps({
  uper: Object,
});

const formData = useForm({
  name: props.uper.name,
  email: props.uper.email,
});

function submitFormu(id) {
  router.put('/upers/' + id, formData);
  success.value = true;
}

function closeSuccessMessage() {
  success.value = false;
}
</script>

<template>
  <AppLayout title="Dash">
<body class="hold-transition sidebar-mini">

<div class="wrapper">
<AdNavHeader />


<AdSidebar />


<div class="content-wrapper">
  <div class="card card-dark">
    <div class="card-header text-center">
        <h3 class="card-title"><b>STUDENT REGISTRATION.</b></h3>
    </div>
    <div v-if="success" class="alert alert-success">
        <span>User has been successfully edited. <button @click="closeSuccessMessage" class="close" aria-label="Close">&times;</button></span>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form @submit.prevent="submitFormu(uper.id)">
        <div class="card-body">
            <div class="row">
                <!-- First Name -->
                <div class="col-md-6 form-group">
                    <label for="firstName">Name:</label>
                    <input v-model="formData.name" type="text" id="name" name="name" class="form-control" required />
                </div>
                <!-- Middle Name -->
                <div class="col-md-6 form-group">
                    <label for="email">Email:</label>
                    <input v-model="formData.email" type="text" id="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>

</div>
</div>

   
   
</body>
  </AppLayout>
</template>
