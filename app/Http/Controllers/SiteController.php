<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\menu;

class SiteController extends Controller
{
    public function index(){
        $menu = DB::table('menus')
                ->select('*')
                ->get();
        $menu_items = DB::table('menu_items')
                ->select('*')
                ->get();

        return view('home-page',[
            'menu'=> $menu,
            'menu_items'=> $menu_items
        ]);
    }
}
