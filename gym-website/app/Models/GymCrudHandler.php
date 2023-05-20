<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymCrudHandler extends Model
{
    use HasFactory;
    protected $table = 'body_builders';
    protected $primaryKey = 'builder_id';
}
