<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repo extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Sex',
        'Class',
        'Stream',
        'NumerousScore',
        'NumerousSubject',
        'ReadingScore',
        'ReadingSubject',
        'WrittingScore',
        'WrittingSubject',
        'HealthCareScore',
        'HealthCareSubject',
        'ArtSportScore',
        'ArtSportSubject',
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
