<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar extends Model
{
    use HasFactory;
     protected $fillable = [
        'eskul_id',
        'user_id',
    ];
      public function user()
    {
        return $this->belongsTo(User::class);
    }
      public function eskul()
    {
        return $this->belongsTo(Ekstrakurikuler::class);
    }
}
