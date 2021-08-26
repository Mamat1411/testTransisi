<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        $companies = Company::paginate(5);
        return view('companies/companies', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies/createCompanies');
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
            'email' => 'required',
            'website' => 'required',
            'logo' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        $logo = $request->file('logo');
        $newLogoName = time().'-'.$request->nama.'.png';
        // $request->logo->move(public_path('storage\company'), $newLogoName);
        $logo->storeAs('public/company', $newLogoName);

        $companies = DB::select("select * from companies where id = '$request->id' AND nama = '$request->nama' AND email = '$request->email' AND website = '$request->website' AND logo = '$newLogoName'");
        if (count($companies) == !null) {
            return redirect('/companies') -> with('status', 'Data Sudah Pernah Ditambahkan');
        } else {
            Company::create([
                'id' => $request->input('id'),
                'nama' => $request->input('nama'),
                'email' => $request->input('email'),
                'website' => $request->input('website'),
                'logo' => $newLogoName
            ]);
            return redirect('/companies') -> with('status', 'Data Perusahaan Berhasil Ditambahkan');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies/editCompanies');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
