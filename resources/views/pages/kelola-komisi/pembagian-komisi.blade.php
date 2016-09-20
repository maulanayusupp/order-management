@extends('layouts.master')

@section('title')Pembagian Komisi
@stop

@section('content')

@include('pages.informasi.informasi-akun')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Daftar pembagian komisi</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Komisi ID</th>
							<th>Order ID</th>
							<th>AM ID</th>
							<th>AC ID</th>							
							<th width="10%">Biaya Instalasi</th>
							<th>Biaya Bulanan</th>
							<th>Komisi Instalasi AM</th>
							<th>Komisi Bulanan AM</th>
							<th>Komisi Instalasi AC</th>
							<th>Komisi Bulanan AC</th>
							<th width="20%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($pembagianKomisi as $bagiKomisi)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $bagiKomisi->id }}</td>
							<td>{{ $bagiKomisi->order_id }}</td>
							<td>{{ $bagiKomisi->account_manager_id }}</td>
							<td>{{ $bagiKomisi->account_coordinator_id }}</td>
							<td>Rp {{ number_format($bagiKomisi->biaya_instalasi)}}</td>
							<td>Rp {{ number_format($bagiKomisi->biaya_bulanan)}}</td>
							<td>Rp {{ number_format($bagiKomisi->jumlah_komisi_instalasi_am )}}</td>
							<td>Rp {{ number_format($bagiKomisi->jumlah_komisi_bulanan_am )}}</td>
							<td>Rp {{ number_format($bagiKomisi->jumlah_komisi_instalasi_ac )}}</td>
							<td>Rp {{ number_format($bagiKomisi->jumlah_komisi_bulanan_ac )}}</td>
							
							<td>
								<center>
									{!! Form::model($bagiKomisi, ['route' => ['pembagian-komisi.destroy', $bagiKomisi], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('pembagian-komisi.edit', encrypt($bagiKomisi->id))}}" class="btn btn-warning">Verifikasi</a> | 
	                                <button type="submit" class="btn btn-danger">Batalkan</button>
	                                {!! Form::close()!!}
									
								</center>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
