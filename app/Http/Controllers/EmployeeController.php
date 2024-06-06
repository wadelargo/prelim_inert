<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::orderBy("lname")->orderBy("position")->get();
        return inertia('Employee/Employee', [
            'employees' => $employees
        ]);
    }
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return inertia('Employee/EmployeeDetails', [
            'employee' => $employee
        ]);
    }
    
}
