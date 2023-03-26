<?php

namespace App\Http\Controllers;

use App\Mail\RegisterEmployeeMail;
use App\Models\CompanyEmployee;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $employees = DB::select('SELECT *, company_employee.id as relationId FROM users JOIN company_employee ON users.id = company_employee.employee WHERE company_employee.company=' . auth()->user()->id);
        return view('admin.administrator.dashboard')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('admin.administrator.registerEmployee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required|unique:users'
        ]);
        $password = 'User' .  rand(10, 9999);
        Mail::to($request->email)->send(new RegisterEmployeeMail($request->email,$password));
        $hashPassword = Hash::make($password, [
            'rounds' => 12,
        ]);
        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=>$hashPassword
        ]);

        CompanyEmployee::create([
            'company'  =>auth()->user()->id,
            'employee' =>$user->id
        ]);

        return redirect(route('register.employee'))->with('success', 'Employee has been added to your dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        DB::statement('DELETE FROM company_employee WHERE id='.$id);
        return (redirect(route('dashboard.employer')))->with('success', 'Employer has been deleted successfully');
    }

    public function controller(){
        return view('admin.administrator.controller');
    }

    public function changeSome($id){
        $user = User::find($id);
        $user->update([
            'is_admin' => 0
        ]);
        return redirect(route('home'));
    }
}
