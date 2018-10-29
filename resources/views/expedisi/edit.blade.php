@extends('layouts.admin')
@section('content')

<section class="content">
		<div class="row">
			<div class="container">
				<div class="col-md-12">
					<div class="box box-primary">
						<div class="box box-primary">
							<div class="box-header">
								<p class="box-title" style="font-size:25px">Edit Data Expedisi</p>
								<a class="fa fa-arrow-circle-left box-title pull-right btn btn-info" href="{{route('expedisi.index')}}"> Kembali</a>
							</div>
						</div>
				<!-- /.box-header -->
				
				<!-- form start -->
				<div class="box-body">
					<form action="{{ route('expedisi.update',$expedisi->id) }}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{ csrf_field() }}
							
							<div class="form-group row">
								<label for="no_transaksi" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Transaksi') }}</label>
								
								<div class="col-md-6">
									<input id="no_transaksi" type="text" class="form-control{{ $errors->has('no_transaksi') ? ' is-invalid' : '' }}" name="no_transaksi" value="{{ $expedisi->no_transaksi }}" >
									@if ($errors->has('no_transaksi'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('no_transaksi') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="kampus_id" class="col-md-4 col-form-label text-md-right">{{ __('Kampus') }}</label>
								
								<div class="col-md-6">
									<select name="kampus_id" class="form-control">
										@foreach($kampus as $data)
										<option value="{{ $data->id}}" {{$kampusa == $data->id ? 'selected="selected"' : '' }}>{{$data->kode_kampus}}</option>
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
								<label for="tgl" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal') }}</label>
								
								<div class="col-md-6">
									<input id="tgl" type="date" class="form-control{{ $errors->has('tgl') ? ' is-invalid' : '' }}" name="tgl" value="{{ $expedisi->tgl }}" >
									@if ($errors->has('tgl'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('tgl') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="waktu" class="col-md-4 col-form-label text-md-right">{{ __('Waktu') }}</label>
								
								<div class="col-md-6">
									<input id="waktu" type="time" class="form-control{{ $errors->has('waktu') ? ' is-invalid' : '' }}" name="waktu" value="{{ $expedisi->waktu }}" >
									@if ($errors->has('waktu'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('waktu') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
									<label for="barang_id" class="col-md-4 col-form-label text-md-right">{{ __('Barang') }}</label>
									
									<div class="col-md-6">
										<select name="barang_id" class="form-control">
											@foreach($barang as $data)
											<option value="{{ $data->id}}" {{$baranga == $data->id ? 'selected="selected"' : '' }}>{{$data->nama_barang}}</option>
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
								<label for="jumlah" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah') }}</label>
								
								<div class="col-md-6">
									<input id="jumlah" type="text" class="form-control{{ $errors->has('jumlah') ? ' is-invalid' : '' }}" name="jumlah" value="{{ $expedisi->jumlah }}" >
									@if ($errors->has('jumlah'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('jumlah') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
								
								<div class="col-md-6">
									<input id="status" type="text" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="{{ $expedisi->status }}" >
									@if ($errors->has('status'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('status') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>
								
								<div class="col-md-6">
									<input id="deskripsi" type="text" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" value="{{ $expedisi->deskripsi }}" >
									@if ($errors->has('deskripsi'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('deskripsi') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>
								
								<div class="col-md-6">
									<input id="harga" type="text" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" value="{{ $expedisi->harga }}" >
									@if ($errors->has('harga'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('harga') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="pengirim" class="col-md-4 col-form-label text-md-right">{{ __('Pengirim') }}</label>
								
								<div class="col-md-6">
									<input id="pengirim" type="text" class="form-control{{ $errors->has('pengirim') ? ' is-invalid' : '' }}" name="pengirim" value="{{ $expedisi->pengirim }}" >
									@if ($errors->has('pengirim'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('pengirim') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="penerima" class="col-md-4 col-form-label text-md-right">{{ __('Penerima') }}</label>
								
								<div class="col-md-6">
									<input id="penerima" type="text" class="form-control{{ $errors->has('penerima') ? ' is-invalid' : '' }}" name="penerima" value="{{ $expedisi->penerima }}" >
									@if ($errors->has('penerima'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('penerima') }}</strong>
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
				
