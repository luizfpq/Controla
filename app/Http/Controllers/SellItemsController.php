<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellItemsController extends Controller
{
    //
    protected $fillable = [
        'id_product',
        'amount',
        'value',
        'discount',
    ];
}
