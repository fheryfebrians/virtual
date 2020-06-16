@extends('layouts.admin')
@section('title', '| Daftar User')
@section('content')
<section class="section-main2">
    <div class="main2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nomor</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                                @if ($user->isempty())
                                    <p class="not">Belum Ada User</p>                                    
                                @else
                                @foreach ($user as $user)
                                    <tbody>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->nomor }}</td>
                                        <td>{{ $user->alamat }}</td>
                                        <td>{{ $user->admin }}</td>
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