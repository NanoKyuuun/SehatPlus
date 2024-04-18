<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_record extends Model
{
    use HasFactory;
    protected $table = 'profile_records';

    protected $fillable = [
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'nomor_telepon',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
