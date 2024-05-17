<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    // ho dovuto aggiungerlo perche mi dava lèerrore
    protected $guarded = ['_token'];
}
