<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requesthapus extends Model
{
    use HasFactory;
    protected $fillable = ['eskul_id','user_id','alasan','daftar_id'];
}
