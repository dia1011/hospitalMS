<!-- <!DOCTYPE html>
<html>
<head>
    <title>Appointment Confirmation</title>
</head>
<body>
    <h2>Hello {{ $appointment->name }},</h2>
    <p>Your appointment has been confirmed with:</p>

    <ul>
        <li><strong>Doctor:</strong> Dr. {{  $doctor }}</li>
        <li><strong>Department:</strong> {{$department }}</li>
        <li><strong>Date & Time:</strong> {{ \Carbon\Carbon::parse($stime)->format('d M Y, h:i A') }}</li>
    </ul>
    <p>Thank you for using our Hospital Portal.</p>
</body>
</html> -->


@component('mail::message')
# Appointment Confirmation

Dear {{ $appointment->name }},

Your appointment has been confirmed with the following details:

**Appointment Details:**

- **Doctor:** Dr. {{ $doctor }}
- **Department:** {{ $department }}
- **Date & Time:** {{ \Carbon\Carbon::parse($stime)->format('d M Y, h:i A') }}

<!-- @component('mail::button', ['url' => url('/appointments')])
View Appointment
@endcomponent -->

Thanks,  
Hospital Management
@endcomponent


