<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    protected $dates = ['created_at'];

    protected $appends = ['dateHumanReadable'];

    public function getDateHumanReadableAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
