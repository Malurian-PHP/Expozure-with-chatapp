<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [

        'user_id', 'skill_1', 'skill_2', 'skill_3', 'skill_4', 'skill_5'
    ];

    public function user() {

        return $this->belongsTo(User::class);
    }
}
