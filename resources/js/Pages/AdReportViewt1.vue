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

defineProps(["usery"]);

function pdfone(id){
  router.get('/users/'+id+'/pdfone')
}



const asset = (path) => `${import.meta.env.VITE_APP_BASE_URL}/${path}`;


const calculateTotalScore = (user) => {
  const subjectScores = [
    user.NumerousScore,
    user.ReadingScore,
    user.WrittingScore,
    user.HealthCareScore,
    user.ArtSportScore,
  
  ];

  // Sum up all subject scores
  const totalScore = subjectScores.reduce((total, score) => total + (parseFloat(score) || 0), 0);

  return totalScore;
};


const calculateAverageScore = (user) => {
  const totalScore = calculateTotalScore(user);
  const numberOfSubjects = 5;

  // Calculate the average by dividing the total score by the number of subjects
  const averageScore = numberOfSubjects > 0 ? totalScore / numberOfSubjects : 0;

  return averageScore.toFixed(2); // Return the average rounded to 2 decimal places
};


const calculatePosition = (allUsers, currentUser) => {
  const sortedUsers = allUsers.slice().sort((a, b) => calculateAverageScore(b) - calculateAverageScore(a));
  const position = sortedUsers.findIndex(user => user.id === currentUser.id) + 1;
  return position;
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


const calculatePositionUsery = (allUsers, currentUser) => {
    const sortedUsers = allUsers.slice().sort((a, b) => calculateAverageScoreUsery(b) - calculateAverageScoreUsery(a));
    const position = sortedUsers.findIndex(user => user.id === currentUser.id) + 1;
    return position;
};

const calculateTotalScoreUsery = (user) => {
    const subjectScores = [
        user.NumerousScore,
        user.ReadingScore,
        user.WrittingScore,
        user.HealthCareScore,
        user.ArtSportScore,
    ];

    // Sum up all subject scores
    const totalScore = subjectScores.reduce((total, score) => total + (parseFloat(score) || 0), 0);

    return totalScore;
};

const calculateAverageScoreUsery = (user) => {
    const totalScore = calculateTotalScoreUsery(user);
    const numberOfSubjects = 5;

    // Calculate the average by dividing the total score by the number of subjects
    const averageScore = numberOfSubjects > 0 ? totalScore / numberOfSubjects : 0;

    return averageScore.toFixed(2); // Return the average rounded to 2 decimal places
};

const calculateGradeUsery = (user) => {
    const averageScore = parseFloat(calculateAverageScoreUsery(user));

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

const calculateRemarkUsery = (user) => {
    const averageScore = parseFloat(calculateAverageScoreUsery(user));

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

const successMessage = ref('');

function deleteUsery(id){
  router.delete('/usery/' + id)
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
        <h3 class="card-title"><b>REPORT STANDARD ONE.</b></h3>
        <div class="card-tools">
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-download"></i>
            </a>
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </div>
    <div v-if="successMessage" class="alert alert-danger mt-3">
        {{ successMessage }}
        <button @click="closeSuccessMessage" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                    <th>Sex</th>
                    <th>Class</th>
                    <th>Stream</th>
                    <th>Numerous Score</th>
                    <th>Numerous Subject</th>
                    <th>Reading Score</th>
                    <th>Reading Subject</th>
                    <th>Writting Score</th>
                    <th>Writting Subject</th>
                    <th>Health Score</th>
                    <th>Health Subject</th>
                    <th>ArtSport Score</th>
                    <th>ArtSport Subject</th>
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
                <tr v-for="user in usery" :key="user.id">
                    <td>{{ user.Name }}</td>
                    <td>
                        <a :href="route('print_pdff', { id: user.id })" class="btn btn-secondary">
                            Print Pdf Here!
                        </a>
                    </td>
                    <td>{{ user.Sex }}</td>
                    <td>{{ user.Class }}</td>
                    <td>{{ user.Stream }}</td>
                    <td>{{ user.NumerousScore }}</td>
                    <td>{{ user.NumerousSubject }}</td>
                    <td>{{ user.ReadingScore }}</td>
                    <td>{{ user.ReadingSubject }}</td>
                    <td>{{ user.WrittingScore }}</td>
                    <td>{{ user.WrittingSubject }}</td>
                    <td>{{ user.HealthCareScore }}</td>
                    <td>{{ user.HealthCareSubject }}</td>
                    <td>{{ user.ArtSportScore }}</td>
                    <td>{{ user.ArtSportSubject }}</td>
                    <td>{{ calculateTotalScoreUsery(user) }}</td>
                    <td>{{ calculateAverageScoreUsery(user) }}</td>
                    <td>{{ calculateGradeUsery(user) }}</td>
                    <td>{{ calculateRemarkUsery(user) }}</td>
                    <td>{{ calculatePositionUsery(usery, user) }}</td>
                    <td>{{ usery.length }}</td>
                    <td>{{ user.Sport }}</td>
                    <td>{{ user.Cooperation }}</td>
                    <td>{{ user.Discipline }}</td>
                    <td>{{ user.Cleanliness }}</td>
                    <td>{{ user.Hardworking }}</td>
                    <td>{{ user.PrincipalComment }}</td>
                    <td>{{ user.ClassTeacher }}</td>
                    <td>{{ user.PhoneNo }}</td>
                    <td>{{ user.PrincipalName }}</td>
                    <td>{{ user.PhoneN }}</td>
                    <td>{{ user.Signature }}</td>
                    <td>{{ user.DateOf }}</td>
                    <td>
                        <a @click.prevent="deleteUsery(user.id)" class="btn btn-danger">Delete</a>
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





