@section('title', 'Buat Kontak')
@extends('admin.admin')
@section('content-title', 'Halaman Create Kontak')
@section('content')

	<div class="card shadow mb-4">
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">buat kontak | {{$data->nama}}</h6>
        </div>
        <div id="kontak" class="card-body">
        	@if (session('status'))
			    <div class="alert alert-success">
			        {{ session('status') }}
			    </div>
			@endif
        	@if (count($errors)>0)
            		<div class="alert alert-danger">
            			<ul>
            				@foreach ($errors->all() as $error)
            					<li>{{$error}}</li>
            				@endforeach
            			</ul>
            		</div>
            	@endif
        	<form action="{{ route('contact.store') }}" method="post">
        		@csrf
        		<input type="hidden" value="{{$data->id}}" name="siswa_id">
        		<div class="input-group mb-3">
				<select class="form-select input-group-text col-md-2" name="jenis_id">
					<option selected>Pilih jenis kontak</option>
					@foreach ($jenis as $item)
						<option value="{{$item->id}}">{{$item->jenis_kontak}}</option>
					@endforeach
					{{-- <option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option> --}}
				</select>
				<input type="text" class="form-control" placeholder="username" value="{{old('deskripsi')}}" name="deskripsi" aria-label="Text input with dropdown button">
				<input type="text" class="form-control" placeholder="link" value="{{old('link')}}" name="link">
			</div>
				<button class="btn btn-primary" type="submit">save</button>
        	</form>
        </div>
    </div>

@endsection