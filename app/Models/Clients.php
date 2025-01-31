<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone',
    ];


    public function address()
    {
        return $this->hasOne(Addresses::class, 'customer_id');
    }

    public function getFullNameAttribute()
    {
        return trim("{$this->firstName} {$this->lastName}");
    }
}
