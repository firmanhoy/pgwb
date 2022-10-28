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
			    		@foreach ($data as $item)
			    			<div class="col-lg-3">
			    				@if ($item->jk == 'Pria')
									<a onclick="show({{$item->id}})" href="">
			    						<img class="img-profile rounded-circle" src="{{ asset('template/img/undraw_profile.svg') }}" alt="">
			    					</a>
			    					@else
			    					<a onclick="show({{$item->id}})" href="">
			    						<img class="img-profile rounded-circle" src="{{ asset('template/img/undraw_profile_3.svg') }}" alt="">
			    					</a>
			    				@endif
			    			</div>
			    		@endforeach
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