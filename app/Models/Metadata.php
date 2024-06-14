<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function opd() {
        return $this->belongsTo(Opd::class);
    }
    public function metadata_role() {
        return $this->belongsTo(MetadataRole::class);
    }
}
