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
        <h3 class="card-title"><b>REPORT UPLOAD.</b></h3>
    </div>
    <div v-if="successMessage" class="alert alert-success">
        {{ successMessage }}
        <button @click="closeSuccessMessage" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>  

              <form @submit.prevent="submitForm">
                        <div class="card-body">
                            <!-- Existing fields (First Name, Middle Name, Last Name, Parent First Name, Parent Last Name, Class, Year of Entry, Gender, Date of Birth, Upload Photo, Nationality, Place of Birth) -->

                            <!-- English Details -->
                            <div class="form-group">
                              <label for="Name">Name:</label>
                              <select v-model="formData.Name" id="Name" name="Name" class="form-control" required>
                              <option v-for="user in users" :key="user.id">{{ user.firstName }} {{ user.middleName }} {{ user.lastName }}</option>
                             </select>
                            </div>

                            <div class="form-group">
                                 <label for="email">Email:</label>
                                 <input v-model="formData.email" type="text" id="email" name="email" class="form-control" required>
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
                                <label for="EnglishScore">English Score:</label>
                                <input v-model="formData.EnglishScore" type="text" id="EnglishScore" name="EnglishScore" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="EnglishSubject">English Subject:</label>
                                <input v-model="formData.EnglishSubject" type="text" id="EnglishSubject" name="EnglishSubject" class="form-control" />
                            </div>


                            <div class="form-group">
                                <label for="KiswahiliScore">Kiswahili Score:</label>
                                <input v-model="formData.KiswahiliScore" type="text" id="KiswahiliScore" name="KiswahiliScore" class="form-control" />
                            </div>

                          
                            <div class="form-group">
                                 <label for="KiswahiliSubject">Kiswahili Subject:</label>
                                 <input v-model="formData.KiswahiliSubject" type="text" id="KiswahiliSubject" name="KiswahiliSubject" class="form-control" />
                            </div>


                            <!-- Civics&Moral Section -->
                            <div class="form-group">
                                 <label for="CivicsMoralScore">Civics & Moral Score:</label>
                                 <input v-model="formData.CivicsMoralScore" type="text" id="CivicsMoralScore" name="CivicsMoralScore" class="form-control" />
                            </div>

                           

                            <div class="form-group">
                                 <label for="CivicsMoralSubject">Civics & Moral Subject:</label>
                                 <input v-model="formData.CivicsMoralSubject" type="text" id="CivicsMoralSubject" name="CivicsMoralSubject" class="form-control" />
                            </div>

                            <!-- Social Studies Section -->
                            <div class="form-group">
                                 <label for="SocialStudiesScore">Social Studies Score:</label>
                                 <input v-model="formData.SocialStudiesScore" type="text" id="SocialStudiesScore" name="SocialStudiesScore" class="form-control" />
                            </div>

                            

                            <div class="form-group">
                               <label for="SocialStudiesSubject">Social Studies Subject:</label>
                               <input v-model="formData.SocialStudiesSubject" type="text" id="SocialStudiesSubject" name="SocialStudiesSubject" class="form-control" />
                            </div>


                            <div class="form-group">
                                <label for="ScienceTechnScore">Science & Technology Score:</label>
                                <input v-model="formData.ScienceTechnScore" type="text" id="ScienceTechnScore" name="ScienceTechnScore" class="form-control" />
                            </div>


                          <div class="form-group">
                             <label for="ScienceTechnSubject">Science & Technology Subject:</label>
                             <input v-model="formData.ScienceTechnSubject" type="text" id="ScienceTechnSubject" name="ScienceTechnSubject" class="form-control" />
                           </div>
                            

                           <div class="form-group">
                              <label for="MathematicsScore">Mathematics Score:</label>
                              <input v-model="formData.MathematicsScore" type="text" id="MathematicsScore" name="MathematicsScore" class="form-control" />
                            </div>

                        

                            <div class="form-group">
                                <label for="MathematicsSubject">Mathematics Subject:</label>
                                <input v-model="formData.MathematicsSubject" type="text" id="MathematicsSubject" name="MathematicsSubject" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="vskillsScore">vskills Score:</label>
                                <input v-model="formData.vskillsScore" type="text" id="vskillsScore" name="vskillsScore" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="vskillsSubject">vskills Subject:</label>
                                <input v-model="formData.vskillsSubject" type="text" id="vskillsSubject" name="vskillsSubject" class="form-control" />
                            </div>





                            <!-- Repeat the above pattern for other subjects (Kiswahili, Civics&Moral, Social Studies, Science & Technology, Mathematics) -->

                            <!-- Total Marks, Average, Grade, Remark, Position, Out of -->
                           

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
                                 <label for="ClassTeacher">Class Teacher's Name:</label>
                                 <input v-model="formData.ClassTeacher" type="text" id="ClassTeacher" name="ClassTeacher" class="form-control" />
                            </div>

                            <div class="form-group">
                                 <label for="PhoneNo">Class Teacher's Phone Number:</label>
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
                                <label for="PhoneN">Principal's PhoneNumber:</label>
                                <input v-model="formData.PhoneN" type="text" id="PhoneN" name="PhoneN" class="form-control" />
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

                        </div>

                        <div class="form-group">
                         <label for="photo">Student Passport:</label>
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
                         <label for="photo1">Pricipal's Signature:</label>
                           <input
                               type="file"
                               id="photo1"
                               name="photo1"
                               class="form-control-file"
                               accept="image/*"
                               ref="photo1"
                           />
                         </div>
                         <div class="form-group">
                         <label for="photo2">ClassTeacher's Signature:</label>
                           <input
                               type="file"
                               id="photo2"
                               name="photo2"
                               class="form-control-file"
                               accept="image/*"
                               ref="photo2"
                           />
                         </div>
                         <div class="form-group">
                         <label for="photo3">Stamp:</label>
                           <input
                               type="file"
                               id="photo3"
                               name="photo3"
                               class="form-control-file"
                               accept="image/*"
                               ref="photo3"
                           />
                         </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary full-width-btn">Submit</button>
                            </div>
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
       email: '',
       Sex: '',
       Class: '',
       Stream: '',  
       EnglishScore: '',
       EnglishSubject: '',
       KiswahiliScore: '',
       KiswahiliSubject: '',
       CivicsMoralScore: '',
       CivicsMoralSubject: '',
       SocialStudiesScore: '',
       SocialStudiesSubject: '',
       ScienceTechnScore: '',
       ScienceTechnSubject: '',
       MathematicsScore: '',
       MathematicsSubject: '',
       Sport: '',
       vskillsScore: '',
       vskillsSubject: '',
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

      await this.$inertia.post(route('Submityforms'), formData);
      
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