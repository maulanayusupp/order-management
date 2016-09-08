@extends('layouts.master')

@section('title')Pembagian Komisi
@stop

@section('content')
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
				<p class="text-muted font-13 m-b-30">
                Account Manager (AM) <br> Account Coordinator (AC)
                </p>

				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Order ID</th>
							<th>User ID</th>
							<th>Komisi AM</th>
							<th>Komisi AC</th>
							<th>Biaya Bulanan</th>
							<th>Status</th>
							<th width="30%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($pembagianKomisi as $komisi)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $komisi->id }}</td>
							<td>{{ $komisi->first_name }}</td>
							<td>{{ $komisi->instansi }}</td>
							<td>Rp {{ number_format($komisi->biaya_instalasi)}}</td>
							<td>Rp {{ number_format($komisi->biaya_bulanan)}}</td>
							<td><span class="label label-{{ $komisi->status=='paid' ? 'success' : 'danger' }}">{{ $komisi->status }}</span></td>
							<td>
								<center>
									{!! Form::model($komisi, ['route' => ['komisi.destroy', $komisi], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('komisi.edit', encrypt($komisi->id))}}" class="btn btn-warning">Verifikasi</a> | 
	                                <a href = "{{ route('komisi.show', encrypt($komisi->id))}}" class="btn btn-primary">Lihat</a> | 
	                                <button type="submit" class="btn btn-danger">Batal Order</button>
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
