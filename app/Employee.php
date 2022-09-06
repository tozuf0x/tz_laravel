<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    
    protected $fillable = ['name', 'email', 'photo', 'age', 'avg_salary', 'experience'];
}
