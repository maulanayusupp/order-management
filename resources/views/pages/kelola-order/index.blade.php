@extends('layouts.master')

@section('title')Kelola Order
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Daftar order</h2>
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
							<th>Order ID</th>
							<th>Nama</th>
							<th>Instansi</th>
							<th>Biaya Instalasi</th>
							<th>Biaya Bulanan</th>
							<th>Status</th>
							<th width="30%">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($orders as $order)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $order->id }}</td>
							<td>{{ $order->first_name }}</td>
							<td>{{ $order->instansi }}</td>
							<td>Rp {{ number_format($order->biaya_instalasi)}}</td>
							<td>Rp {{ number_format($order->biaya_bulanan)}}</td>
							<td><span class="label label-{{ $order->status=='paid' ? 'success' : 'danger' }}">{{ $order->status }}</span></td>
							<td>
								<center>
									{!! Form::model($order, ['route' => ['order.destroy', $order], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('order.edit', encrypt($order->id))}}" class="btn btn-warning">Verifikasi</a> | 
	                                <a href = "{{ route('order.show', encrypt($order->id))}}" class="btn btn-primary">Lihat</a> | 
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
