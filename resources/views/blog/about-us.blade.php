@extends('layouts.baru')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('About Us') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <center>
                            Halaman ini menampilkan informasi mengenai kami
                        </center><br>
                        Contoh About-Us : <br>
                        ABOUT US<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection