<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable=[
        'jenis_id',
        'kondisi_id',
        'keterangan',
        'kecacatan',
        'jumlah',
        'image'
    ];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }
    public function kondisi()
    {
        return $this->belongsTo(Kondisi::class);
    }
}
