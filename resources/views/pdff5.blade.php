<?php
// Function to calculate total score
function calculateTotalScore($user) {
    $subjectScores = [
        optional($user)->EnglishScore,
        optional($user)->KiswahiliScore,
        optional($user)->CivicsMoralScore,
        optional($user)->SocialStudiesScore,
        optional($user)->ScienceTechnScore,
        optional($user)->MathematicsScore,
        optional($user)->vskillsScore,
    ];

    // Sum up all subject scores
    $totalScore = array_sum(array_map('floatval', $subjectScores));

    return $totalScore;
}

function calculateAverageScore($user) {
    $totalScore = calculateTotalScore($user);
    $numberOfSubjects = 7;

    // Calculate the average by dividing the total score by the number of subjects
    $averageScore = $numberOfSubjects > 0 ? $totalScore / $numberOfSubjects : 0;

    return number_format($averageScore, 2);
}

function calculateGrade($user) {
    $averageScore = calculateAverageScore($user);

    if ($averageScore >= 80) {
        return 'A';
    } else if ($averageScore >= 65) {
        return 'B';
    } else if ($averageScore >= 55) {
        return 'C';
    } else if ($averageScore >= 45) {
        return 'D';
    } else if ($averageScore >= 34) {
        return 'E';
    } else {
        return 'F';
    }
}

function calculateRemark($user) {
    $averageScore = calculateAverageScore($user);

    if ($averageScore >= 80) {
        return 'Excellent';
    } else if ($averageScore >= 65) {
        return 'Very Good';
    } else if ($averageScore >= 55) {
        return 'Good';
    } else if ($averageScore >= 45) {
        return 'Poor';
    } else if ($averageScore >= 34) {
        return 'Very Poor';
    } else {
        return 'Low Performance';
    }
}

// Function to calculate position
function calculatePosition($users, $currentUser) {
    // Sort the users collection based on average score in descending order
    $sortedUsers = $users->sortByDesc(function ($user) {
        return calculateAverageScore($user);
    });

    // Initialize position counter
    $position = 1;

    // Loop through the sorted collection to find the position
    foreach ($sortedUsers as $user) {
        if ($user->id === $currentUser->id) {
            break;
        }
        $position++;
    }

    return $position;
}

// Function to calculate rank for a given subject score
function calculateSubjectPosition($users, $currentUser, $subjectScoreKey) {
    $sortedUsers = $users->sortByDesc(function ($user) use ($subjectScoreKey) {
        return $user->$subjectScoreKey;
    });

    $position = 1;

    foreach ($sortedUsers as $user) {
        if ($user->id === $currentUser->id) {
            break;
        }
        $position++;
    }

    return $position;
}

function calculateGradey($score) {
    if ($score >= 80) {
        return 'A';
    } else if ($score >= 65) {
        return 'B';
    } else if ($score >= 55) {
        return 'C';
    } else if ($score >= 45) {
        return 'D';
    } else if ($score >= 34) {
        return 'E';
    } else {
        return 'F';
    }
}

// Function to calculate remark for a given score
function calculateRemarki($score) {
    if ($score >= 80) {
        return 'Excellent';
    } else if ($score >= 65) {
        return 'Very Good';
    } else if ($score >= 55) {
        return 'Good';
    } else if ($score >= 45) {
        return 'Poor';
    } else if ($score >= 34) {
        return 'Very Poor';
    } else {
        return 'Low Performance';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    </style>
</head>
<body>

<table>
    <tr>
        <th><img src="homes/img/logo/logo.png" alt="" width="150px" height="150px"></th>
        <th> GRACE SCHOOLS KIGAMBONI.<br> Registration No. EM.17031 Kigamboni-Mjimwema Road.</th>
        <!-- Display the image in the PDF -->
        <th><img src="{{ public_path('photos/' . $insert->photo) }}" alt="Report Photo" width="150px" height="150px"></th>
    </tr>
</table><br>

<table>
    <tr>
        <th class="grac">ANNUAL EXAMINATION REPORT {{$insert->DateOf}}</th>
    </tr>
  </table><br>
<table>
    <tr>
        <th>Name</th>
        <td>{{$insert->Name}}</td>
        <th>Sex</th>
        <td>{{$insert->Sex}}</td>
    </tr>
    <tr>
        <th>Class</th>
        <td>{{$insert->Class}}</td>
        <th>Stream</th>
        <td>{{$insert->Stream}}</td>
    </tr>
</table><br>

<table>
    <tr>
        <th>S/N</th>
        <th>Subject</th>
        <th>Score</th>
        <th>Grade</th>
        <th>Rank</th>
        <th>Out of</th>
        <th>Remarks</th>
    </tr>
    <?php
    $subjectScores = [
        'English' => $insert->EnglishScore,
        'Kiswahili' => $insert->KiswahiliScore,
        'CivicsMoral' => $insert->CivicsMoralScore,
        'ScienceTechn' => $insert->ScienceTechnScore,
        'Kiswahili' => $insert->KiswahiliScore,
        'Mathematics' => $insert->MathematicsScore,
        'vskills' => $insert->vskillsScore,
    ];

    $index = 1;

    foreach ($subjectScores as $subject => $score) {
        $subjectGrade = calculateGradey($score);
        $subjectRemark = calculateRemarki($score);
        $subjectPosition = calculateSubjectPosition($users, $insert, $subject . 'Score');

        echo '<tr>';
        echo '<td><b>' . $index . '.</b></td>';
        echo '<td>' . $subject . '</td>';
        echo '<td>' . $score . '</td>';
        echo '<td>' . $subjectGrade . '</td>';
        echo '<td>' . $subjectPosition . '</td>';
        echo '<td>' . count($users) . '</td>';
        echo '<td>' . $subjectRemark . '</td>';
        echo '</tr>';

        $index++;
    }
    ?>
</table>

<table>
    <tr>
        <th>Total Marks: {{ calculateTotalScore($insert) }}  Average: {{ calculateAverageScore($insert) }}  Grade: {{ calculateGrade($insert) }}
            Remark: {{ calculateRemark($insert) }}  Position: {{ calculatePosition($users, $insert) }} Out of: {{ count($users) }} </th>
    </tr>
</table><br>

<table>
    <th class="grace">CHARACTER ASSESSMENT.</th>
</table>

<table>
    <tr>
        <th>DOMAIN</th>
        <td>sports</td>
        <td>cooperation</td>
        <td>Discipline</td>
        <td>Cleanliness</td>
        <td>Hardworking</td>
    </tr>
    <tr>
        <th>REMARKS</th>
        <td>{{$insert->Sport}}</td>
        <td>{{$insert->Cooperation}}</td>
        <td>{{$insert->Discipline}}</td>
        <td>{{$insert->Cleanliness}}</td>
        <td>{{$insert->Hardworking}}</td>
    </tr>
</table>
<table>
    <tr>
        <th class="grace">PRINCIPAL'S COMMENT</th>
    </tr>
    <tr>
        <td>{{$insert->PrincipalComment}}</td>
    </tr>
    <p><b>Principal's name: </b>{{$insert->PrincipalName}}. <b>Phone No:</b> {{$insert->PhoneN}}.</p>
  
</table>
<table>
    <tr>
        <th class="grace">CLASS TEACHER'S COMMENT</th>
    </tr>
    <tr>
        <td>{{$insert->classteachercomment}}</td>
    </tr>
    <p><b>Class Teacher's name:</b> {{$insert->ClassTeacher}}. <b>Phone No: </b> {{$insert->PhoneNo}}.</p>
</table>
<table>
    <tr>
        <th>CLASS TEACHER'S SIGNATURE</th>
        <th>PRINCIPAL'S SIGNATURE</th>
    </tr>
    <tr>
        <td>
            <img src="{{ public_path('photos/' . $insert->photo2) }}" alt="Report Photo" width="150px" height="150px">
        </td>
        <td>
            <img src="{{ public_path('photos/' . $insert->photo1) }}" alt="Report Photo" width="150px" height="150px">
        </td>
    </tr>
</table>
<table>
    <tr>
        <th>
            Date of Reporting:  {{$insert->dob}}. 
        </th>
    </tr>
</table>


<table>
    <tr>
        <th>
            STAMP
        </th>
    </tr>
    <tr>
        <td>
            <img src="{{ public_path('photos/' . $insert->photo3) }}" alt="Report Photo" width="150px" height="150px">
        </td>
    </tr>
</table>

</body>
</html>
