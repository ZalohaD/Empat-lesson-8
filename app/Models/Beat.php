<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beat extends Model
{
    protected $table = "beats";
    protected $fillable = [
        'name',
    ];
    use HasFactory;
}
