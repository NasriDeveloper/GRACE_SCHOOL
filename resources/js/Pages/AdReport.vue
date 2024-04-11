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




<body>
    <!--== MAIN CONTRAINER ==-->
 
 <AdNavHeader />
                                 


    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
           
           <AdSidebar />
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                        <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <!--== DASHBOARD INFO ==-->
              

                <!--== User Details ==-->
                <div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Student Details</h4>
                    <p>Enter student details here</p>
                </div>
                <div class="tab-inn">
                    <form @submit.prevent="submitForm">
                        <div class="row">
                            <!-- Existing fields (First Name, Middle Name, Last Name, Parent First Name, Parent Last Name, Class, Year of Entry, Gender, Date of Birth, Upload Photo, Nationality, Place of Birth) -->

                            <!-- English Details -->
                            <div class="col-md-6 form-group">
                                <label for="Name">Name:</label>
                                <input v-model="formData.Name" type="text" id="Name" name="Name" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="Sex">Sex:</label>
                                <input v-model="formData.Sex" type="text" id="Sex" name="Sex" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
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

                            <div class="col-md-6 form-group">
                               <label for="Stream">Stream:</label>
                               <input v-model="formData.Stream" type="text" id="Stream" name="Stream" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="EnglishScore">English Score:</label>
                                <input v-model="formData.EnglishScore" type="text" id="EnglishScore" name="EnglishScore" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="EnglishGrade">English Grade:</label>
                                <input v-model="formData.EnglishGrade" type="text" id="EnglishGrade" name="EnglishGrade" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                 <label for="EnglishRank">English Rank:</label>
                                 <input v-model="formData.EnglishRank" type="text" id="EnglishRank" name="EnglishRank" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                  <label for="EnglishOut">English Out:</label>
                                  <input v-model="formData.EnglishOut" type="text" id="EnglishOut" name="EnglishOut" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                 <label for="EnglishRemark">English Remark:</label>
                                 <input v-model="formData.EnglishRemark" type="text" id="EnglishRemark" name="EnglishRemark" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="EnglishSubject">English Subject:</label>
                                <input v-model="formData.EnglishSubject" type="text" id="EnglishSubject" name="EnglishSubject" class="form-control" />
                            </div>


                            <div class="col-md-6 form-group">
                                <label for="KiswahiliScore">Kiswahili Score:</label>
                                <input v-model="formData.KiswahiliScore" type="text" id="KiswahiliScore" name="KiswahiliScore" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="KiswahiliGrade">Kiswahili Grade:</label>
                                <input v-model="formData.KiswahiliGrade" type="text" id="KiswahiliGrade" name="KiswahiliGrade" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="KiswahiliRank">Kiswahili Rank:</label>
                                <input v-model="formData.KiswahiliRank" type="text" id="KiswahiliRank" name="KiswahiliRank" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                 <label for="KiswahiliOut">Kiswahili Out:</label>
                                 <input v-model="formData.KiswahiliOut" type="text" id="KiswahiliOut" name="KiswahiliOut" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                  <label for="KiswahiliRemark">Kiswahili Remark:</label>
                                  <input v-model="formData.KiswahiliRemark" type="text" id="KiswahiliRemark" name="KiswahiliRemark" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                 <label for="KiswahiliSubject">Kiswahili Subject:</label>
                                 <input v-model="formData.KiswahiliSubject" type="text" id="KiswahiliSubject" name="KiswahiliSubject" class="form-control" />
                            </div>


                            <!-- Civics&Moral Section -->
                            <div class="col-md-6 form-group">
                                 <label for="CivicsMoralScore">Civics & Moral Score:</label>
                                 <input v-model="formData.CivicsMoralScore" type="text" id="CivicsMoralScore" name="CivicsMoralScore" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                 <label for="CivicsMoralGrade">Civics & Moral Grade:</label>
                                 <input v-model="formData.CivicsMoralGrade" type="text" id="CivicsMoralGrade" name="CivicsMoralGrade" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                  <label for="CivicsMoralRank">Civics & Moral Rank:</label>
                                  <input v-model="formData.CivicsMoralRank" type="text" id="CivicsMoralRank" name="CivicsMoralRank" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                 <label for="CivicsMoralOut">Civics & Moral Out:</label>
                                 <input v-model="formData.CivicsMoralOut" type="text" id="CivicsMoralOut" name="CivicsMoralOut" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                 <label for="CivicsMoralRemark">Civics & Moral Remark:</label>
                                 <input v-model="formData.CivicsMoralRemark" type="text" id="CivicsMoralRemark" name="CivicsMoralRemark" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                 <label for="CivicsMoralSubject">Civics & Moral Subject:</label>
                                 <input v-model="formData.CivicsMoralSubject" type="text" id="CivicsMoralSubject" name="CivicsMoralSubject" class="form-control" />
                            </div>

                            <!-- Social Studies Section -->
                            <div class="col-md-6 form-group">
                                 <label for="SocialStudiesScore">Social Studies Score:</label>
                                 <input v-model="formData.SocialStudiesScore" type="text" id="SocialStudiesScore" name="SocialStudiesScore" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                  <label for="SocialStudiesGrade">Social Studies Grade:</label>
                                  <input v-model="formData.SocialStudiesGrade" type="text" id="SocialStudiesGrade" name="SocialStudiesGrade" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                  <label for="SocialStudiesRank">Social Studies Rank:</label>
                                  <input v-model="formData.SocialStudiesRank" type="text" id="SocialStudiesRank" name="SocialStudiesRank" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="SocialStudiesOut">Social Studies Out:</label>
                                <input v-model="formData.SocialStudiesOut" type="text" id="SocialStudiesOut" name="SocialStudiesOut" class="form-control" />
                            </div>

                             <div class="col-md-6 form-group">
                                <label for="SocialStudiesRemark">Social Studies Remark:</label>
                                <input v-model="formData.SocialStudiesRemark" type="text" id="SocialStudiesRemark" name="SocialStudiesRemark" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                               <label for="SocialStudiesSubject">Social Studies Subject:</label>
                               <input v-model="formData.SocialStudiesSubject" type="text" id="SocialStudiesSubject" name="SocialStudiesSubject" class="form-control" />
                            </div>


                            <div class="col-md-6 form-group">
                                <label for="ScienceTechnScore">Science & Technology Score:</label>
                                <input v-model="formData.ScienceTechnScore" type="text" id="ScienceTechnScore" name="ScienceTechnScore" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="ScienceTechnGrade">Science & Technology Grade:</label>
                                <input v-model="formData.ScienceTechnGrade" type="text" id="ScienceTechnGrade" name="ScienceTechnGrade" class="form-control" />
                            </div>

                          <div class="col-md-6 form-group">
                                <label for="ScienceTechnRank">Science & Technology Rank:</label>
                                <input v-model="formData.ScienceTechnRank" type="text" id="ScienceTechnRank" name="ScienceTechnRank" class="form-control" />
                          </div>

                          <div class="col-md-6 form-group">
                               <label for="ScienceTechnOut">Science & Technology Out:</label>
                               <input v-model="formData.ScienceTechnOut" type="text" id="ScienceTechnOut" name="ScienceTechnOut" class="form-control" />
                         </div>

                          <div class="col-md-6 form-group">
                             <label for="ScienceTechnRemark">Science & Technology Remark:</label>
                             <input v-model="formData.ScienceTechnRemark" type="text" id="ScienceTechnRemark" name="ScienceTechnRemark" class="form-control" />
                          </div>

                          <div class="col-md-6 form-group">
                             <label for="ScienceTechnSubject">Science & Technology Subject:</label>
                             <input v-model="formData.ScienceTechnSubject" type="text" id="ScienceTechnSubject" name="ScienceTechnSubject" class="form-control" />
                           </div>
                            

                           <div class="col-md-6 form-group">
                              <label for="MathematicsScore">Mathematics Score:</label>
                              <input v-model="formData.MathematicsScore" type="text" id="MathematicsScore" name="MathematicsScore" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                               <label for="MathematicsGrade">Mathematics Grade:</label>
                               <input v-model="formData.MathematicsGrade" type="text" id="MathematicsGrade" name="MathematicsGrade" class="form-control" />
                            </div>

                             <div class="col-md-6 form-group">
                                <label for="MathematicsRank">Mathematics Rank:</label>
                                <input v-model="formData.MathematicsRank" type="text" id="MathematicsRank" name="MathematicsRank" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="MathematicsOut">Mathematics Out:</label>
                                <input v-model="formData.MathematicsOut" type="text" id="MathematicsOut" name="MathematicsOut" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="MathematicsRemark">Mathematics Remark:</label>
                                <input v-model="formData.MathematicsRemark" type="text" id="MathematicsRemark" name="MathematicsRemark" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="MathematicsSubject">Mathematics Subject:</label>
                                <input v-model="formData.MathematicsSubject" type="text" id="MathematicsSubject" name="MathematicsSubject" class="form-control" />
                            </div>




                            <!-- Repeat the above pattern for other subjects (Kiswahili, Civics&Moral, Social Studies, Science & Technology, Mathematics) -->

                            <!-- Total Marks, Average, Grade, Remark, Position, Out of -->
                            <div class="col-md-6 form-group">
                                <label for="TotalMarks">Total Marks:</label>
                                <input v-model="formData.TotalMarks" type="text" id="TotalMarks" name="TotalMarks" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                               <label for="Average">Average:</label>
                               <input v-model="formData.Average" type="text" id="Average" name="Average" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                               <label for="Grade">Grade:</label>
                               <input v-model="formData.Grade" type="text" id="Grade" name="Grade" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                               <label for="Remark">Remark:</label>
                               <input v-model="formData.Remark" type="text" id="Remark" name="Remark" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                               <label for="Position">Position:</label>
                               <input v-model="formData.Position" type="text" id="Position" name="Position" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                              <label for="Out_of">Out of:</label>
                              <input v-model="formData.Out_of" type="text" id="OutOf" name="Out_of" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                              <label for="Sport">Sport:</label>
                              <input v-model="formData.Sport" type="text" id="Sport" name="Sport" class="form-control" />
                            </div>

                           <div class="col-md-6 form-group">
                              <label for="Cooperation">Cooperation:</label>
                              <input v-model="formData.Cooperation" type="text" id="Cooperation" name="Cooperation" class="form-control" />
                           </div>

                          <div class="col-md-6 form-group">
                                 <label for="Discipline">Discipline:</label>
                                <input v-model="formData.Discipline" type="text" id="Discipline" name="Discipline" class="form-control" />
                           </div>

                            <div class="col-md-6 form-group">
                                 <label for="Cleanliness">Cleanliness:</label>
                                 <input v-model="formData.Cleanliness" type="text" id="Cleanliness" name="Cleanliness" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                 <label for="Hardworking">Hardworking:</label>
                                 <input v-model="formData.Hardworking" type="text" id="Hardworking" name="Hardworking" class="form-control" />
                            </div>

                             <div class="col-md-6 form-group">
                                 <label for="PrincipalComment">Principal Comment:</label>
                                 <input v-model="formData.PrincipalComment" type="text" id="PrincipalComment" name="PrincipalComment" class="form-control" />
                            </div>

                             <div class="col-md-6 form-group">
                                 <label for="ClassTeacher">Class Teacher:</label>
                                 <input v-model="formData.ClassTeacher" type="text" id="ClassTeacher" name="ClassTeacher" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                 <label for="PhoneNo">Phone No:</label>
                                 <input v-model="formData.PhoneNo" type="text" id="PhoneNo" name="PhoneNo" class="form-control" />
                            </div>

                            <div class="col-md-6 form-group">
                                 <label for="PrincipalName">Principal Name:</label>
                                 <input v-model="formData.PrincipalName" type="text" id="PrincipalName" name="PrincipalName" class="form-control" />
                           </div>

                            <div class="col-md-6 form-group">
                                <label for="PhoneN">Phone N:</label>
                                <input v-model="formData.PhoneN" type="text" id="PhoneN" name="PhoneN" class="form-control" />
                            </div>

                           <div class="col-md-6 form-group">
                                 <label for="Signature">Signature:</label>
                                 <input v-model="formData.Signature" type="text" id="Signature" name="Signature" class="form-control" />
                           </div>

                            <div class="col-md-6 form-group">
                                 <label for="DateOf">Date Of:</label>
                                <input v-model="formData.DateOf" type="text" id="DateOf" name="DateOf" class="form-control" />
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
</div>

				
            
            </div>

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
  
   
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
       EnglishScore: '',
       EnglishGrade: '',
       EnglishRank: '',
       EnglishOut: '',
       EnglishRemark: '',
       EnglishSubject: '',
       KiswahiliScore: '',
       KiswahiliGrade: '',
       KiswahiliRank: '',
       KiswahiliOut: '',
       KiswahiliRemark: '',
       KiswahiliSubject: '',
       CivicsMoralScore: '',
       CivicsMoralGrade: '',
       CivicsMoralRank: '',
       CivicsMoralOut: '',
       CivicsMoralRemark: '',
       CivicsMoralSubject: '',
       SocialStudiesScore: '',
       SocialStudiesGrade: '',
       SocialStudiesRank: '',
       SocialStudiesOut: '',
       SocialStudiesRemark: '',
       SocialStudiesSubject: '',
       ScienceTechnScore: '',
       ScienceTechnGrade: '',
       ScienceTechnRank: '',
       ScienceTechnOut: '',
       ScienceTechnRemark: '',
       ScienceTechnSubject: '',
       MathematicsScore: '',
       MathematicsGrade: '',
       MathematicsRank: '',
       MathematicsOut: '',
       MathematicsRemark: '',
       MathematicsSubject: '',
       TotalMarks: '',
       Average: '',
       Grade: '',
       Remark: '',
       Position: '',
       Out_of: '',
       Sport: '',
       Cooperation: '',
       Discipline: '',
       Cleanliness: '',
       Hardworking: '',
       PrincipalComment: '',
       ClassTeacher: '',
       PhoneNo: '',
       PrincipalName: '',
       PhoneN: '',
       Signature: '',
       DateOf: '',
      },
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
       

        await this.$inertia.post(route('Submiteform'), formData);
        
        // Redirect or show success message as needed
      } catch (error) {
        // Handle errors
        console.error(error);
      }
    },
  },
};
</script>