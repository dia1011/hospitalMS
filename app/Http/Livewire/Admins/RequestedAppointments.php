<?php

namespace App\Http\Livewire\Admins;

use App\Models\appointment;
use App\Models\doctor;
use Livewire\Component;
use App\Models\requestedAppointment;
use App\Models\patient;
use Livewire\WithPagination;
use App\Mail\AppointmentConfirmation;
use Illuminate\Support\Facades\Mail;

class RequestedAppointments extends Component
{
    use WithPagination;


    public $name;
    public $email;
    public $phone;
    public $doctor;
    public $message;
    public $address;
    public $stime;
    public $_page;
    public $edit_appointment_id;
    public function mount()
    {
        $this->_page = 'index';
    }

    public function edit($id)
    {
        $appointment = requestedAppointment::findOrFail($id);
        $this->edit_appointment_id = $id;

        $this->patient = $appointment->patient_id;
        $this->doctor = $appointment->doctor_id;
        $this->start_time = $appointment->intime;
        $this->end_time = $appointment->outtime;
        $this->_page = "edit";
    }

    public function add_appointment()
    {
        if ($this->edit_appointment_id) {

            $this->update($this->edit_appointment_id);

        } else {
            $this->validate([
                "name" => "required",
                "email" => "required",
                "phone" => "required",
                "doctor" => "required",
                "message" => "required",
                "address" => "required",
                "stime" => "required",
            ]);
            requestedAppointment::create([
                "name" => $this->name,
                "email" => $this->email,
                "phone" => $this->phone,
                "doctor_id" => $this->doctor,
                "message" => $this->message,
                "address" => $this->address,
                "stime" => $this->stime,
                'status' => 'pending'

            ]);
            //unset variables
            $this->name;
            $this->email;
            $this->phone;
            $this->doctor;
            $this->message;
            $this->address;
            $this->stime;
            $this->_page = "index";

            session()->flash('message', 'Appointment Created successfully.');
        }

    }
    public function update($edit_appointment_id)
    {
        $this->validate([
            'patient' => 'required|numeric',
            'doctor' => 'required|numeric',
        ]);

        $appointment = requestedAppointment::findOrFail($edit_appointment_id);
        $appointment->patient_id = $this->patient;
        $appointment->doctor_id = $this->doctor;
        $appointment->intime = $this->start_time;
        $appointment->outtime = $this->end_time;
        $appointment->save();

        //unset variables
        $this->patient = "";
        $this->doctor = "";
        $this->start_time = "";
        $this->end_time = "";
        $this->_page = "index";
        session()->flash('message', 'Appointment Updated successfully.');
    }


    public function show_create_form()
    {
        $this->_page = "create";
    }

    protected $paginationTheme = 'bootstrap';

    public function add_patient($id)
    {
           // Find the requested appointment by ID
    $request = RequestedAppointment::find($id);

    // Check if the appointment exists
    if (!$request) {
        session()->flash('message', 'Appointment not found.');
        return;
    }

    // Create a new patient from the request details
    $patient = Patient::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
    ]);

    // // Mark the appointment as accepted (you can change the status to something more meaningful)
    $request->status = 'accepted';        // You can modify the status field according to your schema
    $request->save();

    // Send the appointment confirmation email to the patient
    Mail::to($request->email)->send(new AppointmentConfirmation($request));
    
    // Flash a success message
    session()->flash('message', 'Patient Added Successfully and a confirmation email has been sent!');

    }

    public function delete($id)
    {
        $patient = requestedAppointment::find($id)->delete();
        session()->flash('message', 'Appointment Deleted Successfully.');
    }
    public function render()
    {
        if ($this->_page == "index") {
            return view('livewire.admins.requested-appointments.index', [
               'appointments' => requestedAppointment::where('status', 'pending')->latest()->paginate(10),
            ])->layout('admins.layouts.app');
        } elseif ($this->_page == "create") {
            return view('livewire.admins.requested-appointments.create', [
                'patients' => patient::all(),
                'doctors' => doctor::all(),
            ])->layout('admins.layouts.app');
        } elseif ($this->_page == "edit") {
            return view('livewire.admins.requested-appointments.edit', [
                'appointment' => requestedAppointment::findOrFail($this->edit_operation_report_id),
                'doctors' => doctor::all(),
                'patients' => patient::all(),
            ])->layout('admins.layouts.app');
        }

    }
}