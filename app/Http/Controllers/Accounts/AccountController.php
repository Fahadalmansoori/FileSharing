<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AccountController extends Controller
{
   public function index(){
       return view('Account.index');
   }
}
