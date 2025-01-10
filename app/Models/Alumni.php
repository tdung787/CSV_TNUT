<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $guarded = [];



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
