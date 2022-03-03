@extends('layouts.baru')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Program') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <center>
                        @switch($program)
                            @case('karir')
                                Halaman Ini Menampilkan Program Karir
                            @break
                            @case('magang')
                                Halaman Ini Menampilkan Program Magang
                            @break
                            @case('kunjungan-industri')
                                Halaman Ini Menampilkan Program Kunjungan Industri
                            @break
                            @default
                                Program Yang Dimasukkan Tidak Tersedia, Silahkan Cek Kembali!
                        @endswitch
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection