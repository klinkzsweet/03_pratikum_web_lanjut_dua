@extends('layouts.baru')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Contact Us') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <center>
                            Kontak Kami
                        </center><br><br>
                            Contoh Contact-Us : <br>
                             Kontak Kami : 
                            <li>Whatsapp - 08992653094</li>
                            <li>Telegram - 0895627515230</li>
                            <li> </li><br><br>
                            Kritik/Saran bisa dengan mengisi form di bawah ini
                        
                        <div class="form-group">
                            <br><label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukkan nama anda">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" class="form-control" email="email" placeholder="Masukkan email anda">
                        </div>
                        <div class="form-group">
                            <label for="name">Kritik/Saran</label>
                            <input type="text" class="form-control" masukan="masukan" placeholder="Tuliskan kritik/saran kepada kami">
                        </div>
                        <br>
                            <center><button type="submit" class="btn btn-primary btn-block">Submit</button></center>
				        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection