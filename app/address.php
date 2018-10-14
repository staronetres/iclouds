<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    //
    protected $table = 'address';




    protected $fillable = ['total', 'status','payment_type'];
}
