<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoPago extends Model
{
    use HasFactory,softDeletes;
    protected $table = 'tipo_pagos'; //vinculacion a tabla
    protected $primaryKey = 'id_tipoPago';
    public $incrementing = false;
    public $timeStamp = false;
    protected $keyTypr = 'string';

    protected $dates = ['deleted_at']; //para el soft deletes
}
