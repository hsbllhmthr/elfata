<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'santri_id',
        'tanggal',
        'ket',
        'cabang',
    ];


    public function santri()
    {
        return $this->belongsTo(Santri::class, 'santri_id');
    }
}
