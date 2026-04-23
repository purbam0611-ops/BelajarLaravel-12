<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    // Daftar kolom yang boleh diisi (sesuai migration)
    protected $fillable = ['nama_peminjam', 'amount', 'reason', 'status'];
}
