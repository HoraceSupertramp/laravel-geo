<?php

namespace App\Http\Controllers\Api;

use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //
    function index(){
        $countries=Country::all();
        return response()-> json([
            'success'=> true,
            'results'=> $countries,
        ]);
    }
}
