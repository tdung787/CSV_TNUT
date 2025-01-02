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
    protected $guarded = [
        'is_admin'
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

    public function getImageURL()
    {
        if ($this->image) {
            return url('storage/' . $this->image);
        }
        return url('https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Windows_10_Default_Profile_Picture.svg/2048px-Windows_10_Default_Profile_Picture.svg.png');
    }
    public function scopeSearch($query, $search = '')
    {
        $query->where('ten', 'like', '%' . $search . '%');
    }
    public function scopeKhoa($query, $khoa = null)
    {
        if ($khoa !== null) {
            $query->where('khoa', '=', $khoa);
        }
    }
    public function scopeChuyennganh($query, $chuyennganh = '')
    {
        $query->where('chuyennganh', 'like', '%' . $chuyennganh . '%');
    }
    public function scopeTinh($query, $tinh = '')
    {
        $query->where('diachi', 'like', '%' . $tinh . '%');
    }
    public function scopeLop($query, $lop = '')
    {
        $query->where('lop', 'like', '%' . $lop . '%');
    }
    public function scopeNoilamviec($query, $noilamviec = '')
    {
        $query->where('noilamviec', 'like', '%' . $noilamviec . '%');
    }
}
