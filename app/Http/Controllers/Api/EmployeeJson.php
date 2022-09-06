<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use App\Http\Resources\EmployeeResource;

class EmployeeJson extends Controller
{
    public function index(){
        return EmployeeResource::collection(Employee::all());
        
    }
}
