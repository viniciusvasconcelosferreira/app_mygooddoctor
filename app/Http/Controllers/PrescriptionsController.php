<?php

namespace App\Http\Controllers;

use App\Models\Prescriptions;
use App\Http\Requests\StorePrescriptionsRequest;
use App\Http\Requests\UpdatePrescriptionsRequest;

class PrescriptionsController extends Controller
{
    private $prescription;

    public function __construct(Prescriptions $prescription)
    {
        $this->prescription = $prescription;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = $this->prescription::all()->sortByDesc('id');

        return view('dashboards.prescriptions', compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StorePrescriptionsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrescriptionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Prescriptions $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function show(Prescriptions $prescriptions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Prescriptions $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescriptions $prescriptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePrescriptionsRequest $request
     * @param \App\Models\Prescriptions $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrescriptionsRequest $request, Prescriptions $prescriptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Prescriptions $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescriptions $prescriptions)
    {
        //
    }
}
