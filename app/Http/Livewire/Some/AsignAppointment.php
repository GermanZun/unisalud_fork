<?php

namespace App\Http\Livewire\Some;

use App\Models\MedicalProgrammer\Profession;
use App\Models\MedicalProgrammer\Specialty;
use App\Models\Some\Appointment;
use App\Models\User;
use Livewire\Component;

class AsignAppointment extends Component
{
    public $run;
    public $user;
    public $appointments;
    public $selectedAppointments = [];
    public $profession_id;
    public $type;
    public $specialty_id;
    public $professions;
    public $specialties;
    public $practitioners;
    public $practitioner_id;

//    public function mount()
//    {
//
//    }

    public function searchUser()
    {
        $this->user = User::getUserByRun($this->run);
    }

    public function searchAppointments()
    {
        $this->appointments = Appointment::all();
    }

    public function asignAppointment()
    {
        $selectedAppointments = Appointment::whereIn('id', [$this->selectedAppointments]);
        $selectedAppointments->update(['user_id' => $this->user->id, ]);

        dump($selectedAppointments);
    }

    public function render()
    {
        $this->specialties = null;
        $this->professions = null;
        if ($this->type != null) {
            if ($this->type == "Médico") {
                $this->specialties = Specialty::orderBy('specialty_name','ASC')->get();
            }else{
                $this->professions = Profession::orderBy('profession_name','ASC')->get();
            }
        }

        $this->practitioners = null;
        if ($this->specialty_id != null) {
            $this->practitioners = User::whereHas('userSpecialties', function ($query)  {
                return $query->where('specialty_id',$this->specialty_id);
            })->get();
        }

        if ($this->profession_id != null) {
            $this->practitioners = User::whereHas('userProfessions', function ($query)  {
                return $query->where('profession_id',$this->profession_id);
            })->get();
        }

        return view('livewire.some.asign-appointment');
    }
}
