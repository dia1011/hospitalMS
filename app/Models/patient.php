<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Patient extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'patients';

    protected $fillable=[
        'name',
        'email',
        'phone',
        'address',
        'gender',
        'age',
        'bloodgroup',
        'photo_path',
    ];

    public function bills()
{
    return $this->hasMany(Bill::class, 'patient_id');
}

}
