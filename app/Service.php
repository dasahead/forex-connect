<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table='Services';
    public $primaryKey='id';
    public $timestamp=true;
}
