<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestItem extends Model
{
    protected $fillable = [
        'item',
        'price',
        'waiter',
        'name',
        'table',
        'cpf'
    ];
}
