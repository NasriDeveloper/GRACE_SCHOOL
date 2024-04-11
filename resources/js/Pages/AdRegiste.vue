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

defineProps({
    title: String,
});

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
    <div class="card-header text-center">
      <h3 class="card-title"><b>STUDENT REGISTRATION.</b></h3>
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
        <div class="form-group">
          <label for="firstName">First Name:</label>
          <input
            v-model="formData.firstName"
            type="text"
            id="firstName"
            name="firstName"
            class="form-control"
            required
          />
        </div>

        <div class="form-group">
          <label for="middleName">Middle Name:</label>
          <input
            v-model="formData.middleName"
            type="text"
            id="middleName"
            name="middleName"
            class="form-control"
          />
        </div>

        <div class="form-group">
          <label for="lastName">Last Name:</label>
          <input
            v-model="formData.lastName"
            type="text"
            id="lastName"
            name="lastName"
            class="form-control"
            required
          />
        </div>

        <div class="form-group">
          <label for="parentfirstName">Parent First Name:</label>
          <input
            v-model="formData.parentfirstName"
            type="text"
            id="parentfirstName"
            name="parentfirstName"
            class="form-control"
            required
          />
        </div>

        <div class="form-group">
          <label for="parentlastName">Parent Last Name:</label>
          <input
            v-model="formData.parentlastName"
            type="text"
            id="parentlastName"
            name="parentlastName"
            class="form-control"
            required
          />
        </div>

        <div class="form-group">
          <label for="class">Class:</label>
          <select v-model="formData.class" id="class" name="class" class="form-control" required>
            <option value="" disabled>Select Class</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
        </div>

        <div class="form-group">
          <label for="yearOfEntry">Year of Entry:</label>
          <select v-model="formData.yearOfEntry" id="yearOfEntry" name="yearOfEntry" class="form-control" required>
            <option value="" disabled>Select Year</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
            <option value="2031">2031</option>
            <option value="2032">2032</option>
            <option value="2033">2033</option>
            <option value="2034">2034</option>
            <option value="2035">2035</option>
            <option value="2036">2036</option>
            <option value="2037">2037</option>
            <option value="2038">2038</option>
            <option value="2039">2039</option>
            <option value="2040">2040</option>
            
          </select>
        </div>

        <div class="form-group">
          <label for="gender">Gender:</label>
          <select v-model="formData.gender" id="gender" name="gender" class="form-control" required>
            <option value="" disabled>Select Gender</option>
            <option value="boy">Boy</option>
            <option value="girl">Girl</option>
          </select>
        </div>

        <div class="form-group">
          <label for="dob">Date of Birth:</label>
          <input
            v-model="formData.dob"
            type="date"
            id="dob"
            name="dob"
            class="form-control"
            required
          />
        </div>

        <div class="col-md-12 form-group">
          <label for="photo">Upload Photo:</label>
          <input
            type="file"
            id="photo"
            name="photo"
            class="form-control-file"
            accept="image/*"
            ref="photo"
          />
        </div>

        <div class="form-group">
          <label for="nationality">Nationality:</label>
          <select v-model="formData.nationality" id="nationality" name="nationality" class="form-control" required>
            <option value="" disabled>Select Nationality</option>
            <option value="Tanzania">Tanzania</option>
    <option value="United States">United States</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Brazil">Brazil</option>
    <option value="Brunei">Brunei</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cabo Verde">Cabo Verde</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czechia">Czechia</option>
    <option value="Côte d'Ivoire">Côte d'Ivoire</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Eswatini">Eswatini</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Greece">Greece</option>
    <option value="Grenada">Grenada</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Honduras">Honduras</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
          </select>
        </div>

        <div class="form-group">
          <label for="placeOfBirth">Place of Birth:</label>
          <input
            v-model="formData.placeOfBirth"
            type="text"
            id="placeOfBirth"
            name="placeOfBirth"
            class="form-control"
            required
          />
        </div>
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






<!-- </AppLayout> -->

</template>


<script>
export default {
  data() {
    return {
      formData: {
            firstName: '',
            middleName: '',
            lastName: '',
            parentfirstName: '',
            parentlastName: '',
            class: null, // Initialize as null
            yearOfEntry: null, // Initialize as null
            gender: '',
            dob: '',
            nationality: '',
            placeOfBirth: '',
            photo: null,
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
      formData.append('photo', this.$refs.photo.files[0]);

      await this.$inertia.post(route('Submitform'), formData);

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

.card-title{
  text-align: center;
  padding-left: 400px;
}


.full-width-btn {
  width: 100%;
  background-color: black;
}


</style>
