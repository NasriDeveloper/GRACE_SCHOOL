<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'parentfirstName',
        'parentlastName',
        'class',
        'yearOfEntry',
        'gender',
        'dob',
        'nationality',
        'placeOfBirth',
        'photo',   
   ];
}
