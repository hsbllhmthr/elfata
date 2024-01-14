<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'cabang',
        'sektor',
        'nis',
        'nama',
        'tempatlahir',
        'tgllahir',
        'jk',
        'saudara',
        'anakke',
        'alamat',
        'umur',
        'nohp',
        'asalsekolah',
        'tglmasuk',
        'namaayah',
        'namaibu',
        'kerjaayah',
        'kerjaibu',
        'pendayah',
        'pendibu',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * Check if the user is admin
     */
    public function isAdmin()
    {
        return $this->role_id === 1;
    }

    /**
     * Check if the user is creator
     */
    public function isCreator()
    {
        return $this->role_id === 2;
    }

    /**
     * Check if the user is member
     */
    public function isMember()
    {
        return $this->role_id === 3;
    }

    public function role()
    {

        return $this->belongsTo(Role::class);
    }

    public function presensi()
    {
        return $this->hasMany(Presensi::class);
    }
    public function hafalan()
    {
        return $this->hasMany(Hafalan::class);
    }
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
    public function rapor()
    {
        return $this->hasMany(Rapor::class);
    }
}
