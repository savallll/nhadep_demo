<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\menu;
use App\Models\menu_item;



class CategoryController extends Controller
{
    //
    public function index($category){
        // $categories = DB::table('menus')
        //         ->join('menu_items','menus.id','=','menu_items.menu_id')
        //         ->where('name','=',$category)
        //         ->select('menus.name')
        //         ->get();

        return view('category.index',[
            // 'categories'=> $categories,
            // 'categories2'=> $categories2
        ]);
    }
}
