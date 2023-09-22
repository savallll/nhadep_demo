<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\menu;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function __construct(){
        $menu = DB::table('menus')
                ->select('*')
                ->get();
        $menu_items = DB::table('menu_items')
                ->select('*')
                ->get();
        View::share([
            'menu'=> $menu,
            'menu_items'=> $menu_items,
        ]); // <= Truyền dữ liệu
    }
}
