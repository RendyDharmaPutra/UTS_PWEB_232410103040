<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengelolaan extends Model
{
    protected $table = 'pengelolaan';

    protected $fillable = ['name', 'cost'];
}
