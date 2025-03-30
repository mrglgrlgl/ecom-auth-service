<?php

namespace App\Http\Controllers;
use Illuminate\Facades\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __invoke(){
         return Auth::user();
  
    }
}
