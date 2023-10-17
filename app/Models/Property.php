<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table='properties';
    protected $fillable =[
        'name','address','propertyType'
    ];

     /**
     * Get the Propertu  type .
     */
    public function type()
    {
        return $this->belongsTo(PropertyType::class,'propertyType','id');
    }
     /**
     * Get the Property  Fields .
     */
    public function fields()
    {
        return $this->hasMany(PropertyField::class,'property_id','id');
    }

}
