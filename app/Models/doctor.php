<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    // Define the relationship with Employee model
    public function employee()
    {
        return $this->belongsTo(employee::class, 'employee_id' );
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    protected $fillable = [
        'email',
    ];
}
