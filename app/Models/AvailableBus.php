<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableBus extends Model
{
    use HasFactory;

    protected $fillable = [
        'source',
        'destination',
        'type',
        'departure',
        'seats',
    ];
}
