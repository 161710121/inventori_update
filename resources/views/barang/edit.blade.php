@extends('layouts.admin')
@section('content')

<section class="content">
		<div class="row">
			<div class="container">
				<div class="col-md-12">
					<div class="box">
						<div class="box box-primary">
							<div class="box-header">
								<p class="box-title" style="font-size:25px">Edit Data Barang</p>
								<a class="fa fa-arrow-circle-left box-title pull-right btn btn-info" href="{{route('barang.index')}}"> Kembali</a>
							</div>
						</div>
				<!-- /.box-header -->
				
				<!-- form start -->
				<div class="box-body">
					<form action="{{ route('barang.update',$barang->id) }}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{ csrf_field() }}
							
							<div class="form-group row">
								<label for="kode_barang" class="col-md-4 col-form-label text-md-right">{{ __('Kode Barang') }}</label>
								
								<div class="col-md-6">
									<input id="kode_barang" type="text" class="form-control{{ $errors->has('kode_barang') ? ' is-invalid' : '' }}" name="kode_barang" value="{{ $barang->kode_barang }}" >
									@if ($errors->has('kode_barang'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('kode_barang') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="nama_barang" class="col-md-4 col-form-label text-md-right">{{ __('Nama Barang') }}</label>
								
								<div class="col-md-6">
									<input id="nama_barang" type="text" class="form-control{{ $errors->has('nama_barang') ? ' is-invalid' : '' }}" name="nama_barang" value="{{ $barang->nama_barang }}" >
									@if ($errors->has('nama_barang'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('nama_barang') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="kategori_id" class="col-md-4 col-form-label text-md-right">{{ __('Kategori') }}</label>
								
								<div class="col-md-6">
									<select name="kategori_id" class="form-control">
										@foreach($kategori as $data)
										<option value="{{ $data->id}}" {{$barangkat == $data->id ? 'selected="selected"' : '' }}>{{$data->kode_kategori}}</option>
										@endforeach
									</select>
									
									@if ($errors->has('kategori_id'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('kategori_id') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="jumlah_barang" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Barang') }}</label>
								
								<div class="col-md-6">
									<input id="jumlah_barang" type="number" class="form-control{{ $errors->has('jumlah_barang') ? ' is-invalid' : '' }}" name="jumlah_barang" value="{{ $barang->jumlah_barang }}" >
									@if ($errors->has('jumlah_barang'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('jumlah_barang') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="harga_satuan" class="col-md-4 col-form-label text-md-right">{{ __('Harga Satuan') }}</label>
								
								<div class="col-md-6">
									<input id="harga_satuan" type="text" class="form-control{{ $errors->has('harga_satuan') ? ' is-invalid' : '' }}" name="harga_satuan" value="{{ $barang->harga_satuan }}" >
									@if ($errors->has('harga_satuan'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('harga_satuan') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							
							<div class="form-group row">
								<label for="tanggal_inputan" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Inputan') }}</label>
								
								<div class="col-md-6">
									<input id="tanggal_inputan" type="date" class="form-control{{ $errors->has('tanggal_inputan') ? ' is-invalid' : '' }}" name="tanggal_inputan" value="{{ $barang->tanggal_inputan }}" >
									@if ($errors->has('tanggal_inputan'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('tanggal_inputan') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>
								
								<div class="col-md-6">
									<input id="deskripsi" type="text" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" value="{{ $barang->deskripsi }}" >
									@if ($errors->has('deskripsi'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('deskripsi') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
								
								<div class="col-md-6">
									<input id="status" type="text" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="{{ $barang->status }}" >
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
				
