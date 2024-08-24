<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    use HasFactory;
    protected $table = 'binhluans';
    protected $fillable = ['idTin', 'ngayDang', 'noiDung', 'email', 'hoTen', 'anHien'];
    public $timestamps = false;
    protected $dates = ['ngayDang'];
}
