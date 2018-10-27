@extends('layouts.admin')
@section('content')
	
<section class="content">
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="box">
					<div class="box box-primary">
						<div class="box-header">
							<p class="box-title" style="font-size:25px">Tambah Data Tanda Terima</p>
							<a class="fa fa-arrow-circle-left box-title pull-right btn btn-info" href="{{route('tandaterima.index')}}"> Kembali</a>
						</div>
					</div>
				<!-- /.box-header -->

				<!-- form start -->
				<div class="box-body">
					<form action="{{ route('tandaterima.store') }}" method="post">
						{{ csrf_field() }}

						<div class="form-group row">
							<label for="nomor" class="col-md-4 col-form-label text-md-right">{{ __('Nomor') }}</label>

							<div class="col-md-6">
								<input id="nomor" type="text" class="form-control{{ $errors->has('nomor') ? ' is-invalid' : '' }}" name="nomor" value="{{ old('nomor') }}" required autofocus>
								@if ($errors->has('nomor'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('nomor') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="tgl" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal') }}</label>
							
							<div class="col-md-6">
								<input id="tgl" type="date" class="form-control{{ $errors->has('tgl') ? ' is-invalid' : '' }}" name="tgl" value="{{ old('tgl') }}" required autofocus>
								@if ($errors->has('tgl'))
								<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('tgl') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group row">
							<label for="kampus_id" class="col-md-4 col-form-label text-md-right">{{ __('Kampus') }}</label>
							
							<div class="col-md-6">
								<select name="kampus_id" class="form-control">
									@foreach($kampus as $a)
									<option value="{{ $a->id}}">{{$a->nama_kampus}}</option>
									@endforeach
								</select>
								
								@if ($errors->has('kampus_id'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('kampus_id') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group row">
							<label for="barang_id" class="col-md-4 col-form-label text-md-right">{{ __('Barang') }}</label>
							
							<div class="col-md-6">
								<select name="barang_id" class="form-control">
									@foreach($barang as $a)
									<option value="{{ $a->id}}">{{$a->nama_barang}}</option>
									@endforeach
								</select>
								
								@if ($errors->has('barang_id'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('barang_id') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group row">
							<label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>
							
							<div class="col-md-6">
								<input id="deskripsi" type="text" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" value="{{ old('deskripsi') }}" required autofocus>
								@if ($errors->has('deskripsi'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('deskripsi') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="menerima" class="col-md-4 col-form-label text-md-right">{{ __('Menerima') }}</label>
							
							<div class="col-md-6">
								<input id="menerima" type="text" class="form-control{{ $errors->has('menerima') ? ' is-invalid' : '' }}" name="menerima" value="{{ old('menerima') }}" required autofocus>
								@if ($errors->has('menerima'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('menerima') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group row">
							<label for="menyerahkan" class="col-md-4 col-form-label text-md-right">{{ __('Menyerahkan') }}</label>
							
							<div class="col-md-6">
								<input id="menyerahkan" type="text" class="form-control{{ $errors->has('menyerahkan') ? ' is-invalid' : '' }}" name="menyerahkan" value="{{ old('menyerahkan') }}" required autofocus>
								@if ($errors->has('menyerahkan'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('menyerahkan') }}</strong>
								</span>
								@endif
							</div>
						</div>

						
						<div class="form-group row">
							<label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
							
							<div class="col-md-6">
								<input id="status" type="text" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="{{ old('status') }}" required autofocus>
								@if ($errors->has('status'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('status') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<!-- /.box-body -->
						
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
@endsection