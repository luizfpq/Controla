<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class ClientsController extends Controller
{
    //
    public function list()
    {
        $data = Client::all();
        return view('client.list', ['clients' => $data]);
    }

    public function create(Request $req)
    {
        $dados = $req->all();
        Client::create($dados);
        return redirect()->route('client.list');
    }

    public function edit($id)
    {
        $register = Client::find($id);
        return view('client.edit', ['client' => $register]);
    }

    public function update(Request $req, $id)
    {
        $dados = $req->all();
        Client::find($id)->update($dados);
        return redirect()->route('client.list');
    }

    public function delete($id)
    {
        Client::find($id)->delete($id);
        return redirect()->route('client.list');
    }

}
