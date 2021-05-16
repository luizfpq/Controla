<?php

namespace App\Http\Controllers;

use App\Models\Log;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function Index()
    {
       return Log::all();
    }

    public function logAdd(Request $request)
    {
            $log = Log::create([
                'hard_hash'=> $request->input('hard_hash'),
                'ip'=> $request->input('ip'),
                'status'=> $request->input('status'),
                'action'=>$request->input('action')
            ]);
            return $log;
    }
}
