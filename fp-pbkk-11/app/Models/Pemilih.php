<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nik',
        'tps',
        'is_deleted',
        'deleted_at',
    ];

    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}
