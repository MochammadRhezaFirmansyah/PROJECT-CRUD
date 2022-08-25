<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rheza24 extends Model
{
    use HasFactory;
    protected $table='rheza24s';
    protected $fillable=['nama','nis','tglLahir'];
}
