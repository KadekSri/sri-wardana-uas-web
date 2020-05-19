<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = ['nama_admin','jenis_kelamin','agama_admin','alamat_admin'];
}
