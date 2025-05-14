<?php

namespace App\Http\Livewire\Admins;

use App\Models\hod;
use App\Models\doctor;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\department;

class Hods extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $doctor;

    public $edit_hod_id;
    public $button_text = "Add New HOD";

    public $department;
    public $departments = [];
    public $filteredDoctors = [];

    public $_page;
      public function mount()
    {
        $this->_page = 'index';
        $this->departments = Department::all(); 
    }
    public function updatedDepartment($value)
    {
          $this->filteredDoctors = doctor::where('department_id', $value)
        ->whereNotIn('id', hod::pluck('doctor_id')->toArray())
        ->get();
    }


    public function show_create_form()
    {
        $this->_page = "create";
    }

    public function show_edit_form($id)
    {
        $this->_page = "edit";
        $this->edit_hod_id = $id;
        $item = hod::findOrFail($id);
        $this->doctor = $item->doctor_id;
        $this->department = $item->doctor->department_id;

        //filter doctor according to the department 
        $this->filteredDoctors = Doctor::where('department_id', $this->department)
        ->whereNotIn('id', hod::where('id', '!=', $id)->pluck('doctor_id')->toArray()) // exclude other assigned HODs
        ->orWhere('id', $this->doctor) // include current doctor in edit mode
        ->get();
    }

    public function show_index()
    {
        $this->_page = "index";
    }

    public function add_hod()
    {
        $this->validate([
            'doctor' => 'required|numeric|unique:hods,doctor_id,except,id',
        ]);

        $doctor = doctor::findOrFail($this->doctor);

        hod::create([
            'doctor_id' => $this->doctor,
            'department_id' => $doctor->department_id, //this line add department id into the hod tabel according to the deparment name
        ]);
        $this->doctor = "";
        session()->flash('message', 'HOD Added successfully.');
        $this->_page = "index";
    }

    public function update()
    {
        $this->validate([
            'doctor' => 'required|numeric',
        ]);
        $hod = hod::findOrFail($this->edit_hod_id);
        $hod->doctor_id = $this->doctor;
        $hod->save();
        $this->doctor = "";
        $this->edit_hod_id = "";
        $this->_page = "index";
        session()->flash('message', 'HOD Updated Successfully.');
    }

    public function delete($IdToDelete)
    {
        hod::findOrFail($IdToDelete)->delete();
        session()->flash('message', 'HOD Deleted Successfully.');
        $this->doctor = "";
    }

    public function render()
    {
        if ($this->_page == "index") {
            return view('livewire.admins.hod.hods', [
                'hods' => hod::latest()->paginate(10),
            ])->layout('admins.layouts.app');
        } else if ($this->_page == "create") {
            $ids = hod::pluck('doctor_id')->toArray();
            return view('livewire.admins.hod.create', [
                'departments' => $this->departments,
                'doctors' => $this->filteredDoctors,
            ]);
        } else if ($this->_page == "edit") {
            $ids = hod::pluck('doctor_id')->toArray();
            return view('livewire.admins.hod.edit', [
                'departments' => $this->departments,
                'doctors' => $this->filteredDoctors,
            ]);
        }
    }
}
