<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    //name
    protected $table = 'hosts';
    //key
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
}
