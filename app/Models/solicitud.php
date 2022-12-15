<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitud extends Model
{
    use HasFactory,softDeletes;
    protected $table = 'documentos'; //vinculacion a tabla
    protected $dates = ['deleted_at']; //para el soft deletes
}
