@section('title', 'Master Contact')
@extends('admin.admin')
@section('content-title','Master Contact')
@section('content')
	
	<div class="row">
		@if (session('status'))
		    <div class="alert alert-success">
		        {{ session('status') }}
		    </div>
		@endif
		<div class="col-lg-4">
			<div class="card shadow mb-4">
			    <div class="card-header py-3">
			        <h6 class="m-0 font-weight-bold text-primary text-center">Daftar Siswa</h6>
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


					       	<th scope="row">{{$i+1}}</th>
					  		<td>{{$item->nisn}}</td>
					  		<td>{{$item->nama}}</td>
					  		<td class="d-flex justify-content-center">
					  			<a  onclick="show1({{$item->id}})" class="btn btn-primary  mr-1 btn-sm"><i class="bi bi-person-badge"></i></a>
					  			<a href="{{ route('contact.created', $item->id) }}" class="btn btn-success  mr-1 btn-sm "><i class="fas fa-plus"></i></a>
					  		</td>
					    </tr>	
					       @endforeach
					  </tbody>
		        	</table>
		    	</div>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="card shadow mb-4">
			    <div class="card-header py-3">
			        <h6 class="m-0 font-weight-bold text-primary text-center">Daftar Siswa</h6>
			    </div>
			    <div id="kontak" class="text-center card-body">
			    	<h6 class="text-center">PILIH SISWA TERLEBIH DAHULU</h6>
			    </div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@endsection