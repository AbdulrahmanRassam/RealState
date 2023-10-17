<?php

namespace App\Http\RealStateApp\Facades;
use Illuminate\Support\Facades\Facade;

/**/
 class  SearchFacade extends Facade {

    public static function getFacadeAccessor(){
        return 'SearchService';
    }

}

?>
