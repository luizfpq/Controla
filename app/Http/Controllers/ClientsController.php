<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientsController extends Controller
{
    //
    function list()
    {
        $data = Client::all();
        return view('client.list', ['clients'=>$data]);
    }
}
