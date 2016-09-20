@extends('layouts.master')

@section('title')Data Order
@stop

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>@yield('title') - {{ $order->first_name ." ". $order->last_name }}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Order Status</label>
                        <div class="col-md-5">
                            <span class="label label-{{ $order->status=='paid' ? 'success' : 'danger' }}">{{ $order->status }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Nama Instansi/Perusahaan</label>
                        <div class="col-md-5">
                            {{ $order->instansi }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Nama Depan</label>
                        <div class="col-md-5">
                            {{ $order->first_name }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Nama Belakang</label>
                        <div class="col-md-5">
                            {{ $order->last_name }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Jabatan</label>
                        <div class="col-md-5">
                            {{ $order->jabatan }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">E-Mail</label>
                        <div class="col-md-5">
                            {{ $order->email }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Alamat lengkap</label>
                        <div class="col-md-6">
                            {{ $order->alamat }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Kota</label>
                        <div class="col-md-4">
                            {{ $order->kota }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Provinsi</label>
                        <div class="col-md-3">
                            {{ $order->provinsi }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Kode Pos</label>
                        <div class="col-md-2">
                            {{ $order->kode_pos }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Nomor Telepon</label>
                        <div class="col-md-3">
                            {{ $order->nomor_telepon }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Biaya Instalasi</label>
                        <div class="col-md-4">
                            Rp. {{ number_format($order->biaya_instalasi) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Biaya Bulanan</label>
                        <div class="col-md-4">
                            Rp. {{ number_format($order->biaya_bulanan) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Account Manager ID</label>
                        <div class="col-md-5">
                            {{ $order->account_manager_id }}
                          </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="control-label col-md-3">Account Coordinator ID</label>
                        <div class="col-md-5">
                            {{ $order->account_coordinator_id }}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group">
                        <center>
                            <a href="{{ url('kelola/order') }}" class="btn btn-primary">Kembali</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
