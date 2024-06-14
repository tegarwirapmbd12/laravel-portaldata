<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infografi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function infografi_category()
    {
        return $this->belongsTo(InfografiCategory::class);
    }
}
