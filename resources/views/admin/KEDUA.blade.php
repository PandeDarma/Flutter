@extends('LayOut.Awal')
@section('content')
<div class="row">

        <div class="col-6">
            <h3 class="stlye-5">Biodata</h3>
                <div class="row">
                    <div class="col-4">
                        <ul class="list-group ">
                            <li class="list-group-item borderless ">Nama</li>
                            <li class="list-group-item borderless">NIM</li>
                            <li class="list-group-item borderless">Prodi</li>                   
                          </ul>
                    </div>
                    <div class="col-8">
                        <ul class="list-group">
                            <li class="list-group-item borderless ">I I Gede Pande Darma Suardika</li>
                            <li class="list-group-item borderless">1815051023</li>
                            <li class="list-group-item borderless" >Pendidikan Teknik Informatika</li>                   
                          </ul>
                    </div>
                </div>
            
        </div>
        <div class="col-6">
            <h3 class="stlye-5">Studi Kasus</h3>
            <div class="row">
                <div class="col-4">
                    <ul class="list-group ">
                        <li class="list-group-item borderless ">Judul</li>
                        <li class="list-group-item borderless">Penjelasan</li>
                                        
                      </ul>
                </div>
                <div class="col-8">
                    <ul class="list-group">
                        <li class="list-group-item borderless ">Sistem Kasir</li>
                        <li class="list-group-item borderless">Semua mencatatan yang awalnya ditulis, pada sistem ini semua data dari barang,stock,maupun riwayat transaksi</li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection