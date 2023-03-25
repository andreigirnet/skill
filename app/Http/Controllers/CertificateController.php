<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificates = DB::select('SELECT *, certificates.created_at as valid_from FROM certificates JOIN packages ON certificates.package_id = packages.id WHERE certificates.user_id=' . auth()->user()->id . ' ORDER BY valid_from DESC');
        return view('admin.administrator.certificate')->with('certificates', $certificates);
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
    public function store(Request $request, $packageId)
    {
        $uniqueCertificateId = uniqid();
        $now = new \DateTime();
        $now->add(new \DateInterval('P3Y'));
        $date_three_years_ahead = $now->format('Y-m-d');
        Certificate::create([
            'user_id'         => auth()->user()->id,
            'package_id'      => $packageId,
            'unique_id'  => $uniqueCertificateId,
            'expiration_date' => $date_three_years_ahead
        ]);
        return redirect(route('certificate.index'))->with('success','Here you can downloand you Certificates');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
