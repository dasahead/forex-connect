<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table='RoomTypes';
    public $primaryKey='id';
    public $timestamp=true;
}
