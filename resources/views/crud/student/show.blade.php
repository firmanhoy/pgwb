@section('title', 'Halaman Show')
@extends('admin.admin')
@section('content-title', 'Halaman Show')
@section('content')

	<div class="row">
		<div class="col-lg-4">
			<div class="card shadow mb-4">
				<div class="card-body text-center">
					<img src="{{ asset('/assets/img/'.$data->foto) }}" alt="" class="rounded-circle img-thumbnail">
					<hr class="border border-primary border-3 opacity-75">
					<h4>{{$data->nama}}</h4>
					<h4><i class="fas fa-venus-mars"></i>{{$data->jk}}</h4>
					<h4><i class="fas fa-envelope"></i>{{$data->email}}</h4>
					<h4><i class="fas fa-map"></i>{{$data->alamat}}</h4>
				</div>
			</div>
			<div class="card shadow-mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h5 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus"></i> Kontak Siswa </h5>
				</div>
				<div class="card-body d-flex justify-content-center">
					@foreach ($kontaks as $kontak)
					<p class="fw-bold fst-normal">
						</i>{{$kontak->jenis->jenis_kontak}} : {{$kontak->deskripsi}}
					</p>
					@endforeach
				</div>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="card shadow-mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h5 class="m-0 font-weight-bold text-primary"><i class="fas fa-quote-left"></i> About {{$data->nama}} <i class="fas fa-quote-right"></i> </h5>
				</div>
				<div class="card-body">
					<p class="fs-6-text fw-normal fst-normal">{{$data->about}}</p>
				</div>
			</div>
			<div class="card shadow-mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h5 class="m-0 font-weight-bold text-primary"><i class="fas fa-file-plus"></i> Project {{$data->nama}} </h5>
				</div>
				<div class="card-body">
					
					@if ($projects->isEmpty())
					<h6 class="text-center">NO Project</h6>
				@endif
					
					@foreach ($projects as $project)
						<div class="card-body">
					    	<div class="card shadow mb-4">
						        <!-- Card Header - Accordion -->
						        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
						            <h6 class="m-0 font-weight-bold text-primary">{{$project->nama_project}}</h6>

						        </a>
						        <!-- Card Content - Collapse -->
						        <div class="collapse" id="collapseCardExample" style="">
						            <div class="card-body">
						                <h5>Tanggal Project : </h5>
						                {{$project->tanggal}}
						                <h5>Deskripsi : </h5>
						                {{$project->deskripsi}}

						            </div>
						            <div class="card-footer">
							            <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-right">
							            	<a href="" class="btn btn-warning  mr-1 btn-sm"><i class="fas fa-pen"></i></a>
							  				<a href="" class="btn btn-danger  mr-1 btn-sm "><i class="fas fa-trash"></i></a>
							            </h6>
							        </div>
						        </div>
						    </div>
						</div>
					@endforeach
	

				</div>
			</div>
		</div>
	</div>

@endsection