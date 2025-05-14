<?php

namespace App\Mail;

use App\Models\RequestedAppointment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class AppointmentConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public $appointment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(RequestedAppointment $appointment)
    {
        //
        $this->appointment = $appointment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this->markdown('emails.appointment_confirmation')
        ->subject('Appointment Confirmation')
        ->with([
            'name' => $this->appointment->name,
            'appointment' => $this->appointment,
            'doctor' => $this->appointment->doctor?->employee?->name,
            'department' => $this->appointment->doctor?->department?->name,
            'stime' => $this->appointment->stime

            // Log::debug('Doctor Info:', [
            //     'doctor' => $this->appointment->doctor,
            // ])
            
        ]);
    }
}


