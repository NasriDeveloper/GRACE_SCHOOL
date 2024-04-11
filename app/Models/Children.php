<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;
    protected $fillable = [
         'firstName',
         'middleName',
         'lastName:',
         'parentfirstName',
         'parentlastName',
         'class',
         ' yearOfEntry',
         'gender',
         'dob',
         'photo',
         'nationality: ',
         'placeOfBirth:',
        
    ];
}
