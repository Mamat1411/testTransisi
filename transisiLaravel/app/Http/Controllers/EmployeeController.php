<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        $employees = Employee::paginate(5);
        $company = Company::with('company')->get();
        return view('employees.employees', compact('employees'), compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::with('company')->get();
        return view('employees.createEmployees', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'id' => 'required',
            'nama' => 'required',
            'idCompany' => 'required',
            'email' => 'required'
        ]);

        $employees = DB::select("select * from employees where id = '$request->id' AND email = '$request->email'");
        if (count($employees) == !null) {
            return redirect('/employees') -> with('status', 'Data Sudah Pernah Ditambahkan');
        } else {
            Employee::create($request->all());
            return redirect('/employees') -> with('status', 'Data Berhasil Ditambahkan');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $company = Company::with('company')->get();
        return view('employees/editEmployees', compact('employee'), compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request -> validate([
            'nama' => 'required',
            'idCompany' => 'required',
            'email' => 'required'
        ]);

        $employees = DB::select("select * from employees where id = '$request->id' AND email = '$request->email'");
        if (count($employees) == !null) {
            return redirect('/employees') -> with('status', 'Data Sudah Pernah Ditambahkan');
        } else {
            Employee::where('id', $employee -> id)
                    ->update([
                        'nama' => $request -> nama,
                        'idCompany' => $request -> idCompany,
                        'email' => $request -> email
                    ]);
            return redirect('/employees') -> with('status', 'Data Berhasil Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee -> id);
        return redirect('/companies') -> with('status', 'Data Berhasil Dihapus');
    }
}
