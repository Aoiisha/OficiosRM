<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaccion extends Model
{
    use HasFactory,softDeletes;
    protected $table = 'transacciones'; //vinculacion a tabla
    protected $dates = ['deleted_at']; //para el soft deletes
}
