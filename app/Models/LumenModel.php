<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//12. Model and Controller

class LumenModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
