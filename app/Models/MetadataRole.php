<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetadataRole extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function metadata()
    {
        return $this->hasMany(Metadata::class);
    }
}
