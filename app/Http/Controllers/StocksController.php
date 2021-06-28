<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StocksController extends Controller
{
    //
    public static function list()
    {
        $data = DB::table('stocks')
            ->join('products', 'products.id', '=', 'stocks.id_product')
            ->select('stocks.*', 'products.name as name', 'products.description as description')
            ->get();

        return view('stock.list', ['stocks' => $data]);
    }


    public function create(Request $req)
    {
        $dados = $req->all();
        Stock::create($dados);
        return redirect()->route('stock.list');
    }

    public function edit($id)
    {
        $register = Stock::find($id);
        return view('stock.edit', ['stock' => $register]);
    }

    /* TODO: criar iteração entre a tabela de produtos e a tabela de estoque */
    public function update(Request $req, $id)
    {
        $dados = $req->all();
        Stock::find($id)->update($dados);
        return redirect()->route('stock.list');
    }

    public function delete($id)
    {
        Stock::find($id)->delete($id);
        return redirect()->route('stock.list');
    }



    public static function list_products(): array
    {
        $data = Product::all()->pluck('id', 'name');

        return $data->toArray();

    }
}
