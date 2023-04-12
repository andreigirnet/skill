<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::select('SELECT * FROM users');
        return view('admin.admin.users.index')->with('users',$users);
    }

    public function searchUser(Request $request)
    {
        $users = DB::select("SELECT * FROM users WHERE email LIKE '" . $request->email . "%'");
        if ($users === []){
            return redirect()->back()->with('success', 'No record has been found with this id');
        }
        return view('admin.admin.users.search')->with('users',$users);
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $users = DB::select("SELECT id,email from users WHERE email LIKE '" . $query . "%'");
        return response()->json($users);
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
        $user = DB::select("SELECT *, users.id FROM users LEFT JOIN certificates ON users.id=certificates.user_id WHERE users.id=" . $id);
        $packages = DB::select("SELECT p.id as package_id, p.created_at as created_at,p.course_name as course_name, p.status as status, c.id as certificate_id, c.expiration_date as expiration_date FROM packages as p LEFT JOIN certificates as c ON p.id = c.package_id WHERE p.user_id=" . $id);

        $employees =  DB::select("SELECT *, company_employee.id as relationId FROM users JOIN company_employee ON users.id = company_employee.employee WHERE company_employee.company=" . $id);
        return view('admin.admin.users.info')->with('user', $user[0])->with('employees',$employees)->with('packages',$packages);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        return view('admin.admin.users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required|max:50',
            'email' => 'required'
        ]);

        $user = User::find($id);
        $user->update([
            'name' =>$request->name,
            'email'=>$request->email
        ]);

        return redirect(route('users.index'))->with('success', 'User has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(route('users.index'))->with('success', 'User has been removed');
    }
}
