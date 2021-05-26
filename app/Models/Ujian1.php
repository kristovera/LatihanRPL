<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian1 extends Model
{
    protected $table="jadwalujian";
    protected $fillable = ['id', 'nim','judul_kp','penguji','ruang','jam','status'];
    use HasFactory;
}
