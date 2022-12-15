<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fotografia extends Model
{
    use HasFactory,softDeletes;
    protected $table = 'fotografias'; //vinculacion a tabla
    protected $primaryKey = 'id_foto';
    public $incrementing = false;
    public $timeStamp = false;
    protected $keyTypr = 'string';

    protected $dates = ['deleted_at']; //para el soft deletes
}
