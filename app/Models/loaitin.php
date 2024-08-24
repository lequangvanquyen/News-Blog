<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    use HasFactory;

    protected $table = 'loaitins';
    protected $primaryKey = 'id';
    // protected $dates=['ngayDang'];
    protected $fillable = [
        'lang',
        'ten',
        'noidung',
        'thuTu',
        'anHien',
    ];

    public function tin()
    {
        return $this->hasMany(tin::class, 'idLT', 'id');
    }
}
