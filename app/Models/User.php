<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes; // kalau pakai deleted_at

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * Tabel yang digunakan (opsional jika namanya 'users')
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Kolom yang bisa diisi mass-assignment.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'fullname',
        'email',
        'phone',
        'role_id',
    ];

    /**
     * Kolom yang disembunyikan saat serialisasi.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Kolom yang di-cast otomatis.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Kolom yang diolah sebagai tanggal (deprecated di Laravel 11).
     * Pakai $casts sebagai gantinya.
     */
    protected $dates = ['deleted_at'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
