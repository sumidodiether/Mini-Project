<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Carbon;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'birthday' => 'required|date',
            'monthly_salary' => 'required|numeric',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::findOrFail($id);

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted!');
    }

    private function Summary()
    {
        $employees = Employee::all();

        return [
            'maleCount' => $employees->where('gender', 'Male')->count(),
            'femaleCount' => $employees->where('gender', 'Female')->count(),
            'averageAge' => $employees->avg(function ($emp) {
                return Carbon::parse($emp->birthday)->age;
            }),
            'totalSalary' => $employees->sum('monthly_salary'),
        ];
    }

    public function dashboard()
    {
        $employees = Employee::all();

        return view('dashboard', array_merge(
            ['employees' => $employees],
            $this->Summary()
        ));
    }
}
