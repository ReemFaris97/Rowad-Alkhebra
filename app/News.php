<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class News extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Set the image
     *
     * @param  string  $value
     * @return void
     */
    public function setImageAttribute($value)
    {
        return $this->attributes['image'] = $value instanceof UploadedFile ? uploadFile($value) : $value;
    }

    /**
     * Get the image
     *
     * @param  string  $value
     * @return string
     */
    public function getImageAttribute($value)
    {
        return getimg($value);
    }
}
