<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
//       $obj= new \stdClass();
//       $obj->id=5;
//       $obj->name='vanthuan';
//       $obj->gender='made';
       return view('welcome')->with('name','vanthuan 6');

    }
}
