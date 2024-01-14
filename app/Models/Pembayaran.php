<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'santri_id',
        'kelompok',
        'tanggal',
        'jumlah',
        'sisa',
        'ket',
    ];    
   

    public function santri(){

        return $this->belongsTo(Santri::class);
    }
}
