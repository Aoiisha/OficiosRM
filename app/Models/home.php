<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//ejemplo de model

class home extends Model
{
    use HasFactory;
    protected $primaryKey =  'key';
    public $incrementing = false;
    protected $keyType = 'string';
}
