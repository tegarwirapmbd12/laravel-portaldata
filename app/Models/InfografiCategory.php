<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfografiCategory extends Model
{
    use HasFactory;

    protected $guarded =  ['id'];

    public function infografi()
    {
        return $this->hasMany(Infografi::class);
    }
}
