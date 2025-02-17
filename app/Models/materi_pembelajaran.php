<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class materi_pembelajaran extends Model
{
    
    protected $table = 'materi_pembelajaran';
    protected $fillable = [
        'judul',
        'deskripsi',
    ];
}
