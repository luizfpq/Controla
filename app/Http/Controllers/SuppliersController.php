<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    //
    public function list()
    {
        $data = Supplier::all();
        return view('supplier.list', ['suppliers' => $data]);
    }

    public function create(Request $req)
    {
        $dados = $req->all();
        Supplier::create($dados);
        return redirect()->route('supplier.list');
    }

    public function edit($id)
    {
        $register = Supplier::find($id);
        return view('supplier.edit', ['supplier' => $register]);
    }

    public function update(Request $req, $id)
    {
        $dados = $req->all();
        Supplier::find($id)->update($dados);
        return redirect()->route('supplier.list');
    }

    public function delete($id)
    {
        Supplier::find($id)->delete($id);
        return redirect()->route('supplier.list');
    }
}
