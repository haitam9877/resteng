<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prodact extends Model
{
    protected $fillable = [
        'name', 'prise', 'store','Country'
    ];
}
