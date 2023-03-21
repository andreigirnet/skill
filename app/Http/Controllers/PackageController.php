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
        $packages = DB::select("SELECT * FROM `packages` WHERE user_id=" . auth()->user()->id);
        return view('admin.administrator.package')->with('packages', $packages);
    }

    public function share($id)
    {
        $employeesToShare = DB::select('SELECT * FROM users JOIN company_employee ON users.id = company_employee.employee WHERE company_employee.company=' . auth()->user()->id);
        $packageToShare = DB::select("SELECT * FROM packages WHERE id=".$id);
        return view('admin.administrator.share')->with('packageToShare',$packageToShare)->with('employeesToShare',$employeesToShare);
    }

    public function sharePackage(Request $request, $id)
    {
        DB::statement('INSERT INTO user_package(`sharing_from`, `sharing_to`, `package_id`) VALUES(' . auth()->user()->id . ',' . $request->shareToEmployee . ','.$id.')');
        DB::statement('UPDATE packages SET user_id=' . $request->shareToEmployee . ' WHERE id=' . $id);
        $userShareTo = DB::select('SELECT name FROM users WHERE id=' . $request->shareToEmployee);
        return(redirect(route('package.index')))->with('success', 'The course has been shared to ' . $userShareTo[0]->name);
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
