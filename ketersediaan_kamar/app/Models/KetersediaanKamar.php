<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetersediaanKamar extends Model
{
    protected $fillable = ['kamar_id', 'tersedia'];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
    use HasFactory;
}
