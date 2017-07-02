<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable=['content','user_id','articles_id','comments_id','jadwal_ibadahs_id'];
}
