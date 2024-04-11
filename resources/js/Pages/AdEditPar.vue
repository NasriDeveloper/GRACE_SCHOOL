<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {useForm} from '@inertiajs/vue3';
import {router} from '@inertiajs/vue3';

import AdNavHeader from "./AdNavHeader.vue";
import AdSidebar from "./AdSidebar.vue";
import { ref } from 'vue';

const success = ref(false);


const props = defineProps({
  uter: Object,
})



// Declare a ref for form data
const formData = useForm({
            fatherName:props.uter.fatherName,
            fatherFname:props.uter.fatherFname, 
            fatherAddress:props.uter.fatherAddress,
            fatherPhone:props.uter.fatherPhone, 
            fatherOccupation:props.uter.fatherOccupation, 
            fatherEducation:props.uter.fatherEducation, 
            fatherNID:props.uter.fatherNID,
            fatherReligion:props.uter.fatherReligion, 
            MotherName:props.uter.MotherName,
            motherCname:props.uter.motherCname, 
            motherAddress:props.uter.motherAddress, 
            motherPhone:props.uter.motherPhone, 
            motherOccupation:props.uter.motherOccupation, 
            motherEducation:props.uter.motherEducation, 
            motherNID:props.uter.motherNID,
            motherReligion:props.uter.motherReligion, 
            
           

           
});

function submitFom(id){
   router.put('/uters/'+id,formData);
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
        <h3 class="card-title"><b>PARENT DETAILS</b></h3>
       
    </div>
    <div v-if="success" class="alert alert-success mt-3">
        <span>User has been successfully edited. <button @click="closeSuccessMessage" class="close" aria-label="Close">&times;</button></span>
    </div>
    <div class="tab-inn">
        <form @submit.prevent="submitFom(uter.id)">
            <div class="row">
                <!-- Father's Details -->
                <div class="col-md-6 form-group">
                    <h3 class="text-lg font-semibold mb-2">Father's Details</h3>
                    <div class="mb-4">
                        <label for="fatherName">Name:</label>
                        <input v-model="formData.fatherName" type="text" id="fatherName" name="fatherName" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="fatherFname">Child Name:</label>
                        <input v-model="formData.fatherFname" type="text" id="fatherFname" name="fatherFname" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="fatherAddress">Address:</label>
                        <input v-model="formData.fatherAddress" type="text" id="fatherAddress" name="fatherAddress" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="fatherPhone">Phone No:</label>
                        <input v-model="formData.fatherPhone" type="tel" id="fatherPhone" name="fatherPhone" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="fatherOccupation">Occupation:</label>
                        <input v-model="formData.fatherOccupation" type="text" id="fatherOccupation" name="fatherOccupation" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="fatherEducation">Education:</label>
                        <input v-model="formData.fatherEducation" type="text" id="fatherEducation" name="fatherEducation" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="fatherNID">NID:</label>
                        <input v-model="formData.fatherNID" type="text" id="fatherNID" name="fatherNID" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="fatherReligion">Religion:</label>
                        <input v-model="formData.fatherReligion" type="text" id="fatherReligion" name="fatherReligion" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="fatherPhoto">Upload Photo:</label>
                        <input type="file" id="fatherPhoto" name="fatherPhoto" class="form-control-file" accept="image/*" ref="fatherPhoto" />
                    </div>
                </div>

                <!-- Mother's Details -->
                <div class="col-md-6 form-group">
                    <h3 class="text-lg font-semibold mb-2">Mother's Details</h3>
                    <div class="mb-4">
                        <label for="MotherName">Name:</label>
                        <input v-model="formData.MotherName" type="text" id="MotherName" name="MotherName" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="motherCname">Child Name:</label>
                        <input v-model="formData.motherCname" type="text" id="motherCname" name="motherCname" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="motherAddress">Address:</label>
                        <input v-model="formData.motherAddress" type="text" id="motherAddress" name="motherAddress" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="motherPhone">Phone No:</label>
                        <input v-model="formData.motherPhone" type="tel" id="motherPhone" name="motherPhone" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="motherOccupation">Occupation:</label>
                        <input v-model="formData.motherOccupation" type="text" id="motherOccupation" name="motherOccupation" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="motherEducation">Education:</label>
                        <input v-model="formData.motherEducation" type="text" id="motherEducation" name="motherEducation" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="motherNID">NID:</label>
                        <input v-model="formData.motherNID" type="text" id="motherNID" name="motherNID" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="motherReligion">Religion:</label>
                        <input v-model="formData.motherReligion" type="text" id="motherReligion" name="motherReligion" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="motherPhoto">Upload Photo:</label>
                        <input type="file" id="motherPhoto" name="motherPhoto" class="form-control-file" accept="image/*" ref="motherPhoto" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
</div>

   
   
</body>


</AppLayout>

</template>



