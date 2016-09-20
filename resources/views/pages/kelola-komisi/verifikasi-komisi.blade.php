@extends('layouts.master')

@section('title')Data Komisi
@stop

@section('content')

@include('pages.informasi.informasi-akun')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>@yield('title') - {{ $pembagianKomisi->id }}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Account Manager ID</label>
                        <div class="col-md-5">
                            {{ $pembagianKomisi->account_manager_id }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Account Coordinator ID</label>
                        <div class="col-md-5">
                            {{ $pembagianKomisi->account_coordinator_id }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Biaya Instalasi</label>
                        <div class="col-md-5">
                            Rp. {{ number_format($pembagianKomisi->biaya_instalasi) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Biaya Bulanan</label>
                        <div class="col-md-5">
                           Rp. {{ number_format($pembagianKomisi->biaya_bulanan) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Komisi Instalasi Account Manager</label>
                        <div class="col-md-5">
                            {{ $pembagianKomisi->komisi_instalasi_am }} %
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Komisi Bulanan Account Manager</label>
                        <div class="col-md-5">
                            {{ $pembagianKomisi->komisi_bulanan_am }} %
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Komisi Instalasi Account Coordinator</label>
                        <div class="col-md-6">
                            {{ $pembagianKomisi->komisi_instalasi_ac }} %
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Komisi Bulanan Account Coordinator</label>
                        <div class="col-md-4">
                            {{ $pembagianKomisi->komisi_bulanan_ac }} %
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Jumlah Komisi Instalasi AM</label>
                        <div class="col-md-3">
                            Rp. {{ number_format($pembagianKomisi->jumlah_komisi_instalasi_am) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Jumlah Komisi Bulanan AM</label>
                        <div class="col-md-2">
                            Rp. {{ number_format($pembagianKomisi->jumlah_komisi_bulanan_am) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Jumlah Komisi Instalasi AC</label>
                        <div class="col-md-3">
                            Rp. {{ number_format($pembagianKomisi->jumlah_komisi_instalasi_ac) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Jumlah Komisi Bulanan AC</label>
                        <div class="col-md-3">
                            Rp. {{ number_format($pembagianKomisi->jumlah_komisi_bulanan_ac) }}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group">
                        <center>
                            <a href="{{ url('kelola/pembagian-komisi') }}" class="btn btn-primary">Kembali</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
