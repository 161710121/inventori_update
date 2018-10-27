@extends('layouts.admin')
@section('content')

<section class="content">
        <div class="row">
            <div class="container">
                <div class="col-md-11">
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title" style="font-size:20px; margin-bottom:1%">Data Barang Rusak</h3><br>
                            <a class="fa fa-plus box-title btn btn-info" href="{{route('barangrusak.create')}}"> Tambah</a>
                        </div>

               <div class="box-body table-responsive">
                  <table class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th style="text-align: center;">No</th>
                           <th style="text-align: center;">KODE BARANG</th>
                           <th style="text-align: center;">NAMA BARANG</th>
                           <th style="text-align: center;">STATUS KERUSAKAN</th>
                           <th style="text-align: center;">TANGGAL PERBAIKAN</th>
                           <th colspan="3" style="text-align: center;">ACTION</th>
                        </tr>
                     </thead>
                     <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($barangrusak as $data)
                        <tr>
                           <td style="text-align: center;">{{ $no++ }}</td>
                           <td style="text-align: center;">{{ $data->Barang->kode_barang }}</td>
                           <td style="text-align: center;">{{ $data->Barang->nama_barang }}</td>
                           <td style="text-align: center;">{{ $data->status_kerusakan }}</td>
                           <td style="text-align: center;">{{ $data->tgl_perbaikan }}</td>
                           <td style="text-align: center;">
                              <a href="{{ route('barangrusak.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                           </td>
                           <td style="text-align: center;">
                              <form action="{{ route('barangrusak.destroy', $data->id) }}" method="post">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <input type="hidden" name="_method" value="DELETE">
                                 <button type="submit" class="btn btn-danger" onClick="return confirm('Are You Absolutely Sure You Want to Delete the Data?')">Delete</button>
                              </form>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
			</div>
		</div>
	</div>
</section>
@endsection