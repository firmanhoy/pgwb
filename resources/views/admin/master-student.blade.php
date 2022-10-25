@section('title', 'Master Siswa')
@extends('admin.admin')
@section('content-title','Master siswa')
@section('content')

	{{-- <a class="btn btn-success ml-3" href="{{ route('student.create') }}">Tambah data</a> --}}
	<div class="col-lg-12">
		@if (session('status'))
		    <div class="alert alert-success">
		        {{ session('status') }}
		    </div>
		@endif
		<div class="card mb-4">
			<a class="btn btn-success" href="{{ route('student.create') }}">Tambah data</a>
	        <div class="card-header">
	            <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-center">
	            	Data Siswa
	            </h6>
	        </div>
	        <div class="card-body">
	        	<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">No.</th>
				      <th scope="col">Alamat</th>
				      <th scope="col">Jenis Kelamin</th>
				      <th scope="col">email</th>
				     {{--  <th scope="col">About</th> --}}
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>

				  	@foreach ($data as $i => $item)
				  	<tr>

				      <th scope="row">{{$i++}}</th>
				      <td>{{$item->nama}}</td>
				      <td>{{$item->jk}}</td>
				      <td>{{$item->email}}</td>
				 {{--      <td>{{$item->about}}</td> --}}b
				      <td class="d-flex justify-content-center">
				      	<a href="{{ route('student.show', $item->id) }}" class="btn btn-info btn-circle mr-1 "><i class="bi bi-info-circle"></i></a>
				      	<a href="{{ route('student.edit', $item->id) }}" class="btn btn-warning btn-circle mr-1 "><i class="bi bi-pencil-fill" aria-hidden="true"></i></a>
				      	<a href="{{ route('student.hapus', $item->id) }}" class="btn btn-danger btn-circle mr-1 "><i class="bi bi-trash3-fill" aria-hidden="true"></i></a>
				      </td>
				    </tr>
				  	@endforeach
				    
				  </tbody>
	        	</table>
			</div>
		</div>
	</div>


@endsection
