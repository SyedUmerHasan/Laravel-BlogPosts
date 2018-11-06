<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    protected $primarykey = 'id';
    // Timestamps
    public $timestamps = true;
    public function user(){
        return $this->belongsTo('App\User');
    }
}
