<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function metadata()
    {
        return $this->hasMany(Dataset::class);
    }
}
