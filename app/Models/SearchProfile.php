<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchProfile extends Model
{
    use HasFactory;

    protected $table='search_profiles';
    protected $fillable =[
        'name','propertyType'
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
        return $this->hasMany(SearchField::class,'search_profile_id','id');
    }
}
