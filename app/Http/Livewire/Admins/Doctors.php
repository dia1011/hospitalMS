<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Doctor;

class Doctors extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $doctors = Doctor::with(['employee', 'department'])->paginate(10);
        return view('livewire.admins.doctors', compact('doctors'))->layout('admins.layouts.app');
    }
}
