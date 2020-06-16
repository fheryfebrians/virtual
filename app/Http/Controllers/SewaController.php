<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\sewavirtual;
use Session;
use Image;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class SewaController extends Controller
{

    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showSewa()
    {
    	return view('content.sewa');
    }

    public function uploadSewa(Request $request)
    {
    	$validator = Validator::make($request->all(), [
    		'namaPemilik' => 'required',
    		'email' => 'required',
    		'phone' => 'required',
    		'phone_wa' => 'required',
            'statusPemilik' => 'required',
    		'namaVirtual' => 'required',
            'jmlKamar' => 'required',
            'kamarMandi' => 'required',
            'kondisi' => 'required',
            'jmlUnit' => 'required',
            'jmlRuangan' => 'required',
            'jmlLantai' => 'required',
            'alamat' => 'required',
            // 'jmlTower' => 'required',
            // 'luas' => 'required',
            // 'kelengkapan' => 'required',
            // 'hargaSewaPerTahun' => 'required',
            // 'hargaSewaPerBulan' => 'required',
            'foto' => 'required',
            'fasilitas' => 'required'
      ]);
      
      if($validator->fails()){
        return redirect()->back()->with('toast_error', $validator->messages()->all()[0])->withInput();
      }

      $sewavirtual = new sewavirtual();
      $sewavirtual->user_id = Auth::User()->id;
    	$sewavirtual->namaPemilik = $request['namaPemilik'];
    	$sewavirtual->email = $request['email'];
    	$sewavirtual->phone = $request['phone'];
    	$sewavirtual->phone_wa = $request['phone_wa'];
    	$sewavirtual->statusPemilik = $request['statusPemilik'];
    	$sewavirtual->namaVirtual = $request['namaVirtual'];
    	$sewavirtual->jmlKamar = $request['jmlKamar'];
    	$sewavirtual->kamarMandi = $request['kamarMandi'];
      $sewavirtual->kondisi = $request['kondisi'];
    	$sewavirtual->jmlUnit = $request['jmlUnit'];
    	$sewavirtual->jmlRuangan = $request['jmlRuangan'];
    	$sewavirtual->jmlLantai = $request['jmlLantai'];
    	$sewavirtual->jmlTower = $request['jmlTower'];
      $sewavirtual->luas = $request['luas'];
      $sewavirtual->kecamatan = $request['kecamatan'];
      if($sewavirtual->kecamatan == "1"){$sewavirtual->latitude = "-6.17";$sewavirtual->longitude = "106.86";}if($sewavirtual->kecamatan == "2") {$sewavirtual->latitude = "-6.17";$sewavirtual->longitude = "106.87";} if($sewavirtual->kecamatan == "3"){$sewavirtual->latitude = "-6.19"; $sewavirtual->longitude = "106.86";}if($sewavirtual->kecamatan == "4"){$sewavirtual->latitude = "-6.17";$sewavirtual->longitude = "106.80";}if($sewavirtual->kecamatan == "5"){$sewavirtual->latitude = "-6.20";$sewavirtual->longitude = "106.95";}if($sewavirtual->kecamatan == "6"){$sewavirtual->latitude = "-6.16";$sewavirtual->longitude = "106.82";}if($sewavirtual->kecamatan == "7"){$sewavirtual->latitude = "-6.16";$sewavirtual->longitude = "106.81";}if($sewavirtual->kecamatan == "8"){$sewavirtual->latitude = "-6.18";$sewavirtual->longitude = "106.85";}if($sewavirtual->kecamatan == "9"){$sewavirtual->latitude = "-6.15";$sewavirtual->longitude = "106.85";}if($sewavirtual->kecamatan == "10"){$sewavirtual->latitude = "-6.19";$sewavirtual->longitude = "106.83";}if($sewavirtual->kecamatan == "11"){$sewavirtual->latitude = "-6.15";$sewavirtual->longitude = "106.83";}if($sewavirtual->kecamatan == "12"){$sewavirtual->latitude = "-6.18";$sewavirtual->longitude = "106.84";}if($sewavirtual->kecamatan == "13"){$sewavirtual->latitude = "-6.20";$sewavirtual->longitude = "106.80";}if($sewavirtual->kecamatan == "14"){$sewavirtual->latitude = "-5.54";$sewavirtual->longitude = "106.61";}if($sewavirtual->kecamatan == "15"){$sewavirtual->latitude = "-6.12";$sewavirtual->longitude = "106.94";}if($sewavirtual->kecamatan == "16"){$sewavirtual->latitude = "-6.15";$sewavirtual->longitude = "106.89";}if($sewavirtual->kecamatan == "17"){$sewavirtual->latitude = "-6.12";$sewavirtual->longitude = "106.90";}if($sewavirtual->kecamatan == "18"){$sewavirtual->latitude = "-6.13";$sewavirtual->longitude = "106.83";}if($sewavirtual->kecamatan == "19"){$sewavirtual->latitude = "-6.12";$sewavirtual->longitude = "106.79";}if($sewavirtual->kecamatan == "20"){$sewavirtual->latitude = "-6.13";$sewavirtual->longitude = "106.87";}if($sewavirtual->kecamatan == "21"){$sewavirtual->latitude = "-6.18";$sewavirtual->longitude = "106.93";}if($sewavirtual->kecamatan == "22"){$sewavirtual->latitude = "-6.32";$sewavirtual->longitude = "106.89";}if($sewavirtual->kecamatan == "23"){$sewavirtual->latitude = "-6.33";$sewavirtual->longitude = "106.87";}if($sewavirtual->kecamatan == "24"){$sewavirtual->latitude = "-6.23";$sewavirtual->longitude = "106.91";}if($sewavirtual->kecamatan == "25"){$sewavirtual->latitude = "-6.22";$sewavirtual->longitude = "106.87";}if($sewavirtual->kecamatan == "26"){$sewavirtual->latitude = "-6.27";$sewavirtual->longitude = "106.86";}if($sewavirtual->kecamatan == "27"){$sewavirtual->latitude = "-6.26";$sewavirtual->longitude = "106.89";}if($sewavirtual->kecamatan == "28"){$sewavirtual->latitude = "-6.20";$sewavirtual->longitude = "106.86";}if($sewavirtual->kecamatan == "29"){$sewavirtual->latitude = "-6.32";$sewavirtual->longitude = "106.85";}if($sewavirtual->kecamatan == "30"){$sewavirtual->latitude = "-6.19";$sewavirtual->longitude = "106.88";}if($sewavirtual->kecamatan == "31"){$sewavirtual->latitude = "-6.29";$sewavirtual->longitude = "106.79";}if($sewavirtual->kecamatan == "32"){$sewavirtual->latitude = "-6.33";$sewavirtual->longitude = "106.82";}if($sewavirtual->kecamatan == "33"){$sewavirtual->latitude = "-6.24";$sewavirtual->longitude = "106.80";}if($sewavirtual->kecamatan == "34"){$sewavirtual->latitude = "-6.24";$sewavirtual->longitude = "106.77";}if($sewavirtual->kecamatan == "35"){$sewavirtual->latitude = "-6.25";$sewavirtual->longitude = "106.81";}if($sewavirtual->kecamatan == "36"){$sewavirtual->latitude = "-6.25";$sewavirtual->longitude = "106.84";}if($sewavirtual->kecamatan == "37"){$sewavirtual->latitude = "-6.28";$sewavirtual->longitude = "106.83";}if($sewavirtual->kecamatan == "38"){$sewavirtual->latitude = "-6.24";$sewavirtual->longitude = "106.75";}if($sewavirtual->kecamatan == "39"){$sewavirtual->latitude = "-6.21";$sewavirtual->longitude = "106.82";}if($sewavirtual->kecamatan == "40"){$sewavirtual->latitude = "-6.22";$sewavirtual->longitude = "106.84";}if($sewavirtual->kecamatan == "41"){$sewavirtual->latitude = "-6.14";$sewavirtual->longitude = "106.73";}if($sewavirtual->kecamatan == "42"){$sewavirtual->latitude = "-6.16";$sewavirtual->longitude = "106.79";}if($sewavirtual->kecamatan == "43"){$sewavirtual->latitude = "-6.14";$sewavirtual->longitude = "106.81";}if($sewavirtual->kecamatan == "44"){$sewavirtual->latitude = "-6.14";$sewavirtual->longitude = "106.80";}if($sewavirtual->kecamatan == "45"){$sewavirtual->latitude = "-6.18";$sewavirtual->longitude = "106.76";}if($sewavirtual->kecamatan == "46"){$sewavirtual->latitude = "-6.12";$sewavirtual->longitude = "106.70";}if($sewavirtual->kecamatan == "47"){$sewavirtual->latitude = "-6.19";$sewavirtual->longitude = "106.79";}if($sewavirtual->kecamatan == "48"){$sewavirtual->latitude = "-6.19";$sewavirtual->longitude = "106.74";}


    	$sewavirtual->fasilitas = implode(",", $request['fasilitas']);
    	$sewavirtual->annually = $request['annually'];
    	$sewavirtual->semi_annually = $request['semi_annually'];
    	$sewavirtual->sell = $request['sell'];


    	$file = $request->file('foto');
    	$fileName = $file->getClientOriginalName();
    	$request->file('foto')->move("storage/images/", $fileName);
    	$sewavirtual->foto = $fileName;
      $sewavirtual->deskripsi = $request['deskripsi'];
    	$sewavirtual->save();
      return redirect('/daftarVirtual')->with('success', 'Apartemen Berhasil Diterbitkan');      ;

    }


}
