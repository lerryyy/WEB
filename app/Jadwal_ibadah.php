<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_ibadah extends Model
{
    //
    protected $fillable=['pelayan_firman','waktu','ibadah','upload','user_id'];
}
