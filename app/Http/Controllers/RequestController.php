<?php

namespace App\Http\Controllers;

use App\Models\RequestItem;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function newRequest(){
        return view("newRequest");
    }

    public function validRequest(Request $request){
        RequestItem::create([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'item' => $request->item,
            'price' => $request->price,
            'table' => $request->table,
            'waiter' => $request->waiter
        ]);

        return view('newRequest');
       
    }
}
