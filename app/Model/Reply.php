<?php

namespace App\Model;

use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function questionn(){
        return $this->belongsTo(Question::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function like(){
        return $this->hasMany(Like::class);
    }

}
