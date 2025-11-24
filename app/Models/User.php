<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

// PERUBAHAN 1: Menambahkan "implements FilamentUser"
class User extends Authenticatable implements FilamentUser
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
        'password' => 'hashed',
    ];

    // PERUBAHAN 2: Menambahkan fungsi izin akses panel
    public function canAccessPanel(Panel $panel): bool
    {
        // Hanya email ini yang boleh masuk ke Admin Panel di Production
        return $this->email === 'bagusfinance@gmail.com';
        
        // Catatan: Jika nanti Anda ingin menambah admin lain, 
        // atau ingin semua user bisa masuk, ganti baris di atas menjadi:
        // return true;
    }
}