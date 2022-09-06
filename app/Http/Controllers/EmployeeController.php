<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function __construct(Request $request)
    {
        dump($request->route()->getName());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['employees'=> $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required',
            'experience' => 'required',
            'avg_salary' => 'required',
            'photo' => 'required|image',
        ]);
        $folder = date('Y-m-d');
        $photo = $request->file('photo')->store("images/{$folder}");
        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'experience' => $request->experience,
            'avg_salary' => $request->avg_salary,
            'photo' => $photo,
        ]);
        return redirect('/employees/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee_1 = Employee::find($id);
        return view('employees.show', ['employee_1'=> $employee_1]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        Storage::disk('local')->delete($employee->photo);
        $employee->delete();
        return redirect('/employees/');
    }
}