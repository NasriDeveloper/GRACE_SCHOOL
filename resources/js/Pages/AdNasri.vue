<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AdNavHeader from "./AdNavHeader.vue";
import AdSidebar from "./AdSidebar.vue";
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';


const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};


</script>

<template>
    
<AppLayout title="Dash">




  <body class="hold-transition sidebar-mini">
<div class="wrapper">

    <AdNavHeader />

    <AdSidebar />
    <div class="content-wrapper">

      <div class="card card-dark">
    <div class="card-header">
      <h3 class="card-title"><b>PARENT DETAILS</b></h3>
    </div>
    <div v-if="successMessage" class="alert alert-success">
                  {{ successMessage }}
                  <button @click="closeSuccessMessage" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
  </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form @submit.prevent="submitForm">
      <div class="card-body">
        <div class="row">
          <!-- Father's Details -->
          <div class="col-md-6">
            <h3 class="text-lg font-semibold mb-2">Father's Details</h3>
            <div class="form-group">
              <label for="fatherName">Name:</label>
              <input v-model="formData.fatherName" type="text" id="fatherName" name="fatherName" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="fatherFname">Child Name:</label>
              <input v-model="formData.fatherFname" type="text" id="fatherFname" name="fatherFname" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="Class">Class:</label>
              <input v-model="formData.Class" type="text" id="Class" name="Class" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input v-model="formData.email" type="text" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="fatherAddress">Address:</label>
              <input v-model="formData.fatherAddress" type="text" id="fatherAddress" name="fatherAddress" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="fatherPhone">Phone No:</label>
              <input v-model="formData.fatherPhone" type="tel" id="fatherPhone" name="fatherPhone" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="fatherOccupation">Occupation:</label>
              <input v-model="formData.fatherOccupation" type="text" id="fatherOccupation" name="fatherOccupation" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="fatherEducation">Education:</label>
              <input v-model="formData.fatherEducation" type="text" id="fatherEducation" name="fatherEducation" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="fatherNID">NID:</label>
              <input v-model="formData.fatherNID" type="text" id="fatherNID" name="fatherNID" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="fatherReligion">Religion:</label>
              <input v-model="formData.fatherReligion" type="text" id="fatherReligion" name="fatherReligion" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="fatherPhoto">Upload Photo:</label>
              <input type="file" id="fatherPhoto" name="fatherPhoto" class="form-control-file" accept="image/*" ref="fatherPhoto" />
            </div>
          </div>

          <!-- Mother's Details -->
          <div class="col-md-6">
            <h3 class="text-lg font-semibold mb-2">Mother's Details</h3>
            <div class="form-group">
              <label for="MotherName">Name:</label>
              <input v-model="formData.MotherName" type="text" id="MotherName" name="MotherName" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="motherCname">Child Name:</label>
              <input v-model="formData.motherCname" type="text" id="motherCname" name="motherCname" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="motherAddress">Address:</label>
              <input v-model="formData.motherAddress" type="text" id="motherAddress" name="motherAddress" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="motherPhone">Phone No:</label>
              <input v-model="formData.motherPhone" type="tel" id="motherPhone" name="motherPhone" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="motherOccupation">Occupation:</label>
              <input v-model="formData.motherOccupation" type="text" id="motherOccupation" name="motherOccupation" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="motherEducation">Education:</label>
              <input v-model="formData.motherEducation" type="text" id="motherEducation" name="motherEducation" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="motherNID">NID:</label>
              <input v-model="formData.motherNID" type="text" id="motherNID" name="motherNID" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="motherReligion">Religion:</label>
              <input v-model="formData.motherReligion" type="text" id="motherReligion" name="motherReligion" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="motherPhoto">Upload Photo:</label>
              <input type="file" id="motherPhoto" name="motherPhoto" class="form-control-file" accept="image/*" ref="motherPhoto" />
            </div>
          </div>
        </div>

        <!-- Add other fields and details here -->

      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary full-width-btn">Submit</button>
      </div>
    </form>
  </div>

     
    </div>
   

    

  






</div>
</body>


</AppLayout>

</template>

<script>
export default {
  data() {
    return {
      formData: {
        fatherName: '',
        fatherFname: '',
        Class: '',
        email: '',
        fatherAddress: '',
        fatherPhone: '',
        fatherOccupation: '',
        fatherEducation: '',
        fatherNID: '',
        fatherReligion: '',
        fatherPhoto: null,
        MotherName: '',
        motherCname: '',
        motherAddress: '',
        motherPhone: '',
        motherOccupation: '',
        motherEducation: '',
        motherNID: '',
        motherReligion: '',
        motherPhoto: null,
      },
      successMessage: '',
    };
  },
  methods: {
    async submitForm() {
      try {
        let formData = new FormData();

        for (let key in this.formData) {
          formData.append(key, this.formData[key]);
        }

        // Append the file data to FormData
        formData.append('fatherPhoto', this.$refs.fatherPhoto.files[0]);
        formData.append('motherPhoto', this.$refs.motherPhoto.files[0]);

        await this.$inertia.post(route('Subform'), formData);

        this.successMessage = 'Form submitted successfully!';

        // Redirect or show success message as needed
      } catch (error) {
        // Handle errors
        console.error(error);
      }
    },
    closeSuccessMessage() {
      this.successMessage = ''; // Clear the success message when the close button is clicked
    },
  },
};
</script>

<style>
.full-width-btn {
  width: 100%;
}

</style>