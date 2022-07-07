<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        return view('menu');
    }

    public function newMenu(){
        return view('newMenu');
    }

    public function createMenu(Request $request){

        Menu::create([
            'dish' => $request->dish,
            'drink' => $request->drink,
            'dessert' => $request->dessert
        ]);

        return view('newMenu');
    }
}
