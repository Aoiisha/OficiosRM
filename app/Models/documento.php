<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    use HasFactory,softDeletes;
    protected $table = 'documentos'; //vinculacion a tabla
    protected $primaryKey = 'codigo_doc';
    public $incrementing = false;
    public $timeStamp = false;
    protected $keyTypr = 'string';

    protected $dates = ['deleted_at']; //para el soft deletes
}
