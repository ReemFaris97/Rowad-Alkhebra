<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{

    protected $fillable = [
    'image','ar_name','en_name','ar_desc','en_desc'
    ];

    public function name()
    {
        if (app()->getLocale() == 'en')
            return $this->en_name;
        else
            return $this->ar_name;
    }

    public function desc()
    {
        if (app()->getLocale() == 'en')
            return $this->en_desc;
        else
            return $this->ar_desc;
    }

}
