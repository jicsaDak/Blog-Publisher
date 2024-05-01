<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;

class SiteController extends FrontendController
{
    public function __construct() {
        
    }
    public function index(){
        return view('frontend.index');
    }
   
}
