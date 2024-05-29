<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $primary = 'id';
    // public $timestamps = false;
    protected $fileable = ['nip', 'name', 'alamat', 'email'];
}
