<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $fillable = [
        'nama_obat',
        'kemasan',
        'harga',
    ];

    public function detail_periksa(){
        return $this->hasMany(detail_Periksa::class, 'id_obat');
    }
    
}