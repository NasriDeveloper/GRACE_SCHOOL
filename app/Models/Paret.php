<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paret extends Model
{
    use HasFactory;
    protected $fillable = [
        'fatherName',
        'fatherFname', 
        'Class',
        'email',
        'fatherAddress',
        'fatherPhone',
        'fatherOccupation',
        'fatherEducation',
        'fatherNID',
        'fatherReligion',
        'fatherPhoto', 
        'MotherName',
        'motherCname', 
        'motherAddress',
        'motherPhone',
        'motherOccupation',
        'motherEducation',
        'motherNID',
        'motherReligion',
        'motherPhoto',
     ];
}
