<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi_medis extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $table = 'konsultasi_medis';
    public function profile_record(){
        return $this->belongsTo(Profile_record::class);
    }
    public function resep_obats()
    {
        return $this->hasMany(Resep_obat::class);
    }
}