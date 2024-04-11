<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AdNavHeader from "./AdNavHeader.vue";
import AdSidebar from "./AdSidebar.vue";
import { ref, computed } from 'vue';
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

const successMessage = ref('');

function pdfone(id){
  router.get('/users/'+id+'/pdfone')
}



const asset = (path) => `${import.meta.env.VITE_APP_BASE_URL}/${path}`;


const calculateTotalScore = (user) => {
  const subjectScores = [
    user.EnglishScore,
    user.KiswahiliScore,
    user.CivicsMoralScore,
    user.SocialStudiesScore,
    user.ScienceTechnScore,
    user.MathematicsScore,
    user.vskillsScore,
  ];

  // Sum up all subject scores
  const totalScore = subjectScores.reduce((total, score) => total + (parseFloat(score) || 0), 0);

  return totalScore;
};


const calculateAverageScore = (user) => {
  const totalScore = calculateTotalScore(user);
  const numberOfSubjects = 7;

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


const calculatePosition = (allUsers, currentUser) => {
  const sortedUsers = allUsers.slice().sort((a, b) => calculateAverageScore(b) - calculateAverageScore(a));
  const position = sortedUsers.findIndex(user => user.id === currentUser.id) + 1;
  return position;
};




const calculateSubjectInfo = (subjectScore, allUsers, currentUser) => {
    const grade = calculateGrad(parseFloat(subjectScore));
    const position = calculatePosition(allUsers, currentUser, subjectScore);
    const outOf = allUsers.length;
    const remark = calculateRemarky(parseFloat(subjectScore));

    return { grade, position, outOf, remark };
};


const calculateGrad = (score) => {
    if (score >= 80) {
        return 'A';
    } else if (score >= 65) {
        return 'B';
    } else if (score >= 55) {
        return 'C';
    } else if (score >= 45) {
        return 'D';
    } else if (score >= 34) {
        return 'E';
    } else {
        return 'F';
    }
};



const calculateRemarky = (score) => {
    if (score >= 80) {
        return 'Excellent';
    } else if (score >= 65) {
        return 'Very Good';
    } else if (score >= 55) {
        return 'Good';
    } else if (score >= 45) {
        return 'Poor';
    } else if (score >= 34) {
        return 'Very Poor';
    } else {
        return 'Low Performance';
    }
};




function deleteUserd(id){
  router.delete('/users/' + id)
  successMessage.value = 'Report Details successfully deleted.';
}



function closeSuccessMessage() {
    successMessage.value = '';
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
    <div class="card-header border-0">
        <h3 class="card-title"><b>REPORT STANDARD FIVE.</b></h3>
       
    </div>
    <div v-if="successMessage" class="alert alert-danger mt-3">
        {{ successMessage }}
        <button @click="closeSuccessMessage" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="card-body table-responsive table-desi" style="overflow-x: auto;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
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
                    <th>V/Skills Score</th>
                    <th>V/Skills Subject</th>
                    <th>Science Techn Score</th>
                    <th>English Grade</th>
                    <th>English Position</th>
                    <th>English Out Of</th>
                    <th>English Remark</th>
                    <th>Kiswahili Grade</th>
                    <th>Kiswahili Position</th>
                    <th>Kiswahili Out Of</th>
                    <th>Kiswahili Remark</th>
                    <th>Civics Moral Grade</th>
                    <th>Civics Moral Position</th>
                    <th>Civics Moral Out Of</th>
                    <th>Civics Moral Remark</th>
                    <th>Social Studies Grade</th>
                    <th>Social Studies Position</th>
                    <th>Social Studies Out Of</th>
                    <th>Social Studies Remark</th>
                    <th>Science Techn Grade</th>
                    <th>Science Techn Position</th>
                    <th>Science Techn Out Of</th>
                    <th>Science Techn Remark</th>
                    <th>Mathematics Grade</th>
                    <th>Mathematics Position</th>
                    <th>Mathematics Out Of</th>
                    <th>Mathematics Remark</th>
                    <th>V/skills Grade</th>
                    <th>V/skills Position</th>
                    <th>V/skills Out Of</th>
                    <th>V/skills Remark</th>
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
                    <th>Phone No</th>
                    <th>Principal Name</th>
                    <th>Phone N</th>
                    <th>Signature</th>
                    <th>Date Of</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <td>{{ user.Name }}</td>
                    <td>
                        <a :href="route('print_pdff5', { id: user.id })" class="btn btn-secondary">
                            Print Pdf Here!
                        </a>
                    </td>
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
                    <td>{{ user.vskillsScore }}</td>
                    <td>{{ user.vskillsSubject }}</td>
                    <td>{{ user.ScienceTechnScore }}</td>
                    <td>{{ calculateSubjectInfo(user.EnglishScore, users, user).grade }}</td>
                    <td>{{ calculateSubjectInfo(user.EnglishScore, users, user).position }}</td>
                    <td>{{ users.length }}</td>
                    <td>{{ calculateSubjectInfo(user.EnglishScore, users, user).remark }}</td>
                    <td>{{ calculateSubjectInfo(user.KiswahiliScore, users, user).grade }}</td>
                    <td>{{ calculateSubjectInfo(user.KiswahiliScore, users, user).position }}</td>
                    <td>{{ users.length }}</td>
                    <td>{{ calculateSubjectInfo(user.KiswahiliScore, users, user).remark }}</td>
                    <td>{{ calculateSubjectInfo(user.CivicsMoralScore, users, user).grade }}</td>
                    <td>{{ calculateSubjectInfo(user.CivicsMoralScore, users, user).position }}</td>
                    <td>{{ users.length }}</td>
                    <td>{{ calculateSubjectInfo(user.CivicsMoralScore, users, user).remark }}</td>
                    <td>{{ calculateSubjectInfo(user.SocialStudiesScore, users, user).grade }}</td>
                    <td>{{ calculateSubjectInfo(user.SocialStudiesScore, users, user).position }}</td>
                    <td>{{ users.length }}</td>
                    <td>{{ calculateSubjectInfo(user.SocialStudiesScore, users, user).remark }}</td>
                    <td>{{ calculateSubjectInfo(user.ScienceTechnScore, users, user).grade }}</td>
                    <td>{{ calculateSubjectInfo(user.ScienceTechnScore, users, user).position }}</td>
                    <td>{{ users.length }}</td>
                    <td>{{ calculateSubjectInfo(user.ScienceTechnScore, users, user).remark }}</td>
                    <td>{{ calculateSubjectInfo(user.MathematicsScore, users, user).grade }}</td>
                    <td>{{ calculateSubjectInfo(user.MathematicsScore, users, user).position }}</td>
                    <td>{{ users.length }}</td>
                    <td>{{ calculateSubjectInfo(user.MathematicsScore, users, user).remark }}</td>
                    <td>{{ calculateSubjectInfo(user.vskillsScore, users, user).grade }}</td>
                    <td>{{ calculateSubjectInfo(user.vskillsScore, users, user).position }}</td>
                    <td>{{ users.length }}</td>
                    <td>{{ calculateSubjectInfo(user.vskillsScore, users, user).remark }}</td>
                    <td>{{ user.ScienceTechnSubject }}</td>
                    <td>{{ user.MathematicsScore }}</td>
                    <td>{{ user.MathematicsSubject }}</td>
                    <td>{{ calculateTotalScore(user) }}</td> 
                    <td>{{ calculateAverageScore(user) }}</td> 
                    <td>{{ calculateGrade(user) }}</td> 
                    <td>{{ calculateRemark(user) }}</td>
                    <td>{{ calculatePosition(users, user) }}</td>
                    <td>{{ users.length }}</td> 
                    <td>{{ user.Sport }}</td>
                    <td>{{ user.Cooperation }}</td>
                    <td>{{ user.Discipline }}</td>
                    <td>{{ user.Cleanliness }}</td>
                    <td>{{ user.Hardworking }}</td>
                    <td>{{ user.PrincipalComment }}</td> 
                    <td>{{ user.PhoneNo }}</td>
                    <td>{{ user.PrincipalName }}</td>
                    <td>{{ user.PhoneN }}</td>
                    <td>{{ user.Signature }}</td>
                    <td>{{ user.DateOf }}</td>
                    <td>
                        <a @click.prevent="deleteUserd(user.id)" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</div>
</div>

   
   
</body>


</AppLayout>

</template>

<style>

.card-title{
  text-align: center;
  padding-left: 400px;
}

</style>






