<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends model
{
     use HasFactory;


    protected $table = 'roles';

    
    protected $fillable = [
         'name'
    ];
}