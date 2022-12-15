<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comuna extends Model
{
    use HasFactory,softDeletes;
    protected $table = 'comunas'; //vinculacion a tabla
    protected $primaryKey = 'id_comuna';
    public $incrementing = false;
    public $timeStamp = false;
    protected $keyTypr = 'string';

    protected $dates = ['deleted_at']; //para el soft deletes
}
