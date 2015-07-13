<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replay extends Model
{
     public $timestamps=false;
    protected $table= 'replayed_msg';
}
