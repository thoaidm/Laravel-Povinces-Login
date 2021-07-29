<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provinces extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'provinces';
    protected $primaryKey = 'province_id';
    protected $fillable = [
        'province_name',
        'province_active_status'
    ];
    public $incrementing = false;
}
