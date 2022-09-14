<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Prescriptions;
use App\Http\Requests\StorePrescriptionsRequest;
use App\Http\Requests\UpdatePrescriptionsRequest;
use Flasher\Toastr\Prime\ToastrFactory;
use Illuminate\Http\Request;

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
        $prescriptions = $this->prescription::all()->where('patient_id', '!=', null)->sortByDesc('id');

        return view('dashboards.prescriptions', compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::all();
        return view('dashboards.new-prescription', compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StorePrescriptionsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, ToastrFactory $flasher)
    {
        $prescriptions = $this->prescription::all()->where('patient_id', '!=', null)->sortByDesc('id');
        try {
            $prescription = $this->prescription->create($request->all());
            $flasher->addSuccess('Registro criado com sucesso!', ' ');
            return redirect()->route('dashboards.prescriptions', compact('prescriptions'));
        } catch (\Exception $e) {
            $flasher->addError($e->getMessage(), ' ');
            return back();
        }
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Prescriptions $prescription, ToastrFactory $flasher)
    {
        $prescriptions = $this->prescription::all()->where('patient_id', '!=', null)->sortByDesc('id');

        try {
            $prescription->delete();
            $flasher->addSuccess('Registro deletado com sucesso!', ' ');
            return redirect()->route('dashboards.prescriptions', compact('prescriptions'));
        } catch (\Exception $e) {
            $flasher->addError($e->getMessage(), ' ');
            return back();
        }

    }

    public function generate_prescription($prescriptions)
    {
        $prescription = Prescriptions::find($prescriptions);
        return view('dashboards.invoices', compact('prescription'));
    }
}
