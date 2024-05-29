<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    use HasFactory;
    // panggil table yang akan digunakan
    protected $table = 'jenis_produk';

    // panggil kolom yang ada di table sesuai dengan yang ada didalam table
    protected $fileable = ['nama'];

    // penanda atau pemanggilan class produk relasi one to many
    public function produk(){
        return $this->hasMany(Produk::class);
    }
}
