@extends('layouts.baru')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Product') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <center>
                        @switch($product)
                            @case('edugames')
                                Halaman Marbel Educational Games
                            @break
                            @case('kidsgames')
                                Halaman Marbel And Friends Kids Games
                            @break
                            @case('riri')
                                Halaman Riri Story Books
                            @break
                            @case('kolak')
                                Halaman Kolak Kids Songs
                            @break
                            @default
                                Product Yang Dimasukkan Tidak Tersedia, Silahkan Cek Kembali!
                        @endswitch
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection