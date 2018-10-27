@extends('layouts.admin')
@section('content')

<section class="content">
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box box-primary">
						<div class="box-header">
							<p class="box-title" style="font-size:25px">Edit Data Barang Rusak</p>
							<a class="fa fa-arrow-circle-left box-title pull-right btn btn-info" href="{{route('barangrusak.index')}}"> Kembali</a>
						</div>
					</div>
				<!-- /.box-header -->
				
				<!-- form start -->
				<div class="box-body">
					<form action="{{ route('barangrusak.update',$barangrusak->id) }}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{ csrf_field() }}
							
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
								<label for="status_kerusakan" class="col-md-4 col-form-label text-md-right">{{ __('Kode Barang') }}</label>
								
								<div class="col-md-6">
									<input id="status_kerusakan" type="text" class="form-control{{ $errors->has('status_kerusakan') ? ' is-invalid' : '' }}" name="status_kerusakan" value="{{ $barangrusak->status_kerusakan }}" >
									@if ($errors->has('status_kerusakan'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('status_kerusakan') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							
							<div class="form-group row">
								<label for="tgl_perbaikan" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Perbaikan') }}</label>
								
								<div class="col-md-6">
									<input id="tgl_perbaikan" type="date" class="form-control{{ $errors->has('tgl_perbaikan') ? ' is-invalid' : '' }}" name="tgl_perbaikan" value="{{ $barangrusak->tgl_perbaikan }}" >
									@if ($errors->has('tgl_perbaikan'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('tgl_perbaikan') }}</strong>
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
@endsection
				
