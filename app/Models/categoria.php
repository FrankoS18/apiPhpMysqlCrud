<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categoria extends Model
{
    use SoftDeletes;
    public $timestamps = true;
    protected $fillable = ['id', 'nombre', 'observacion'];
    protected $dates = ['deleted_at'];
}
