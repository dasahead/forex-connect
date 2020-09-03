<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $table='Seasons';
    public $primaryKey='id';
    public $timestamp=true;
}
