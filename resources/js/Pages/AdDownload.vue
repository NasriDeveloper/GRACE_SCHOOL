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

defineProps(["users"]);


const asset = (path) => `${import.meta.env.VITE_APP_BASE_URL}/${path}`;


const calculateTotalScore = (user) => {
  const subjectScores = [
    user.EnglishScore,
    user.KiswahiliScore,
    user.CivicsMoralScore,
    user.SocialStudiesScore,
    user.ScienceTechnScore,
    user.MathematicsScore,
  ];

  // Sum up all subject scores
  const totalScore = subjectScores.reduce((total, score) => total + (parseFloat(score) || 0), 0);

  return totalScore;
};


const calculateAverageScore = (user) => {
  const totalScore = calculateTotalScore(user);
  const numberOfSubjects = 6;

  // Calculate the average by dividing the total score by the number of subjects
  const averageScore = numberOfSubjects > 0 ? totalScore / numberOfSubjects : 0;

  return averageScore.toFixed(2); // Return the average rounded to 2 decimal places
};



const calculateGrade = (user) => {
  const averageScore = parseFloat(calculateAverageScore(user));

  if (averageScore >= 80) {
    return 'A';
  } else if (averageScore >= 65) {
    return 'B';
  } else if (averageScore >= 55) {
    return 'C';
  } else if (averageScore >= 45) {
    return 'D';
  } else if (averageScore >= 34) {
    return 'E';
  } else {
    return 'F';
  }
};



const calculateRemark = (user) => {
  const averageScore = parseFloat(calculateAverageScore(user));

  if (averageScore >= 80) {
    return 'Excellent';
  } else if (averageScore >= 65) {
    return 'Very Good';
  } else if (averageScore >= 55) {
    return 'Good';
  } else if (averageScore >= 45) {
    return 'Poor';
  } else if (averageScore >= 34) {
    return 'Very Poor';
  } else {
    return 'Low Performance';
  }
};

const calculatePosition = (rank) => {
  // The position is based on the rank (index + 1) of the student
  return rank;
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
              <!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Student Details</h4>
                    <p>All about students like name, student id, phone, email, country, city, and more</p>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Class</th>
                                    <th>Stream</th>
                                    <th>English Score</th>
                                    <th>English Subject</th>
                                    <th>Kiswahili Score</th>
                                    <th>Kiswahili Subject</th>
                                    <th>Civics Moral Score</th>
                                    <th>Civics Moral Subject</th>
                                    <th>Social Studies Score</th>
                                    <th>Social Studies Subject</th>
                                    <th>Science Techn Score</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <td>{{ user.Name }}</td>
                                    <td>{{ user.Sex }}</td>
                                    <td>{{ user.Class }}</td>
                                    <td>{{ user.Stream }}</td>
                                    <td>{{ user.EnglishScore }}</td>
                                    <td>{{ user.EnglishSubject }}</td>
                                    <td>{{ user.KiswahiliScore }}</td>
                                    <td>{{ user.KiswahiliSubject }}</td>
                                    <td>{{ user.CivicsMoralScore }}</td>
                                    <td>{{ user.CivicsMoralSubject }}</td>
                                    <td>{{ user.SocialStudiesScore }}</td>
                                    <td>{{ user.SocialStudiesSubject }}</td>
                                    <td>{{ user.ScienceTechnScore }}</td>
                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Science Techn Subject</th>
                                    <th>Mathematics Score</th>
                                    <th>Mathematics Subject</th>
                                    <th>TotalMarks</th>
                                    <th>Average</th> 
                                    <th>Grade</th> 
                                    <th>Remark</th> 
                                    <th>Position</th> 
                                    <th>Out Of</th> 
                                    <th>Sport</th>
                                    <th>Cooperation</th>
                                    <th>Discipline</th>
                                    <th>Cleanliness</th>
                                    <th>Hardworking</th>
                                    <th>Principal Comment</th>
                                    <th>Class Teacher</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <td>{{ user.ScienceTechnSubject }}</td>
                                    <td>{{ user.MathematicsScore }}</td>
                                    <td>{{ user.MathematicsSubject }}</td>
                                    <td>{{ calculateTotalScore(user) }}</td> 
                                    <td>{{ calculateAverageScore(user) }}</td> 
                                    <td>{{ calculateGrade(user) }}</td> 
                                    <td>{{ calculateRemark(user) }}</td>
                                    <td>{{ calculatePosition(index + 1) }}</td>
                                    <td>{{ users.length }}</td> 
                                    <td>{{ user.Sport }}</td>
                                    <td>{{ user.Cooperation }}</td>
                                    <td>{{ user.Discipline }}</td>
                                    <td>{{ user.Cleanliness }}</td>
                                    <td>{{ user.Hardworking }}</td>
                                    <td>{{ user.PrincipalComment }}</td>
                                  
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Phone No</th>
                                    <th>Principal Name</th>
                                    <th>Phone N</th>
                                    <th>Signature</th>
                                    <th>Date Of</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <td>{{ user.PhoneNo }}</td>
                                    <td>{{ user.PrincipalName }}</td>
                                    <td>{{ user.PhoneN }}</td>
                                    <td>{{ user.Signature }}</td>
                                    <td>{{ user.DateOf }}</td>
                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>
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






