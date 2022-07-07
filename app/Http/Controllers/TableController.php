<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function tables(){
        return view('newTable');
    }

    public function newTable(Request $request){

        Table::create(['number' => $request->number]);
        $tables = Table::all();
        return view('newTable', compact('tables'));
    }
}
