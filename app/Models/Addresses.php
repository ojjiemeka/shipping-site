<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'customer_id',
        'address',
        'city',
        'state',
        'zipCode',
        'country',
    ];

    public function clients()
    {
        return $this->belongsTo(Clients::class, 'customer_id');
    }

    public function trackings()
    {
        return $this->hasMany(Tracking::class, 'address_id');
    }
}
