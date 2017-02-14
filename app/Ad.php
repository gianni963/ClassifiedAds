<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['title', 'user_id', 'content', 'price', 'location'];

    public function user(){

    	return $this->belongsTo(User::class);
    }
}
