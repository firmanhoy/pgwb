@section('title', 'Halaman Jenis Kontak')
@extends('admin.admin')
@section('content-title','Jenis Kontak')
@section('content')
	<div class="card shadow mb-4">
		<div class="card-body">
			@if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif
			<div class="row">
				<a href="{{ route('jenis.create') }}" class="btn btn-success mb-5">Tambah data</a>
				<div class="col-lg-8">
					{{-- list --}}
					<div class="card border-secondary mb-3 shadow" style="max-width: 48rem;">
					  <div class="card-header text-center fw-bold">List Medsos</div>
					  <div class="card-body text-secondary">
					  	<div class="row">
					  		@foreach ($jenis as $item)
					  			<a href="" type="button" class="btn btn-dark border-light col-lg-2 mx-3 my-1" style="background-color:{{$item->color}}">{{$item->jenis_kontak}}</a>
					  		@endforeach
					  	</div>
					  </div>
					</div>
					{{-- endlist --}}
				</div>
				<div class="col-lg-4">
					{{-- list --}}
					<div class="card border-secondary mb-3 shadow" style="max-width: 48rem;">
					  <div class="card-header text-center fw-bold">pengguna</div>
					  <div class="card-body text-secondary">
					  		@foreach ($jenis as $item)
					  			<p type="button" class="btn btn-outline-primary">{{$item->jenis_kontak}} : {{$data->where('jenis_id',$item->id)->count()}}</p>
					  		@endforeach
					  </div>
					</div>
					{{-- endlist --}}
				</div>
			</div>
		</div>
	</div>

@endsection