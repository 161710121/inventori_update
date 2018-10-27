@extends('layouts.admin')
@section('content')
<section class="content">
   <div class="row">
      <div class="container">
         <div class="col-md-12">
            <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title" style="font-size:20px; margin-bottom:1%">Data Ruangan</h3>
                  <br>
                  <a class="fa fa-plus box-title btn btn-info" href="{{route('ruangan.create')}}"> Tambah</a>
               </div>
               <div class="box-body table-responsive p-0">
                  <table style="table-layout:auto" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th style="text-align: center;">No</th>
                           <th style="text-align: center;">KODE RUANGAN</th>
                           <th style="text-align: center;">DESKRIPSI</th>
                           <th style="text-align: center;">UKURAN PANJANG</th>
                           <th style="text-align: center;">UKURAN LEBAR</th>
                           <th style="text-align: center;">UKURAN TINGGI</th>
                           <th style="text-align: center;">STATUS PENGGUNAAN</th>
                           <th style="text-align: center;">BARANG</th>
                           <th style="text-align: center;">JENIS RUANGAN</th>
                           <th style="text-align: center;">KAMPUS</th>
                           <th colspan="3" style="text-align: center;">ACTION</th>
                        </tr>
                     </thead>
                     <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($ruangan as $data)
                        <tr>
                           <td style="text-align: center;">{{ $no++ }}</td>
                           <td style="text-align: center;">{{ $data->kode_ruangan }}</td>
                           <td style="text-align: center;">{{ $data->deskripsi }}</td>
                           <td style="text-align: center;">{{ $data->ukuran_panjang }}</td>
                           <td style="text-align: center;">{{ $data->ukuran_lebar }}</td>
                           <td style="text-align: center;">{{ $data->ukuran_tinggi }}</td>
                           <td style="text-align: center;">{{ $data->status_penggunaan }}</td>
                           <td style="text-align: center;">{{ $data->Barang->kode_barang }}</td>
                           <td style="text-align: center;">{{ $data->Jenis_Ruangan->kode_jenis_ruangan }}</td>
                           <td style="text-align: center;">{{ $data->Kampus->kode_kampus }}</td>
                           <td style="text-align: center;">
                              <a href="{{ route('ruangan.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                           </td>
                           <td style="text-align: center;">
                              <form action="{{ route('ruangan.destroy', $data->id) }}" method="post">
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