<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $table = 'packages';

     // Define the fillable attributes to protect against mass assignment
     protected $fillable = [
        'package_name',
        'description',
        'weight',
        'amount'
    ];

    // You can define relationships here if needed. For example, if a package has many trackings
    public function trackings()
    {
        return $this->hasMany(Tracking::class);
    }
}
