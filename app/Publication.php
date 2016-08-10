<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{

    protected $fillable = ['publication_text'];

    public function user()
    {      
        return $this->belongsTo(User::class);    
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
