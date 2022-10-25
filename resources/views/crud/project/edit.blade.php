@section('title', 'Edit Project')
@extends('admin.admin')
@section('content-title', 'Halaman Edit Project')
@section('content')


@if (count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif
<div class="card mb-4 text-center fw-bold text-primary">
    <div class="card-header">
        Edit Project
    </div>
    <div class="card-body">
    	<form method="post" action="{{ route('project.update', $data->id) }}" class="row g-3">
    		@csrf
    		{{method_field('PUT')}}
	  <div class="col-md-12">
	    <label for="judul_project" class="form-label">Nama Project</label>
	    <input type="text" value="{{$data->nama_project}}" name="nama_project" class="form-control" id="judul_project">
	  </div>
	  <div class="col-md-12">
	    <label for="inputPassword4" class="form-label">Deskripsi</label>
	    <input type="text"  value="{{$data->deskripsi}}" name="deskripsi" class="form-control" id="inputPassword4">
	  </div>
	  <div class="col-4">
	    <label for="inputAddress2" class="form-label">Tanggal</label>
	    <input type="date" value="{{$data->tanggal}}" name="tanggal" class="form-control" id="inputAddress2" >
	  </div>
	  </div>             
	  <div class="col-12 d-flex flex-flow-reverse mb-4	">
			<input type="submit" class="px-5 btn btn-success mr-3" value="update">
	    	<a href="{{ route('project.index') }}" class="px-5 btn btn-danger">cancel</a>
	  </div>
	</form>           	
</div>
    

@endsection