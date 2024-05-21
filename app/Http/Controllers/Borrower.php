<?php

namespace App\Http\Controllers;

use App\Models\borrowers;
use Illuminate\Http\Request;

class Borrower extends Controller
{
  public function index(){

    $borrowers=borrowers::get();
    return response()->json(["status"=>"done","data"=>$borrowers]);
 

  }
}
