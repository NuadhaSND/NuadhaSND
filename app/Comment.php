<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $fillable = ['comment_text'];

    public function publication()
    {      
        return $this->belongsTo(Publication::class);    
    }

    public function user()
    {      
        return $this->belongsTo(User::class);    
    }
}
