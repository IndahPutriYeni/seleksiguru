<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'jabatan',
        'isAdmin',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function calon_guru()
    {
        return $this->hasOne(CalonGuru::class, 'id');
    }

    public function penilai()
    {
        return $this->where('jabatan', 'kepala_sekolah')->orWhere('jabatan', 'kepala_yayasan');
    }

    public function nilai_penilai()
    {
        return $this->hasMany(NilaiAlternatif::class, 'penilai_id');
    }

    public function nilai_guru()
    {
        return $this->hasMany(NilaiAlternatif::class, 'calon_guru_id');
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($user) { // before delete() method call this
             $user->nilai_guru()->delete();
             $user->calon_guru()->delete();
        });
    }
}
