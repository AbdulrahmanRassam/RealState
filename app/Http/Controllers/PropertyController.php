<?php

namespace App\Http\Controllers;
use App\Http\RealStateApp\Facades\SearchFacade;

class PropertyController extends Controller
{

    public function getAll($propertyId){
        return SearchFacade::getAll($propertyId);
    }
}
