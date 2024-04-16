<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

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




 
<body>
    <!--== MAIN CONTAINER ==-->
    <nav class="bg-red-700 text-white p-4 fixed top-0 w-full z-10">
        <div class="max-w-screen-xl mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-semibold" style="padding-bottom: 50px;">
                <img src="homes/img/logo/logo.png" class="h-8" alt="Flowbite Logo" />
                Graceschools
            </a>
            <div class="flex items-center space-x-4">
                <form @submit.prevent="logout">
                    <DropdownLink as="button">
                        <a class='waves-effect dropdown-button top-user-pro' data-activates='top-menu'>LOGOUT<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </DropdownLink>
                </form>
            </div>
        </div>
    </nav><br><br><br><br><br><br><br><br>
    
   
  <table>
    <tr v-for="user in users" :key="user.id">
        <th><img src="homes/img/logo/logo.png" class="h-20"></th>
        <th> GRACE SCHOOLS KIGAMBONI.<br> Registration No. EM.17031 Kigamboni-Mjimwema Road.</th>
        <!-- Display the image in the PDF -->
        <th><img :src="user.photo" class="h-20">
        </th>

    </tr>
  </table><br>
  <table>
    <tr v-for="user in users" :key="user.id">
        <th> ANNUAL EXAMINATION REPORT {{ user.DateOf }}</th>
    </tr>
  </table><br>
  <table>
        <tr v-for="user in users" :key="user.id">
            <th>Name</th>
            <td>{{user.Name}}</td>
            <th>Sex</th>
            <td>{{user.Sex}}</td>
        </tr>
        <tr v-for="user in users" :key="user.id">
            <th>Class</th>
            <td>{{user.Class}}</td>
            <th>Stream</th>
            <td>{{user.Stream}}</td>
        </tr>
     
    </table><br>

    <table>
    <thead>
        <tr>
            <th>S/N</th>
            <th>Subject</th>
            <th>Score</th>
            <th>Grade</th>
            <th>Rank</th>
            <th>Out of</th>
            <th>Remarks</th>
            <th>Subject</th>
        </tr>
    </thead>
    <tbody>
        <!-- Loop over subjects and display data -->
        <tr v-for="user in users" :key="user.id">
            <td>1</td>
            <td>ENGLISH</td>
            <td>{{ user.EnglishScore }}</td>
            <td>{{ user.EnglishGrade }} </td>
            <td>{{ user.subjectPositions['English'] }}</td>
            <td>{{ user.outOf}}</td> 
            <td>{{ user.EnglishRemark }} </td>     
            <td>{{ user.EnglishSubject }}</td>      
           
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>2</td>
            <td>KISWAHILI</td>
            <td>{{ user.KiswahiliScore }}</td>
            <td>{{ user.KiswahiliGrade }}</td>
            <td>{{ user.subjectPositions['Kiswahili'] }}</td>
            <td>{{ user.outOf }}</td>
            <td>{{ user.KiswahiliRemark }}</td>
            <td>{{ user.KiswahiliSubject }}</td>
     
           
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>3</td>
            <td>Civics Moral</td>
            <td>{{ user.CivicsMoralScore }}</td>
            <td>{{ user.CivicsMoralGrade }}</td>
            <td>{{ user.subjectPositions['CivicsMoral'] }}</td>
            <td>{{ user.outOf }}</td>
            <td>{{ user.CivicsMoralRemark }}</td>
            <td>{{ user.CivicsMoralSubject }}</td>

           
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>4</td>
            <td>Social Studies</td>
            <td>{{ user.SocialStudiesScore }}</td>
            <td>{{ user.SocialStudiesGrade }}</td>
            <td>{{ user.subjectPositions['SocialStudies'] }}</td>
            <td>{{ user.outOf }}</td>
            <td>{{ user.SocialStudiesRemark }}</td>
            <td>{{ user.SocialStudiesSubject }}</td>

           
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>5</td>
            <td>Science Techn</td>
            <td>{{ user.ScienceTechnScore }}</td>
            <td>{{ user.ScienceTechnGrade }}</td>
            <td>{{ user.subjectPositions['ScienceTechn'] }}</td>
            <td>{{ user.outOf }}</td>
            <td>{{ user.ScienceTechnRemark }}</td>
            <td>{{ user.ScienceTechnSubject }}</td>


           
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>6</td>
            <td>Mathematics</td>
            <td>{{ user.MathematicsScore }}</td>
            <td>{{ user.MathematicsGrade }}</td>
            <td>{{ user.subjectPositions['Mathematics'] }}</td>
            <td>{{ user.outOf }}</td>
            <td>{{ user.MathematicsRemark }}</td>
            <td>{{ user.MathematicsSubject }}</td>


           
        </tr>
    </tbody>
</table>

<table>
    <tr v-for="user in users" :key="user.id">
        <th>TOTAL MARKS: {{ user.totalScore }}</th>
        <th>AVERAGE:  {{ user.averageScore }}</th>
        <th>GRADE: {{ user.averageScoreGrade }}</th>
        <th>REMARK: {{ user.averageScoreRemark}}</th>
        <th> POSITION: {{ user.classPosition }} </th>
        <th>OUTOF: {{ user.outOf }}students</th>
    </tr>
</table><br><br>


<table>
    <thead>
        <tr>
        <th>DOMAIN</th>
        <th>Sport</th>
        <th>Cooperation</th>
        <th>Discipline</th>
        <th>Cleanliness</th>
        <th>Hardworking</th>
    </tr>
    </thead>
    <tbody>
        <tr v-for="user in users" :key="user.id">
            <td>REMARK</td>
            <td>{{ user.Sport }}</td>
            <td>{{ user.Cooperation }}</td>
            <td>{{ user.Discipline }}</td>
            <td>{{ user.Cleanliness }}</td>
            <td>{{ user.Hardworking }}</td>
        </tr>
    </tbody>
    
</table><br>

<table>
    <thead>
        <th>PRINCIPAL'S COMMENT</th>
    </thead>
    <tbody>
        <tr v-for="user in users" :key="user.id">
            <td>{{ user.PrincipalComment }}</td>
             
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>Principal's Name: {{ user.PrincipalName }}  Phone No: {{ user.PhoneN }}</td>
        </tr>
    </tbody>
</table><br><br><br>

<table>
    <thead>
        <th>CLASS TEACHER'S COMMENT</th>
    </thead>
    <tbody>
        <tr v-for="user in users" :key="user.id">
            <td>{{ user.classteachercomment }}</td>
             
        </tr>
        <tr v-for="user in users" :key="user.id">
            <td>Principal's Name: {{ user.ClassTeacher }}  Phone No: {{ user.PhoneNo }}</td>
        </tr>
    </tbody>
</table><br><br>

<table>
    <thead>
    <tr>
        <th>CLASS TEACHER'S SIGN</th>
        <th>PRINCIPAL'S SIGN</th>
    </tr>
    </thead>
    <tbody>
        <tr v-for="user in users" :key="user.id">
            <td><img :src="user.photo1" class="h-20"></td>
            <td><img :src="user.photo2" class="h-20"></td>
        </tr>
       
    </tbody>
   
</table>

<table>
    <tr v-for="user in users" :key="user.id">
        <th>DATE OF REPORTING {{ user.dob }}</th>
    </tr>
</table>

<table>
    <thead>
    <tr>
        <th>STAMP</th>
    </tr>
    </thead>
   <tbody>
    <tr v-for="user in users" :key="user.id">
        <td><img :src="user.photo2" class="h-20"></td>
    </tr>
   </tbody>
   
</table>

   
  


    <!--== BODY CONTAINER ==-->
    
    <!-- Import jQuery before materialize.js -->
  
   
</body>


</AppLayout>

</template>

<style>





</style>


<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td, th {
            text-align: center;
            padding: 8px;
            border: 1px solid black;
        }
        .grace {
            background-color: gray;
        }
        
       .grac {
            background-color: yellow;
        }

        .card-title{
              text-align: center;
              padding-left: 400px;
         }
         img {
        display: block; /* Make sure the image is a block element */
        margin: auto; /* Center the image horizontally */
    }
      
    </style>
