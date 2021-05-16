<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function machineAdd(Request $request)
    {
        $machine = Machine::create([
            'hard_hash'=>$request->input('hard_hash'),
            'name'=>$request->input('name'),
            'cpu'=>$request->input('cpu'),
            'mem'=>$request->input('mem'),
            'disk'=>$request->input('disk'),
            'mac'=>$request->input('mac')            
        ]);

        return $machine;
    }
}
