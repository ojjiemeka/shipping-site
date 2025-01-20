<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tracking extends Model 
{
    protected $table = 'tracking';

    protected $fillable = [
        'package_id',
        'address_id',  // New field for address_id
        'tracking_number',
        'package_status',
        'shipping_method',
        'ship_date',
        'delivery_date',
        // 'delivered_at',
        'notes',
        'current_location',
        'carrier_name',
        'shipping_cost',
        'is_delayed',
        'is_returned',
        'is_insured',
    ];

    public $timestamps = false;

    public function address()
    {
        return $this->belongsTo(Addresses::class, 'address_id');
    }

    public function packages()
    {
        return $this->belongsTo(Packages::class, 'package_id', 'id');
    }

    public function statusHistory()
    {
        return $this->hasMany(StatusHistory::class, 'package_id');
    }
}
