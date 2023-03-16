<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = DB::select("SELECT * FROM `packages`");
        $employees = DB::select("SELECT * FROM company_employee JOIN users ON users.id = company_employee.employee");
        return view('admin.administrator.package')->with('packages', $packages)->with('employees',$employees);
    }

    public function share($id)
    {
        $packageToShare = DB::select("SELECT * FROM packages WHERE id=".$id);
        return view('admin.administrator.share')->with('packageToShare',$packageToShare);
    }

    public function sharePackage($id, $sharingTo)
    {

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
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
    }
}
