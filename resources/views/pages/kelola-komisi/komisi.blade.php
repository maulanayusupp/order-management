@extends('layouts.master')

@section('title')Atur Komisi
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Daftar Komisi</h2>
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
							<th >No</th>
							<th width="60%">Komisi</th>
							<th >Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php $no = 1; ?>
                		@foreach($komisis as $komisi)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $komisi->komisi }} %</td>
							<td>
								<center>
									{!! Form::model($komisi, ['route' => ['komisi.destroy', $komisi], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
	                                <a href = "{{ route('komisi.edit', encrypt($komisi->id))}}" class="btn btn-warning">Ubah Komisi</a> | <button type="submit" class="btn btn-danger">Hapus Komisi</button>
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
