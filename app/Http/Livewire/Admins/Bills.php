<?php

namespace App\Http\Livewire\Admins;
use App\Models\Bill;
use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceReceiptMail;
use Illuminate\Support\Facades\Log;

class Bills extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $patient_id;
    public $amount;
    public $status = 'unpaid'; //default
    public $edit_bill_id;
    public $button_text = "Add New Bill";

    public function add_bill()
    {
        if ($this->edit_bill_id) {

            $this->update($this->edit_bill_id);

        }else{

           $this->validate([
            'patient_id' => 'required|exists:patients,id',
            'amount' => 'required|numeric|min:1',
            'status' => 'required|in:paid,unpaid',
    
            ]);

           $bill = bill::create([
                'patient_id' => $this->patient_id,
                'amount' => $this->amount,
                'status' => $this->status,
            ]);

            $bill->load('patient');

            try {
                Mail::to($bill->patient->email)->send(new InvoiceReceiptMail($bill));
                Log::debug('Invoice email sent to: ' . $bill->patient->email);
            } catch (\Exception $e) {
                Log::error('Invoice email failed: ' . $e->getMessage());
            }

            session()->flash('message', 'Bill Created successfully. and a confirmation email has been sent!');
            $this->reset(['patient_id', 'amount', 'status']);
        }

    }


     public function edit($id)
    {
        $bill = bill::findOrFail($id);
        $this->edit_bill_id = $id;
        $this->amount = $bill->amount;
        $this->patient_id = $bill->patient_id;
        $this->status = $bill->status;

        $this->button_text="Update Bill";
    }

    public function update($id)
    {
        $this->validate([
            'amount' => 'required|numeric',
            'patient_id' => 'required|exists:patients,id',
            ]);

        $bill = Bill::findOrFail($id);
        $bill->amount = $this->amount;
        $bill->patient_id = $this->patient_id;
        $bill->status = $this->status;

        $bill->save();

        $this->edit_bill_id=null;

        session()->flash('message', 'Bill Updated Successfully.');
        $this->reset(['patient_id', 'amount', 'status']);

        $this->button_text = "Add New Bill";

}

     public function delete($id)
    {
        Bill::findOrFail($id)->delete();
        session()->flash('message', 'Bill Deleted Successfully.');

        $this->amount=null;
        $this->patient_id=null;
        $this->status=null;
}
public function render()
{

    $bills = Bill::with('patient')->latest()->paginate(10);
    $patients = Patient::all();


    return view('livewire.admins.bills', [
        'bills' => $bills,
        'patients' => $patients,
    ])->layout('admins.layouts.app');
}

}
