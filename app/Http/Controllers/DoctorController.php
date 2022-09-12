<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Patient;
use App\Models\Specialty;
use App\Models\User;
use Flasher\Toastr\Laravel\Facade\Toastr;
use Flasher\Toastr\Prime\ToastrFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    private $doctor;

    public function __construct(Doctor $doctor)
    {
        $this->doctor = $doctor;
    }

    public function profile_overview()
    {
        $patients = auth()->user()->profile->patient;

        return view('profile.overview', compact('patients'));
    }

    public function profile_overview_edit($doctor)
    {

        $crm = decrypt($doctor);

        $doctor = Doctor::find($crm);

        $specialties = Specialty::all();

        return view('profile.edit', compact('doctor', 'specialties'));
    }

    public function profile_overview_update(Request $request, $crm, ToastrFactory $flasher)
    {
//        decrypt($crm)
        $data_user = $request->except([
            "gender",
            "birth_date",
            "address",
            "cpf",
            "rg",
            "phone",
            "mobile_phone",
            "crm",
            "education",
            "department",
            "description",
            "social_facebook",
            "social_twitter",
            "social_instagram",
            "specialty",
            "_token",
            "_method",
        ]);
        $data_doctor = $request->except([
            "specialty",
            "name",
            "email"
        ]);
        $data_specialty = $request->except([
            "name",
            "email",
            "gender",
            "birth_date",
            "address",
            "cpf",
            "rg",
            "phone",
            "mobile_phone",
            "crm",
            "education",
            "department",
            "description",
            "social_facebook",
            "social_twitter",
            "social_instagram",
            "_token",
            "_method",
        ]);

        try {
            $doctor = Doctor::find(decrypt($crm));
            $doctor->update($data_doctor);
            $doctor->user()->update($data_user);
            $doctor->specialty()->update($data_specialty['specialty']);
            $flasher->addSuccess('Registro atualizado com sucesso!', ' ');
            return redirect()->route('profile.overview');
        } catch (\Exception $e) {
            $flasher->addError($e->getMessage(), ' ');
            return back();
        }
    }
}
