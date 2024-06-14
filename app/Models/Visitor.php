<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = ['$ip_address'];

    // public function addVisitor($ipAddress)
    // {
    //     self::create([
    //         'ip_address' => $ipAddress,
    //     ]);
    // }

    // Metode untuk menghitung jumlah pengunjung
    public static function CountVisitor()
    {
        return self::count();
    }
}
