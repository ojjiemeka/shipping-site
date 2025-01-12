<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tracking extends Model 
{
    protected $table = 'tracking_table';

    protected $fillable = [
        'package_id',
        'tracking_number',
        'package_status',
        'shipping_method',
        'shipping_date',
        'estimated_delivery_date',
        'delivered_at',
        'carrier_name',
        'shipping_cost',
        'is_delayed',
        'is_returned',
        'is_insured',
        'address_id',  // New field for address_id
    ];


    public function address()
    {
        return $this->belongsTo(Addresses::class, 'address_id');
    }

    public function statusHistory()
    {
        return $this->hasMany(StatusHistory::class, 'package_id');
    }
}
