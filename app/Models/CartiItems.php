<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartiItems extends Model
{
    use HasFactory;

    protected $table = 'cart_items';
    protected $primaryKey = 'id';

}
