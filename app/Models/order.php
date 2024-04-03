<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'tracking_number',
        'zipcode',
        'completed',
        'failed'
    ];

    protected $dates = ['deleted_at'];
}
