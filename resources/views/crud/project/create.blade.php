@section('title', 'Create Project')
@extends('admin.admin')
@section('content-title', 'Halaman Create Project')
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
        Create Project
    </div>
    <div class="card-body">
    	<form method="post" action="{{ route('project.store') }}" class="row g-3">
    		@csrf
	  <div class="col-md-12">
	    <label for="judul_project" class="form-label">Nama Project</label>
	    <input type="text" value="{{old('nama_project')}}" name="nama_project" class="form-control" id="judul_project">
	  </div>
	  <div class="col-md-12">
	    <label for="inputPassword4" class="form-label">Deskripsi</label>
	    <input type="text"  value="{{old('deskripsi')}}" name="deskripsi" class="form-control" id="inputPassword4">
	  </div>
	  <div class="col-4">
	    <label for="inputAddress2" class="form-label">Tanggal</label>
	    <input type="date" value="{{old('tanggal')}}" name="tanggal" class="form-control" id="inputAddress2" >
	  </div>
	  </div>             
	  <div class="col-4">
	    <label for="inputAddress" class="form-label"></label>
	    <input type="hidden" name="siswa_id" value="{{$siswas->id}}" class="form-control" id="inputAddress" placeholder="1234 Main St">
	  </div>
	  <div class="col-12 d-flex flex-flow-reverse mb-4	">
			<input type="submit" class="px-5 btn btn-success mr-3" value="save">
	    	<a href="{{ route('project.index') }}" class="px-5 btn btn-danger">cancel</a>
	  </div>
	</form>           	
</div>
    

@endsection