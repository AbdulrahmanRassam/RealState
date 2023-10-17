<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchField extends Model
{
    use HasFactory;
    protected $table='search_fields';
    protected $fillable =[
        'name','min_value','max_value','search_profile_id'
    ];
}
