<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function Check() 
    {
        /*
         * @TODO: a ideia receber a string com a versão do cliente
         * calcular a necessidade ou não de realizar o upgrade e devolver
         * um status inteiro
         * status possíveis:
         * 0 = OK
         * 1 = Realizar update dos arquivos
         * 2 = Realizar update dos requrimentos
         * 3 = Realizar update de tudo
         */
        return "0.0.2";
    }
}
