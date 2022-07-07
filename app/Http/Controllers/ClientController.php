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

        NewClient::create([
            'name' => $request->name,
            'cpf' => $request->cpf,
        ]);

       $requests = NewClient::all();

        return view('newClient', compact('requests'));
    }
}
