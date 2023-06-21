<?php

namespace App\Http\Controllers;

use App\Http\Requests\crimeReportFormRequest;
use App\Http\Requests\CrimeReportRequest;
use App\Models\crime_report;
use Illuminate\Http\Request;

class crimeReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index');
    }

    public function about()
    {
        return view('user.about_us');
    }

    public function reportedCrimes()
    {
        return view('admin.reported_crimes', [
            "reportedCrimes" => crime_report::orderBy('id', 'desc')->get(),
        ]);
    }

    public function cash_solution()
    {
        return view('user.services.scash_solution');
    }

    public function crisis_management()
    {
        return view('user.services.crisis_management');
    }

    public function executive_protection()
    {
        return view('user.services.executive_protection');
    }

    public function police_services()
    {
        return view('user.services.police_services');
    }

    public function private_investigation()
    {
        return view('user.services.private_investigation');
    }

    public function blog()
    {
        return view('user.blog');
    }

    public function shop()
    {
        return view('user.shop');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.report_crime');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CrimeReportRequest $request)
    {
        crime_report::create($request->validated());
        return redirect()->route('crime.create')->with(["message" => "Crime Reported Successfully!"]);
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
        dd($id);
        crime_report::where('id', $id)->update('status', 'Attended to');
        return redirect()->route('reported_crimes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        crime_report::where('id', $id)->forceDelete();
        return redirect()->route('reported_crimes');
    }
}
