<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'santri_id',
        'halaqah',
        'tanggal',
        'isi',
        'nilai1',
        'nilai2',
        'nilai3',
        'link',
    ];


    public function santri()
    {

        return $this->belongsTo(Santri::class);
    }
}
