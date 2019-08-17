<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
    'image','ar_name','ar_desc','en_name','en_desc'
    ];

}
