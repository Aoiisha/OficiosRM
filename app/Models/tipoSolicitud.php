<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoSolicitud extends Model
{
    use HasFactory,softDeletes;
    protected $table = 'tipo_solicitudes'; //vinculacion a tabla
    protected $primaryKey = 'id_tipoSol';
    public $incrementing = false;
    public $timeStamp = false;
    protected $keyTypr = 'string';

    protected $dates = ['deleted_at']; //para el soft deletes
}