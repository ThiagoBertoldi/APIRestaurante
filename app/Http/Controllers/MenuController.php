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

        $messages = [
            'dish.required' => 'O campo prato é obrigatório!',
            'drink.required' => 'O campo bebida é obrigatório!',
            'dessert.required' => 'O campo sobremesa é obrigatório!'
        ];

        $request->validate([
            'dish' => 'required',
            'drink' => 'required',
            'dessert' => 'required'
        ], $messages);

        Menu::create([
            'dish' => $request->dish,
            'drink' => $request->drink,
            'dessert' => $request->dessert
        ]);

        return view('newMenu');
    }
}
