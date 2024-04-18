<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep_obat extends Model
{
    use HasFactory;
    protected $table = 'resep_obats';
    protected $guarded =['id'];
    public function konsultasi_medis(){
        return $this->belongsTo(Konsultasi_medis::class);
    }
}
