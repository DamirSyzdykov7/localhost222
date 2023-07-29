<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SignIn;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
     public function ShowMainView() {
        return view('main');
     }

     public function ShowMain() {
        
     }
}
