<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repot extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Sex',
        'Class',
        'Stream',
        'EnglishScore',
        'EnglishSubject',
        'KiswahiliScore',
        'KiswahiliSubject',
        'CivicsMoralScore',
        'CivicsMoralSubject',
        'SocialStudiesScore',
        'SocialStudiesSubject',
        'ScienceTechnScore',
        'ScienceTechnSubject',
        'MathematicsScore',
        'MathematicsSubject',
        'Sport',
        'Cooperation',
        'Discipline',
        'Cleanliness',
        'Hardworking',
        'PrincipalComment',
        'ClassTeacher',
        'PhoneNo',
        'PrincipalName',
        'classteachercomment',
        'PhoneN',
        'photo',
        'photo1',
        'photo2',
        'photo3',
        'dob',
        'Signature',
        'DateOf', 
    ];
}
