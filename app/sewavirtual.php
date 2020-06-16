<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sewavirtual extends Model
{
	protected $guarded = [];

    protected $fillable = [
    	'user_id', 'namaPemilik', 'email', 'phone', 'phone_wa', 'status', 'namaVirtual', 'jmlKamar', 'kamarMandi', 'jmlUnit', 'jmlRuangan', 'jmlLantai', 'luas', 'alamat',  'kecamatan', 'kota', 'latitude', 'longitude', 'fasilitas', 'jmlTower', 'kondisi', 'harga', 'foto', 'deskripsi'
    ];

    public function user(){
        return $this->belongTo('App\User');
    }
}
