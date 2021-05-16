<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{

    protected $fillable = ['hard_hash', 'name', 'cpu', 'mem', 'disk', 'mac'];

    use HasFactory;


}
