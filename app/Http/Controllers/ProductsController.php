<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function list()
    {
        $data = Product::all();
        return view('product.list', ['products' => $data]);
    }

    public function create(Request $req)
    {
        $dados = $req->all();
        Product::create($dados);
        return redirect()->route('product.list');
    }

    public function edit($id)
    {
        $register = Product::find($id);
        return view('product.edit', ['product' => $register]);
    }

    public function update(Request $req, $id)
    {
        $dados = $req->all();
        Product::find($id)->update($dados);
        return redirect()->route('product.list');
    }

    public function delete($id)
    {
        Product::find($id)->delete($id);
        return redirect()->route('product.list');
    }
}
