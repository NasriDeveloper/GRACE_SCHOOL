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

defineProps(["users"]);

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
        <h3 class="card-title"><b>REPORT UPLOAD</b></h3>
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
                <label for="Name">Name:</label>
                <select v-model="formData.Name" id="Name" name="Name" class="form-control" required>
                    <option v-for="user in users" :key="user.id">{{ user.firstName }} {{ user.middleName }} {{ user.lastName }}</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Sex">Sex:</label>
                <input v-model="formData.Sex" type="text" id="Sex" name="Sex" class="form-control" />
            </div>

            <div class="form-group">
                <label for="Class">Class:</label>
                <select v-model="formData.Class" id="Class" name="Class" class="form-control" required>
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
                     <label for="Stream">Stream:</label>
                     <input v-model="formData.Stream" type="text" id="Stream" name="Stream" class="form-control" />
                 </div>

                 <div class="form-group">
                    <label for="NumerousScore">Numerous Score:</label>
                    <input v-model="formData.NumerousScore" type="text" id="NumerousScore" name="NumerousScore" class="form-control" />
                 </div>

                  <div class="form-group">
                    <label for="NumerousSubject">Numerous Subject:</label>
                    <input v-model="formData.NumerousSubject" type="text" id="NumerousSubject" name="NumerousSubject" class="form-control" />
                  </div>

                   <div class="form-group">
                     <label for="ReadingScore">Reading Score:</label>
                     <input v-model="formData.ReadingScore" type="text" id="ReadingScore" name="ReadingScore" class="form-control" />
                   </div>

                    <div class="form-group">
                       <label for="ReadingSubject">Reading Subject:</label>
                       <input v-model="formData.ReadingSubject" type="text" id="ReadingSubject" name="ReadingSubject" class="form-control" />
                    </div>

                    <div class="form-group">
                       <label for="WrittingScore">Writting Score:</label>
                       <input v-model="formData.WrittingScore" type="text" id="WrittingScore" name="WrittingScore" class="form-control" />
                    </div>

                    <div class="form-group">
                       <label for="WrittingSubject">Writting Subject:</label>
                       <input v-model="formData.WrittingSubject" type="text" id="WrittingSubject" name="WrittingSubject" class="form-control" />
                    </div>

                    <div class="form-group">
                       <label for="HealthcareScore">Healthycare Score:</label>
                       <input v-model="formData.HealthCareScore" type="text" id="HealthCareScore" name="HealthCareScore" class="form-control" />
                    </div>

                    <div class="form-group">
                       <label for="HealthcareSubject">Healthycare Subject:</label>
                       <input v-model="formData.HealthCareSubject" type="text" id="HealthCareSubject" name="HealthCareSubject" class="form-control" />
                     </div>

                    <div class="form-group">
                       <label for="ArtSportScore">ArtSport Score:</label>
                       <input v-model="formData.ArtSportScore" type="text" id="ArtSportScore" name="ArtSportScore" class="form-control" />
                    </div>

                    <div class="form-group">
                       <label for="ArtSportSubject">ArtSport Subject:</label>
                       <input v-model="formData.ArtSportSubject" type="text" id="ArtSportSubject" name="ArtSportSubject" class="form-control" />
                    </div>

                    <div class="form-group">
                       <label for="Sport">Sport:</label>
                       <input v-model="formData.Sport" type="text" id="Sport" name="Sport" class="form-control" />
                    </div>

                    <div class="form-group">
                       <label for="Cooperation">Cooperation:</label>
                       <input v-model="formData.Cooperation" type="text" id="Cooperation" name="Cooperation" class="form-control" />
                   </div>

                    <div class="form-group">
                       <label for="Discipline">Discipline:</label>
                       <input v-model="formData.Discipline" type="text" id="Discipline" name="Discipline" class="form-control" />
                    </div>

                    <div class="form-group">
                       <label for="Cleanliness">Cleanliness:</label>
                       <input v-model="formData.Cleanliness" type="text" id="Cleanliness" name="Cleanliness" class="form-control" />
                    </div>

                    <div class="form-group">
                       <label for="Hardworking">Hardworking:</label>
                       <input v-model="formData.Hardworking" type="text" id="Hardworking" name="Hardworking" class="form-control" />
                    </div>


                    <div class="form-group">
                       <label for="classteachercomment">ClassTeacher's Comment:</label>
                       <input v-model="formData.classteachercomment" type="text" id="classteachercomment" name="classteachercomment" class="form-control" />
                    </div>


                    <div class="form-group">
                       <label for="ClassTeacher">Class Teacher'Name:</label>
                       <input v-model="formData.ClassTeacher" type="text" id="ClassTeacher" name="ClassTeacher" class="form-control" />
                    </div>

                    <div class="form-group">
                       <label for="PhoneNo">Phone Number:</label>
                       <input v-model="formData.PhoneNo" type="text" id="PhoneNo" name="PhoneNo" class="form-control" />
                    </div>

                    
                    <div class="form-group">
                       <label for="PrincipalComment">Principal Comment:</label>
                       <input v-model="formData.PrincipalComment" type="text" id="PrincipalComment" name="PrincipalComment" class="form-control" />
                    </div>

                    <div class="form-group">
                       <label for="PrincipalName">Principal Name:</label>
                       <input v-model="formData.PrincipalName" type="text" id="PrincipalName" name="PrincipalName" class="form-control" />
                     </div>

                    <div class="form-group">
                       <label for="PhoneN">Principal Phone Number:</label>
                       <input v-model="formData.PhoneN" type="text" id="PhoneN" name="PhoneN" class="form-control" />
                    </div>



                    <div class="form-group">
                       <label for="Signature">Signature:</label>
                       <input v-model="formData.Signature" type="text" id="Signature" name="Signature" class="form-control" />
                    </div>

                    <div class="form-group">
                       <label for="DateOf">Date Of:</label>
                       <input v-model="formData.DateOf" type="text" id="DateOf" name="DateOf" class="form-control" />
                   </div>

                           <div class="form-group">
                             <label for="dob">Date School Opened:</label>
                               <input
                                 v-model="formData.dob"
                                 type="date"
                                 id="dob"
                                 name="dob"
                                 class="form-control"
                                 required
                                 />
                            </div>


            <!-- Add other form fields here, maintaining the structure -->

            <div class="form-group">
                <label for="photo">Student Passport:</label>
                <input type="file" id="photo" name="photo" class="form-control-file" accept="image/*" ref="photo" />
            </div>

            <div class="form-group">
                <label for="photo1">Principal's Signature:</label>
                <input type="file" id="photo1" name="photo1" class="form-control-file" accept="image/*" ref="photo1" />
            </div>

            <div class="form-group">
                <label for="photo2">Class Teacher's Signature:</label>
                <input type="file" id="photo2" name="photo2" class="form-control-file" accept="image/*" ref="photo2" />
            </div>

            <div class="form-group">
                <label for="photo3">Stamp:</label>
                <input type="file" id="photo3" name="photo3" class="form-control-file" accept="image/*" ref="photo3" />
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
</template>

<script>
export default {
  data() {
    return {
      formData: {
        Name: '',
        Sex: '',
        Class: '',
        Stream: '',
        NumerousScore: '',
        NumerousSubject: '',
        ReadingScore: '',
        ReadingSubject: '',
        WrittingScore: '',
        WrittingSubject: '',
        HealthCareScore: '',
        HealthCareSubject: '',
        ArtSportScore: '',
        ArtSportSubject: '',
        Sport: '',
        Cooperation: '',
        Discipline: '',
        Cleanliness: '',
        Hardworking: '',
        PrincipalComment: '',
        classteachercomment: '',
        ClassTeacher: '',
        PhoneNo: '',
        PrincipalName: '',
        PhoneN: '',
        photo: null,
        photo1: null,
        photo2: null,
        photo3: null,
        dob: '',
        Signature: '',
        DateOf: '',
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
      formData.append('photo1', this.$refs.photo1.files[0]);
      formData.append('photo2', this.$refs.photo2.files[0]);
      formData.append('photo3', this.$refs.photo3.files[0]);

      await this.$inertia.post(route('Submityformu'), formData);

      this.successMessage = 'Report uploaded successfully!';
      
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
}


</style>
