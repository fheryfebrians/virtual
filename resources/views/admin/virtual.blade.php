@extends('layouts.admin')
@section('title', '| Daftar Virtual')
@section('content')
<section class="section-main2">
    <div class="main2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>User ID</th>
                                    <th>Nama Pemilik</th>
                                    <th>Email</th>
                                    <th>Nomor</th>
                                    <th>Status Kepemilikan</th>
                                    <th>Nama Virtual</th>
                                    <th>Jumlah Kamar</th>
                                    <th>Jumlah Lantai</th>
                                    <th>Alamat</th>
                                    <th>Kecamatan</th>
                                    <th>Kota</th>
                                    <th>Harga</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                                @if ($sewavirtual->isempty())
                                    <p class="not">Belum Ada Virtual</p>                                    
                                @else
                                @foreach ($sewavirtual as $sewavirtual)
                                    <tbody>
                                        <tr>
                                            <td>{{ $sewavirtual->user_id }}</td>
                                            <td>{{ $sewavirtual->namaPemilik }}</td>
                                            <td>{{ $sewavirtual->email }}</td>
                                            <td>{{ $sewavirtual->phone_wa }}</td>
                                            <td>{{ $sewavirtual->status }}</td>
                                            <td>{{ $sewavirtual->namaVirtual }}</td>
                                            <td>{{ $sewavirtual->jmlKamar }}</td>
                                            <td>{{ $sewavirtual->jmlLantai }}</td>
                                            <td>{{ $sewavirtual->alamat }}</td>
                                            <td>{{ $sewavirtual->kecamatan }}</td>
                                            <td>{{ $sewavirtual->kota }}</td>
                                            <td>{{ $sewavirtual->harga }}</td>
                                            <td>{{ $sewavirtual->foto }}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                                @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection