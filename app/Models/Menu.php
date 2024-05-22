<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Number;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = [];

    //artinya guarded = tidak meloloskan tapi kalo tidak ada isinya boleh masuk semua

    public function getHargaAttribute()
    {
        return "Rp. " . Number::format($this->price);
    }

    public function getGambarAttribute()
    {
        return $this->photo ? Storage::url($this->photo) : url('noimage.jpg');
    }
}
