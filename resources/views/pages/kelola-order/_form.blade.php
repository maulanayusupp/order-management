<div class="form-group{{ $errors->has('instansi') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Nama Instansi/Perusahaan</label>
    <div class="col-md-5">
        {!! Form::text('instansi', null, ['class'=>'form-control','placeholder'=>'Nama instansi/perusahaan']) !!}
    </div>
    @if($errors->has('instansi'))
        <span class="help-block">
            <strong>{{ $errors->first('instansi') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
	<label class="control-label col-md-3">Nama Depan (Pejabat)</label>
	<div class="col-md-4">
		{!! Form::text('first_name', null, ['class'=>'form-control','placeholder'=>'Nama depan pejabat']) !!}
	</div>
	@if($errors->has('first_name'))
        <span class="help-block">
            <strong>{{ $errors->first('first_name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Nama Belakang (Pejabat)</label>
    <div class="col-md-4">
        {!! Form::text('last_name', null, ['class'=>'form-control','placeholder'=>'Nama belakang pejabat']) !!}
    </div>
    @if($errors->has('last_name'))
        <span class="help-block">
            <strong>{{ $errors->first('last_name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Jabatan</label>
    <div class="col-md-3">
        {!! Form::text('jabatan', null, ['class'=>'form-control','placeholder'=>'Jabatan']) !!}
    </div>
    @if($errors->has('jabatan'))
        <span class="help-block">
            <strong>{{ $errors->first('jabatan') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	<label class="control-label col-md-3">E-Mail</label>
	<div class="col-md-5">
		{!! Form::text('email', null, ['class'=>'form-control','placeholder'=>'Alamat E-mail']) !!}
	</div>
	@if($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
	<label class="control-label col-md-3">Alamat lengkap</label>
	<div class="col-md-6">
		{!! Form::textarea('alamat', null, ['class'=>'form-control','placeholder'=>'Alamat lengkap','rows'=>'4']) !!}
	</div>
	@if($errors->has('alamat'))
        <span class="help-block">
            <strong>{{ $errors->first('alamat') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('kota') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Kota</label>
    <div class="col-md-4">
    	{!!Form::select('kota', [''=>'']+App\Kota::pluck('name','name')->all(), null, ['class'=>'select2_single form-control']) !!}
      </select>
    </div>
    @if($errors->has('kota'))
        <span class="help-block">
            <strong>{{ $errors->first('kota') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Provinsi</label>
    <div class="col-md-3">
    	{!!Form::select('provinsi', [''=>'']+App\Provinsi::pluck('name','name')->all(), null, ['class'=>'select2_single form-control']) !!}
      </select>
    </div>
    @if($errors->has('provinsi'))
        <span class="help-block">
            <strong>{{ $errors->first('provinsi') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('kode_pos') ? ' has-error' : '' }}">
	<label class="control-label col-md-3">Kode Pos</label>
	<div class="col-md-2">
		{!! Form::number('kode_pos', null, ['class'=>'form-control','placeholder'=>'Kode Pos']) !!}
	</div>
	@if($errors->has('kode_pos'))
        <span class="help-block">
            <strong>{{ $errors->first('kode_pos') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('nomor_telepon') ? ' has-error' : '' }}">
	<label class="control-label col-md-3">Nomor Telepon</label>
	<div class="col-md-3">
		{!! Form::number('nomor_telepon', null, ['class'=>'form-control','placeholder'=>'Nomor telepon']) !!}
	</div>
	@if($errors->has('nomor_telepon'))
        <span class="help-block">
            <strong>{{ $errors->first('nomor_telepon') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('biaya_instalasi') ? ' has-error' : '' }}">
	<label class="control-label col-md-3">Biaya Instalasi</label>
	<div class="col-md-4">
		{!! Form::number('biaya_instalasi', null, ['class'=>'form-control','placeholder'=>'Biaya instalasi']) !!}
	</div>
	@if($errors->has('biaya_instalasi'))
        <span class="help-block">
            <strong>{{ $errors->first('biaya_instalasi') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('biaya_bulanan') ? ' has-error' : '' }}">
	<label class="control-label col-md-3">Biaya Bulanan</label>
	<div class="col-md-4">
		{!! Form::number('biaya_bulanan', null, ['class'=>'form-control','placeholder'=>'Biaya Bulanan']) !!}
	</div>
	@if($errors->has('biaya_bulanan'))
        <span class="help-block">
            <strong>{{ $errors->first('biaya_bulanan') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('account_manager_id') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Account Manager</label>
    <div class="col-md-5">
    	{!!Form::select('account_manager_id', [''=>'']+App\User::where('role','=','account-manager')->pluck('name','id')->all(), null, ['class'=>'select2_single form-control','placeholder' => 'Pilih account manager']) !!}
      </select>
    </div>
    @if($errors->has('account_manager_id'))
        <span class="help-block">
            <strong>{{ $errors->first('account_manager_id') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('account_coordinator_id') ? ' has-error' : '' }}">
    <label class="control-label col-md-3">Account Coordinator</label>
    <div class="col-md-5">
    	{!!Form::select('account_coordinator_id', [''=>'']+App\User::where('role','=','account-coordinator')->pluck('name','id')->all(), null, ['class'=>'select2_single form-control','placeholder' => 'Pilih account coordinator']) !!}
      </select>
    </div>
    @if($errors->has('account_coordinator_id'))
        <span class="help-block">
            <strong>{{ $errors->first('account_coordinator_id') }}</strong>
        </span>
    @endif
</div>

@if(isset($order))
    <div class="form-group{{ $errors->has('komisi_instalasi_am') ? ' has-error' : '' }}">
        <label class="control-label col-md-3">Komisi Instalasi AM</label>
        <div class="col-md-2">
            {!!Form::select('komisi_instalasi_am', [''=>'']+App\Komisi::pluck('komisi','komisi')->all(), 40, ['class'=>'select2_single form-control']) !!}
          </select>
        </div>
        @if($errors->has('komisi_instalasi_am'))
            <span class="help-block">
                <strong>{{ $errors->first('komisi_instalasi_am') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('komisi_bulanan_am') ? ' has-error' : '' }}">
        <label class="control-label col-md-3">Komisi Bulanan AM</label>
        <div class="col-md-2">
            {!!Form::select('komisi_bulanan_am', [''=>'']+App\Komisi::pluck('komisi','komisi')->all(), 5, ['class'=>'select2_single form-control']) !!}
          </select>
        </div>
        @if($errors->has('komisi_bulanan_am'))
            <span class="help-block">
                <strong>{{ $errors->first('komisi_bulanan_am') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('komisi_instalasi_ac') ? ' has-error' : '' }}">
        <label class="control-label col-md-3">Komisi Intalasi AC</label>
        <div class="col-md-2">
            {!!Form::select('komisi_instalasi_ac', [''=>'']+App\Komisi::pluck('komisi','komisi')->all(), 0, ['class'=>'select2_single form-control']) !!}
          </select>
        </div>
        @if($errors->has('komisi_instalasi_ac'))
            <span class="help-block">
                <strong>{{ $errors->first('komisi_instalasi_ac') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('komisi_bulanan_ac') ? ' has-error' : '' }}">
        <label class="control-label col-md-3">Komisi Bulanan AC</label>
        <div class="col-md-2">
            {!!Form::select('komisi_bulanan_ac', [''=>'']+App\Komisi::pluck('komisi','komisi')->all(), 0, ['class'=>'select2_single form-control']) !!}
          </select>
        </div>
        @if($errors->has('komisi_bulanan_ac'))
            <span class="help-block">
                <strong>{{ $errors->first('komisi_bulanan_ac') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
        <label class="control-label col-md-3">Status</label>
        <div class="col-md-5">
            {!!Form::select('status', ['paid'=>'paid','unpaid'=>'unpaid'], null, ['class'=>'select2_single form-control','placeholder' => 'Pilih account coordinator']) !!}
          </select>
        </div>
        @if($errors->has('status'))
            <span class="help-block">
                <strong>{{ $errors->first('status') }}</strong>
            </span>
        @endif
    </div>
@endif

<hr>

<div class="form-group">
	<center>
        <button type="submit" class="btn btn-danger">{{ isset($order) ? 'Verifikasi Order' : 'Buat Order'}}</button> 
        @if(isset($order))
        | <a href="{{ url('kelola/order') }}" class="btn btn-primary">Kembali</a>
        @endif
    </center>
</div>