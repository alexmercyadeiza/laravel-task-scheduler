<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function getWhenAttribute($value) {
        return Carbon::parse($value)->isoFormat('lll');
    }
}
