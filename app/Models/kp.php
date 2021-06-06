<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kp extends Model
{
    protected $table="pengajuan_kp";
    protected $fillable = ['id', 'nim','judul_kp','penguji','tahun','dokumen','status'

];

   

}
