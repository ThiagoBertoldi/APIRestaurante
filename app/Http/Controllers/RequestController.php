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
        
        $messages = [
            'name.required' => 'O nome é obrigatório!',
            'cpf.required' => 'O CPF é obrigatório',
            'item.required' => 'O item do pedido é obrigatório',
            'price.required' => 'O preço é obrigatório',
            'table.required' => 'A mesa é obrigatório',
            'cpf.min' => 'O CPF precisa ter 11 dígitos!',
            'cpf.max' => 'O CPF precisa ter 11 dígitos!'
        ];

       $request->validate([
            'name' => 'required|max:255',
            'cpf' => 'required|max:11|min:11',
            'item' => 'required|max:255',
            'price' => 'required|max:255',
            'table' => 'required|max:255',
            'waiter' => 'required|max:255'
        ], $messages);

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
