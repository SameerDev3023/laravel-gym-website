<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shopping_bag extends Model
{
    use HasFactory;
    protected $table = "shopping_bag";
    protected $primaryKey ="cart_items";
}
