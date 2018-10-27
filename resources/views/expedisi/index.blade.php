@extends('layouts.admin')
@section('content')
<section class="content">
   <div class="row">
      <div class="container">
         <div class="col-md-11">
            <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title" style="font-size:20px; margin-bottom:1%">Data Expedisi</h3>
                  <br>
                  <a class="fa fa-plus box-title btn btn-info" href="{{route('expedisi.create')}}"> Tambah</a>
			   </div>
			   
               <div class="card-body table-responsive p-0">
                  <table style="table-layout:auto" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th style="text-align: center;">No</th>
                           <th style="text-align: center;">NOMOR TRANSAKSI</th>
                           <th style="text-align: center;">KAMPUS</th>
                           <th style="text-align: center;">TANGGAL</th>
                           <th style="text-align: center;">WAKTU</th>
                           <th style="text-align: center;">BARANG</th>
                           <th style="text-align: center;">JUMLAH</th>
                           <th style="text-align: center;">STATUS</th>
                           <th style="text-align: center;">DESKRIPSI</th>
                           <th style="text-align: center;">HARGA</th>
                           <th style="text-align: center;">PENGIRIM</th>
                           <th style="text-align: center;">PENERIMA</th>
                           <th colspan="3" style="text-align: center;">ACTION</th>
                        </tr>
					 </thead>
					 
                     <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($expedisi as $data)
                        <tr>
                           <td style="text-align: center;">{{ $no++ }}</td>
                           <td style="text-align: center;">{{ $data->no_transaksi }}</td>
                           <td style="text-align: center;">{{ $data->Kampus->kode_kampus }}</td>
                           <td style="text-align: center;">{{ $data->tgl }}</td>
                           <td style="text-align: center;">{{ $data->waktu }}</td>
                           <td style="text-align: center;">{{ $data->Barang->nama_barang }}</td>
                           <td style="text-align: center;">{{ $data->jumlah }}</td>
                           <td style="text-align: center;">{{ $data->status }}</td>
                           <td style="text-align: center;">{{ $data->deskripsi }}</td>
                           <td style="text-align: center;">{{ $data->harga }}</td>
                           <td style="text-align: center;">{{ $data->pengirim }}</td>
                           <td style="text-align: center;">{{ $data->penerima }}</td>
                           <td style="text-align: center;">
                              <a href="{{ route('expedisi.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                           </td>
                           <td style="text-align: center;">
                              <form action="{{ route('expedisi.destroy', $data->id) }}" method="post">
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