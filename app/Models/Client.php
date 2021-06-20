<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'CPF_CNPJ',
        'address',
        'postal',
        'city',
        'uf',
        'phone',
        'email',
    ];


}
