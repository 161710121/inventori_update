@extends('layouts.admin')
@section('content')
<section class="content">
   <div class="row">
      <div class="container">
         <div class="box box-primary">
            <div class="box-header">

               <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box" style="background-color:burlywood">
                     <div class="inner">
                        <h3>{{ $kate }}</h3>
                        <h4><b>Kategori</b></h4>
                     </div>
                     <div class="icon">
                        <i class="fa fa-fw fa-asterisk"></i>
                     </div>
                     <a href="{{ route('kategori.index') }}" class="small-box-footer">Go To <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
               </div>
               <!-- ./col -->
               
               <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box" style="background-color:darkgoldenrod">
                     <div class="inner">
                        <h3>{{ $jns }}</h3>
                        <h4><b>Jenis Ruangan</b></h4>
                     </div>
                     <div class="icon">
                        <i class="fa fa-fw fa-map"></i>
                     </div>
                     <a href="{{ route('ruangjns.index') }}" class="small-box-footer">Go To <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
               </div>
               <!-- ./col -->

               <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box" style="background-color:plum">
                     <div class="inner">
                        <h3>{{ $kam }}</h3>
                        <h4><b>Kampus</b></h4>
                     </div>
                     <div class="icon">
                        <i class="fa fa-fw fa-bank"></i>
                     </div>
                     <a href="{{ route('kampus.index') }}" class="small-box-footer">Go To <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
               </div>
               <!-- ./col -->

               <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box" style="background-color:chocolate">
                     <div class="inner">
                        <h3>{{ $bar }}</h3>
                        <h4><b>Barang</b></h4>
                     </div>
                     <div class="icon">
                        <i class="fa fa-fw fa-dropbox"></i>
                     </div>
                     <a href="{{ route('barang.index') }}" class="small-box-footer">Go To <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
               </div>
               <!-- ./col -->

               <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box" style="background-color:khaki">
                     <div class="inner">
                        <h3>{{ $rua }}</h3>
                        <h4><b>Ruangan</b></h4>
                     </div>
                     <div class="icon">
                        <i class="fa fa-fw fa-map-o"></i>
                     </div>
                     <a href="{{ route('ruangan.index') }}" class="small-box-footer">Go To <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
               </div>
               <!-- ./col -->
               
               <div class="col-lg-4 col-6">
                   <!-- small box -->
                   <div class="small-box" style="background-color:darksalmon">
                     <div class="inner">
                         <h3>{{ $ex }}</h3>
                         <h4><b>Expedisi</b></h4>
                     </div>
                     <div class="icon">
                         <i class="fa fa-fw fa-book"></i>
                     </div>
                     <a href="{{ route('expedisi.index') }}" class="small-box-footer">Go To <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box" style="background-color:dodgerblue">
                            <div class="inner">
                                <h3>{{ $tan }}</h3>
                                <h4><b>Tanda Terima</b></h4>
                            </div>
                            <div class="icon">
                                <i class="fa fa-fw fa-sticky-note"></i>
                            </div>
                            <a href="{{ route('tandaterima.index') }}" class="small-box-footer">Go To <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box" style="background-color:firebrick">
                            <div class="inner">
                        <h3>{{ $rus }}</h3>
                        <h4><b>Barang Rusak</b></h4>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-wrench"></i>
                    </div>
                    <a href="{{ route('barangrusak.index') }}" class="small-box-footer">Go To <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            
            <div class="col-lg-4 col-6">
               <!-- small box -->
               <div class="small-box" style="background-color:darkgray">
                  <div class="inner">
                     <h3>{{ $us }}</h3>
                     <h4><b>User</b></h4>
                  </div>
                  <div class="icon">
                     <i class="fa fa-user"></i>
                  </div>
                  <a href="{{ route('user.index') }}" class="small-box-footer">Go To <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <!-- ./col -->

            </div>

            <div class="box box-footer">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header">Dashboard</div>
                        <div class="card-body">
                           @if (session('status'))
                           <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                           </div>
                           @endif
                           You are logged in as {{ Auth::user()->name }}!
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>
@endsection