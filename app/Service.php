<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $fillable = [
    'image','ar_name','en_name','ar_desc','en_desc'
    ];

}
