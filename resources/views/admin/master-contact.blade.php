@section('title', 'Master Contact')
@extends('admin.admin')
@section('content-title','Master Contact')
@section('content')
	
	<div class="row">
		<div class="col-lg-4">
			<div class="card shadow mb-4">
			    <div class="card-header py-3">
			        <h6 class="m-0 font-weight-bold text-primary text-center">Daftar Siswa</h6>
			    </div>
			    <div class="card-body">
			    	<div class="row">
			    		<table>
			    			<tbody>
				    			@foreach ($data as $i => $item)
							  		<td>{{$item->nama}}</td>
							  		<td class="d-flex justify-content-center">
							  			<a  onclick="show1({{$item->id}})" class="btn btn-info  mr-1 btn-sm"><i class="fas fa-folder-open"></i></a>
							  			<a href="{{ route('project.created', $item->id) }}" class="btn btn-success  mr-1 btn-sm "><i class="fas fa-plus"></i></a>
							  		</td>
							    </tr>
					    		@endforeach
			    			</tbody>
			    		</table>
			    	</div>
		    	</div>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="card shadow mb-4">
			    <div class="card-header py-3">
			        <h6 class="m-0 font-weight-bold text-primary text-center">Daftar Siswa</h6>
			    </div>
			    <div id="kontak" class="card-body">
			    		
			    </div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@endsection