@section('title', 'Edit Student')
@extends('admin.admin')
@section('content-title','Edit Student')
@section('content')
		<div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-center ">Form input siswa</h6>
            </div>
            <div class="card-body">
            	@if (count($errors)>0)
            		<div class="alert alert-danger">
            			<ul>
            				@foreach ($errors->all() as $error)
            					<li>{{$error}}</li>
            				@endforeach
            			</ul>
            		</div>
            	@endif
                <form class="row g-3" enctype="multipart/form-data" method="post" action="{{ route('student.update', $data->id) }}">
                	@csrf
                	{{method_field('PUT')}}
				  <div class="col-md-6">
				    <label for="nama" class="form-label teks">Nama</label>
				    <input type="text" class="form-control" id="nama" value="{{$data->nama}}" name="nama">
				  </div>
				  <div class="col-md-6">
				    <label for="nisn" class="form-label teks">Nisn</label>
				    <input type="text" class="form-control" id="nisn" placeholder="0026xxxxxx" 
				    value="{{$data->nisn}}" name="nisn">
				  </div>
				  <div class="col-md-12">
				    <label for="email" class="form-label teks">Email</label>
				    <input type="text" class="form-control" id="email" placeholder="Example@" 
				    value="{{$data->email}}" name="email">
				  </div>
				  {{-- <div class="col-md-3">
				    <label for="password" class="form-label teks">Password</label>
				    <input type="password" class="form-control" id="password" value="{{$data->'')}}" name="password">
				  </div> --}}	
				  <div class="col-12">
				    <label for="alamat" class="form-label teks">Alamat</label>
				    <input type="text" class="form-control" id="alamat" placeholder="Jl. Ini sungguh indah" value="{{$data->alamat}}" name="alamat">
				  </div>
				  	<div class=" col-3 fileform justify-content-end">
					  <label for="foto" class="form-label teks">Masukan Foto Profi</label>
					  <input class="form-control" type="file" id="foto" value="{{$data->profile}}" name="foto">
					</div>	
				  <div class="col-md-4">
				    <label for="jk" class="form-label teks">Jenis Kelamin</label>
				    <select id="jk" class="form-select" value="{{$data->jk}}" name="jk">
					    <option value="Pria" @if ($data->jk == 'Pria') selected @endif>Pria</option>
					    <option value="Wanita" @if ($data->jk == 'Wanita') selected @endif>Wanita</option>
				    </select>
				  </div>
				  <div class="card-body">
				  	<div class="float-start">
				  		<p class="fs-6-text"> Foto sebelumnya</p>
				  		<img src="{{ asset('/assets/img/'.$data->foto) }}" alt="" width="300px" class="rounded-circle img-thumbnail">
					  {{-- <img src="{{ asset('/assets/img/'.$data->foto) }}" width="200px" height="100px" class="rounded" alt="..."> --}}
					</div>
				  </div>
				  	<div class="col-md-12">
					 {{--  <textarea placeholder="{{$data->about}}" class="form-control"  id="about" name="about" style="height: 150px"></textarea>
					  <label for="about" name="about">About</label> --}}

					<label for="about" class="form-label teks">About</label>	
				    <input type="text" class="form-control" id="about"  value="{{$data->about}}" name="about">
					</div>
					<div class="col-12">
						<input type="submit" class="btn btn-success" value="save">
				    	<a href="{{ route('student.index') }}" class="btn btn-danger">cancel</a>
				  </div>
				</form>
            </div>
        </div>
		

@endsection