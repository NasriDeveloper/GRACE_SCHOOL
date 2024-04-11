<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repoti extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Sex',
        'Class',
        'Stream',
      
    ];
}
