@extends('layouts.master')

@section('title')Ubah Komisi
@stop

@section('content')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>@yield('title')</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<!-- start form for validation -->
				{!! Form::model($komisi, ['route' => ['komisi.update', $komisi],'method' =>'put','role'=>'form','class'=>'form-horizontal form-label-left'])!!}
        			{!! csrf_field() !!}
					<div class="form-group{{ $errors->has('komisi') ? ' has-error' : '' }}">
						<label class="control-label col-md-4">Komisi</label>
						<div class="col-md-3">
							{!! Form::number('komisi', null, ['class'=>'form-control','placeholder'=>'Banyaknya komisi']) !!}
						</div>
						@if($errors->has('komisi'))
					        <span class="help-block">
					            <strong>{{ $errors->first('komisi') }}</strong>
					        </span>
					    @endif
					    <div class="col-md-3">
							<button type="submit" class="btn btn-danger">Ubah Komisi</button> 
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection
