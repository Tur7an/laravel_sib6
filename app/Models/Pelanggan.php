<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $fileable = [
        'kode', 'nama', 'jk', 'tmp_lahir', 'email', 'kartu_id'
    ];
    public $timestamps = false;
    
    public function kartu(){
        return $this->belongsTo(Kartu::class);
    }
}
