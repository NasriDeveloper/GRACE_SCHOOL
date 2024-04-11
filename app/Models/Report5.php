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
        'v/skillsSubject',
        'v/skillsScore',
        'Sport',
        'Cooperation',
        'Discipline',
        'Cleanliness',
        'Hardworking',
        'PrincipalComment',
        'ClassTeacher',
        'PhoneNo',
        'PrincipalName',
        'PhoneN',
        'photo',
        'photo1',
        'photo2',
        'Signature',
        'DateOf', 
    ];
}
