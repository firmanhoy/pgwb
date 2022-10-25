@section('title', 'Master Project')
@extends('admin.admin')
@section('content-title','Master Project')
@section('content')
	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
	<div class="row">
		<div class="col-lg-4">
			<div class="card shadow mb-4">
		        <div class="card-header">
		            <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-center">
		            	Data Siswa
		            </h6>
		        </div>
		        <div class="card-body">
		        	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">NO.</th>
					      <th scope="col">NISN</th>
					      <th scope="col">NAMA</th>
					      <th scope="col">ACTION</th>
					    </tr>
					  </thead>
					  <tbody>
					       @foreach ($data as $i => $item)
					  	<tr>


					       	<th scope="row">{{$i++}}</th>
					  		<td>{{$item->nisn}}</td>
					  		<td>{{$item->nama}}</td>
					  		<td class="d-flex justify-content-center">
					  			<a  onclick="show({{$item->id}})" class="btn btn-info  mr-1 btn-sm"><i class="fas fa-folder-open"></i></a>
					  			<a href="{{ route('project.created', $item->id) }}" class="btn btn-success  mr-1 btn-sm "><i class="fas fa-plus"></i></a>
					  		</td>
					    </tr>	
					       @endforeach
					  </tbody>
		        	</table>
				</div>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="card mb-4 shadow">
		        <div class="card-header">
		            <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-center">
		            	PROJECT SISWA
		            </h6>
		        </div>
		        <div id="project" class="card-body">
		        	<h6 class="text-center">PILIH SISWA TERLEBIH DAHULU</h6>
		        </div>
			</div>
		</div>
	</div>
@endsection
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>