<?php
namespace App\Http\Livewire;

use App\Models\Doctor;
use App\Models\RequestedAppointment;
use Livewire\Component;
use App\Models\Department;
use App\Models\Hod;
use App\Mail\AppointmentConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class Appointmentform extends Component
{
    public $name;
    public $email;
    public $phone;
    public $doctor_id; // This should be $doctor_id if you are binding to the doctor_id input
    public $doctor; // Add this property
    public $stime;
    public $address;
    public $message;

    public $doctors;   // This will store doctor records
    public $department;
    public $departments = [];
    public $filteredDoctors = [];

    public function mount() {
        $this->departments = Department::all();
        if ($this->departments->isEmpty()) {
            $this->departments = []; // Ensure it's an empty array if no departments found
        }
        $this->filteredDoctors = [];
    }

    // Update the filtered doctors whenever the department is changed
    public function updatedDepartment($value)
    {
        // Find the HOD of the selected department
        $departmentHod = hod::where('department_id', $value)->first(); 
    
        // Filter doctors based on the selected department and exclude HODs except the HOD of the current department
        $this->filteredDoctors = doctor::where('department_id', $value)
            ->when($departmentHod, function ($query) use ($departmentHod) {
                // Ensure the HOD doctor is included
                return $query->orWhere('id', $departmentHod->doctor_id);
            })
            ->whereNotIn('id', hod::pluck('doctor_id')->toArray()) // Exclude other doctors who are HODs
            ->get();
    }
    


    public function store_requested_appointment()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'stime' => 'required',
            'phone' => 'required|numeric|max:10000000000000',
            'doctor' => 'required|exists:doctors,id',
            'address' => 'required',
            'message' => 'required|max:550',
        ]);

        // Create the appointment record
        $appointment = RequestedAppointment::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'stime' => $this->stime,
            'address' => $this->address,
            'doctor_id' => $this->doctor,
            'message' => $this->message,
        ]);
        
       try {
                Mail::to($appointment->email)->send(new AppointmentConfirmation($appointment));
                Log::debug('Email sent to: ' . $appointment->email);
           } catch (\Exception $e) {
    // Log the error or show warning (just for dev)
            logger()->error("Mail sending failed: " . $e->getMessage());
    }

        
        // Reset the form fields after saving
        $this->resetForm();
        
        session()->flash('message', 'Your Appointment has been booked successfully and confirmation email sent.');
        
    }

    public function resetForm()
    {
        $this->name = "";
        $this->email = "";
        $this->stime = "";
        $this->phone = "";
        $this->doctor = null;
        $this->department = null;
        $this->address = "";
        $this->message = "";

        $this->filteredDoctors = [];
    }

    public function render()
    {
        return view('livewire.appointmentform');
    }
}
