<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;
use App\Exports\staffExport;
use App\Imports\staffImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class staffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = staff::all();
        return view('dashboard.StaffInformation', compact('staff'));
    }

    public function staffExport(){
        return Excel::download(new staffExport,'staff.xlsx');
    }

    public function staffimportexcel(Request $request){
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('dataStaff', $namaFile);

        Excel::import(new staffImport, public_path('/dataStaff/'.$namaFile));
        return redirect('/staffinformation');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
