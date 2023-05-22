<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    use HasFactory;

    protected $fillable = ['titre',
    'description',
    'avantage',
    'raison',
    'type',
    'cible',
    'website',
    'business_plan',
    'fond',
    'user_id'];
}
