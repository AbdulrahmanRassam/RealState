<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyField extends Model
{
    use HasFactory;
    protected $table='property_fields';
    protected $fillable =[
        'name','value','property_id'
    ];
}
