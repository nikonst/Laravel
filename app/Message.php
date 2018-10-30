<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //Table name
    protected $table = 'messages';

    //Primary key
    public $primaryKey = 'id';

    //Timestamp
    public $timestamps = true;
    
}
