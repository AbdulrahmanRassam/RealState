<?php


namespace App\Http\RealStateApp\Contracts;


interface SearchContract{


     /**
      *  Get All matched Search Profiles of Property  .
     * @param  $propertyId
     */
    public static function getAll( $propertyId);

}

?>
