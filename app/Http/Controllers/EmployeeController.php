<?php

namespace App\Http\Controllers;

use App\Mail\RegisterEmployeeMail;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $employees = DB::select('SELECT e.name, e.email, e.created_at FROM users JOIN employees as e on users.id = e.user_id WHERE users.id = ' . auth()->user()->id . ' ORDER BY e.created_at DESC');
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
        dd(Mail::to('andrei.girnet95@gmail.com')->send(new RegisterEmployeeMail()));
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
    public function destroy(Employee $employee): RedirectResponse
    {
        //
    }
}
