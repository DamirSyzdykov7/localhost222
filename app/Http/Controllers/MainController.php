<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;
use App\Models\SignIn;
use Illuminate\Support\Facades\Auth;
use App\Models\organization;


class MainController extends Controller
{
     public function ShowMainView() {
      $organization = organization::all();

      return view('main', ['organization' => $organization]);
     }

     public function OrganizationView() {
      return view('organization');
     }

     public function Organization(Request $request) {  
      $dishes = Dish::where('restoraunt_id', $request->id)->get();

        return view('organization', ['dishes' => $dishes]);
     }
}