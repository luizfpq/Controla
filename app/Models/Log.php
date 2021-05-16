<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['hard_hash', 'ip', 'status', 'action'];

    use HasFactory;

    
}
