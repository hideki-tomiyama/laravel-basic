<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    //1つの商品は１つの仕入先に属する
    public function vendor() {
        return $this->belongsTo(Vendor::class,'vendor_code','vendor_code');
    }
}
