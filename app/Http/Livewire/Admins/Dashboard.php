<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admins.dashboard',[
            'employees'=>\App\Models\Employee::count(),
            'appointments'=>\App\Models\Appointment::count(),
            'operationreports'=>\App\Models\Operationreport::count(),
            'patients'=>\App\Models\Patient::count(),
            'hods'=>\App\Models\Hod::count(),
            'departments'=>\App\Models\Department::count(),
            'doctors'=>\App\Models\doctor::count(),
            'subscribers'=>\App\Models\Subscriber::count(),
            'requestedAppointment'=>\App\Models\RequestedAppointment::count(),
            'contacteus'=>\App\Models\contact::count(), 
             'bills'=>\App\Models\bill::count(),
        ])->layout('admins.layouts.app');
    }
}
