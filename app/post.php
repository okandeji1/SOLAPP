<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Time Stamps
    public $timeStamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
