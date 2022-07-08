<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewClient;

class ClientController extends Controller
{
    public function viewClient(){
        return view("newClient");
    }

    public function createClient(Request $request){

        $messages = [
            'name.required' => 'O nome do cliente é obrigatório!',
            'cpf.required' =>  'O CPF do cliente é obrigatório!',
            'cpf.min' => 'O CPF precisa ter 11 caracteres!',
            'cpf.max' => 'O CPF precisa ter 11 caracteres!'
        ];

        $request->validate([
            'name' => 'required|max:255',
            'cpf' => 'required|min:11|max:11'
        ], $messages);

        NewClient::create([
            'name' => $request->name,
            'cpf' => $request->cpf,
        ]);

       $requests = NewClient::all();

        return view('newClient', compact('requests'));
    }
}
