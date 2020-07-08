<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
   public function index()
   {
       return view('main_page.index');
   }
   public function test()
   {
       return view('admin_panel.pages.main_panel.card_analytics');
   }
}
