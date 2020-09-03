<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table='Equipments';
    public $primaryKey='id';
    public $timestamp=true;
}
