<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersPeriodic extends Model
{
    use HasFactory;
    protected $fillable = [
        'period',
        'orders_id'
    ];
}
