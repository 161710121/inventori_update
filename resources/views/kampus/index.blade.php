@extends('layouts.admin')
@section('content')
<section class="content">
   <div class="row">
      <div class="container">
         <div class="col-md-11">
            <div class="box box-info">
               <div class="box-header">
                  <h3 class="box-title" style="font-size:20px; margin-bottom:1%">Data Kampus</h3>
                  <br>
                  <a class="fa fa-plus box-title btn btn-info" href="{{route('kampus.create')}}"> Tambah</a>
               </div>
               <div class="box-body table-responsive p-0">
                  <table style="table-layout:auto" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th style="text-align: center;">No</th>
                           <th style="text-align: center;">KODE KAMPUS</th>
                           <th style="text-align: center;">NAMA KAMPUS</th>
                           <th style="text-align: center;">ALAMAT</th>
                           <th style="text-align: center;">TELEPON KAMPUS</th>
                           <th style="text-align: center;">DESKRIPSI</th>
                           <th style="text-align: center;">STATUS</th>
                           <th colspan="3" style="text-align: center;">ACTION</th>
                        </tr>
                     </thead>
                     <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($kampus as $data)
                        <tr>
                           <td style="text-align: center;">{{ $no++ }}</td>
                           <td style="text-align: center;">{{ $data->kode_kampus }}</td>
                           <td style="text-align: center;">{{ $data->nama_kampus }}</td>
                           <td style="text-align: center;">{{ $data->alamat }}</td>
                           <td style="text-align: center;">{{ $data->telp_kampus }}</td>
                           <td style="text-align: center;">{{ $data->deskripsi }}</td>
                           <td style="text-align: center;">{{ $data->status }}</td>
                           <td style="text-align: center;">
                              <a href="{{ route('kampus.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                           </td>
                           <td style="text-align: center;">
                              <form action="{{ route('kampus.destroy', $data->id) }}" method="post">
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