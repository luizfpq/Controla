<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellsController extends Controller
{
    //
    protected $fillable = [
      'id_client',
      'id_user',
      'discount',
    ];
}
