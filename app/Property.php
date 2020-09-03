<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table='Properties';
    public $primaryKey='id';
    public $timestamp=true;
}
