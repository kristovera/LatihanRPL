<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ujian extends Model
{
    protected $table="jadwalujian";
   protected $fillable = ['id', 'nim','judul_kp','penguji','ruang','jam','status'];
}
