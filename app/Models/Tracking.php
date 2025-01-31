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

    protected $dates = [
        'ship_date',
        'delivery_date',
        'created_at',
        'updated_at'
    ];

    // Or for Laravel 8+
    protected $casts = [
        'ship_date' => 'datetime',
        'delivery_date' => 'datetime',
        'is_delayed' => 'boolean',
        'is_returned' => 'boolean',
        'is_insured' => 'boolean',
    ];



    public function address()
    {
        return $this->belongsTo(Addresses::class);
    }

    public function package()
    {
        return $this->belongsTo(Packages::class);
    }

    public function statusHistory()
    {
        return $this->hasMany(StatusHistory::class, 'package_id');
    }
}
