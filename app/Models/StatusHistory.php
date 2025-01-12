<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusHistory extends Model
{
    protected $table = 'status_history';

    protected $fillable = [
        'package_id',
        'status',
        'location',
        'remarks',
    ];

    public function tracking()
    {
        return $this->belongsTo(Tracking::class, 'package_id');
    }
}
