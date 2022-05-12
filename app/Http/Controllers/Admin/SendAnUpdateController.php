<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendAnUpdateController extends Controller
{
   public function index(){
   	return view('Admin.send-an-update');
   }
   public function formsubmit(){
   	return view('Admin.send-an-update');
   }
}
