<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'amount',
        'status',
    ];
    

    public function patient()
{
    return $this->belongsTo(Patient::class, 'patient_id');
}
    public function doctor()
{
    return $this->belongsTo(Doctor::class);
}

}
