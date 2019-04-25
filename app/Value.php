<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    protected $table = 'values';
    public $primaryKey = 'id';
    public $timespamp = true;
}
