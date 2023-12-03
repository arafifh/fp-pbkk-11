<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'pemilih_id',
        'nik',
        'name',
        'tps',
        'status',
    ];

    public function pemilih()
    {
        return $this->belongsTo(Pemilih::class);
    }
}
