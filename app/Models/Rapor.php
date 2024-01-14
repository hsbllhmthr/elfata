<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'santri_id',
        'musyrif',
        'tanggal',
        'jumlahhafalan',
        'sektor',
        'semester',
        'nilai_a1',
        'nilai_a2',
        'nilai_a3',
        'nilai_a4',
        'nilai_b1',
        'nilai_b2',
        'nilai_b3',
        'nilai_c1',
        'nilai_c2',
        'nilai_c2_ket',
        'nilai_c1_ket',
        'nilai_b3_ket',
        'nilai_b2_ket',
        'nilai_b1_ket',
        'nilai_a4_ket',
        'nilai_a3_ket',
        'nilai_a2_ket',
        'nilai_a1_ket',
        'jumlah',
    ];    
   

    public function santri(){

        return $this->belongsTo(Santri::class);
    }
}
