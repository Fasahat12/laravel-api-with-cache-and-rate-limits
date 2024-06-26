<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidCase extends Model
{
    use HasFactory;

    protected $fillable = ['report_date', 'cases'];

    protected $casts = [
        'report_date' => 'datetime',
    ];
}
