<?php

namespace App\Http\Controllers;

use App\Models\genres;
use Illuminate\Http\Request;

class genresController extends Controller
{
    //
    public function index(){

        $Genres = genres:: find();
        return response()->json(["status"=>"success","data"=>$Genres]);
    }
}
