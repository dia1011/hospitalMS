<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Invoice Receipt</title>
</head>
<body>
    <h2>Hello {{ $bill->patient_name }},</h2>
    <p>Thank you for your payment. Here are the details of your invoice:</p>
    
    <p><strong>Invoice ID:</strong> {{ $bill->id }}</p>
    <p><strong>Patient Name:</strong> {{ $bill->patient_name }}</p>
    <p><strong>Doctor:</strong> {{ $bill->doctor->employee->name ?? 'N/A' }}</p>
    <p><strong>Department:</strong> {{ $bill->doctor->department->name ?? 'N/A' }}</p>
    <p><strong>Amount:</strong> ₹{{ number_format($bill->amount, 2) }}</p>
    <p><strong>Status:</strong> {{ ucfirst($bill->status) }}</p>
    <p><strong>Date:</strong> {{ $bill->created_at->format('d-m-Y H:i A') }}</p>

    <br>
    <p>Thank you for choosing our hospital.</p>
</body>
</html> -->


@component('mail::message')
# Invoice Receipt

Dear {{ $bill->patient->name }},

Thank you for your payment.

**Invoice Details:**

- Invoice ID: {{ $bill->id }}
- Amount Paid: ₹{{ $bill->amount }}
- Payment Status: {{ ucfirst($bill->status) }}
- Date: {{ $bill->created_at->format('d M Y') }}

Thanks,  
Hospital Management
@endcomponent
