@section('title', 'Dashboard')
@extends('admin.admin')
@section('content-title','Dashboard')
@section('content')
       <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fs-6 ml-3 font-weight-bold text-primary text-uppercase mb-1">
                                	Jumlah Siswa
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 ml-3">{{$siswa}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-people fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success fs-6 ml-3 text-uppercase mb-1">
                               Jumlah Project 
                               </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 ml-3">
                                    {{$project}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-file-earmark-check fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fs-6 ml-3 font-weight-bold text-warning text-uppercase mb-1">
                                    Jumlah Kontak

                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 ml-3">{{$kontak}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-person-lines-fill fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fs-6 ml-3 font-weight-bold text-danger text-uppercase mb-1">
                                    Jenis Kontak

                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800 ml-3">{{$jenisKontak}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-at fa-3x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection