<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriKetersediaanKamar extends Model
{
    protected $fillable = ['kamar_id', 'status_awal', 'status_akhir'];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
    use HasFactory;
}
