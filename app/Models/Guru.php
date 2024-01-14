<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'stambuk',
        'nama',
        'cabang',
        'sektor',
        'jk',
        'tempatlahir',
        'tgllahir',
        'statusnikah',
        'saudara',
        'anakke',
        'namaayah',
        'namaibu',
        'kerjaayah',
        'kerjaibu',
        'tanggalkontrak',
        'asal',
        'alamattinggal',
        'email',
        'nohp',
        'tk',
        'sd',
        'smp',
        'sma',
        'universitas',
        'jurusan',
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
    public function isAdmin() {
        return $this->role_id === 1;
    }

    /**
     * Check if the user is creator
     */
    public function isCreator() {
        return $this->role_id === 2;
    }

    /**
     * Check if the user is member
     */
    public function isMember() {
        return $this->role_id === 3;
    }

    public function role(){

        return $this->belongsTo(Role::class);
    }
}
