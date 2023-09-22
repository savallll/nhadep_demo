<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\menu;
use App\Models\baner;


class SiteController extends Controller
{

    public function index(){
        
        $banner = DB::table('baners')
                ->select('*')
                ->get();

        return view('home-page',[
            // 'menu'=> $menu,
            // 'menu_items'=> $menu_items,
            'banner'=> $banner
        ]);
    }
}
