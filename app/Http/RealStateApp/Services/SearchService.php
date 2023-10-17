<?php

namespace App\Http\RealStateApp\Services;
use App\Http\RealStateApp\Contracts\SearchContract;
use App\Models\Property;
use App\Models\SearchProfile;

 class SearchService implements SearchContract
{

     /**
      *  Get All matched Search Profiles of Property  .
     * @param  $propertyId
     */
    public static function getAll( $propertyId){
        $property  = Property::find($propertyId);


         if ($property) {


        $searchedPro= SearchProfile::where('propertyType',$property->propertyType)->whereHas('fields')->get();
        $matchedSearchProfiles=[];
        foreach ($searchedPro as $profile) {
            foreach ($property->fields as $field) {
                $profile->fields->where('name', $field->name)
                    ->where(function ($q) use ($field) {
                        $q->where('min_value','<=' , $field->value)
                          ->orWhere(function ($q) {
                              $q->whereNull('min_value');
                          });
                    })
                    ->where(function ($q) use ($field) {
                        $q->where('max_value','>=' , $field->value)
                          ->orWhere(function ($q) {
                              $q->whereNull('max_value');
                          });
                    });


            }
            if ($profile) {
                array_push($matchedSearchProfiles, $profile);
            }

        }


            return  response()->json([
                'data'=>$matchedSearchProfiles,
                'msg'=>' Data Retrieved Succesfully',

            ], 200);

        }else{

            return  response()->json([
                'msg'=>' There is no Property That have this name',

            ], 401);
        }
        }
    }



