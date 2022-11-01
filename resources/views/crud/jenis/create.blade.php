@section('title', 'Create Jenis Kontak')
@extends('admin.admin')
@section('content-title','Create Jenis Kontak')
@section('content')
		<div class="card shadow mb-4">	
			<div class="card-body">
					<form action="{{ route('jenis.store') }}" method="post">	
						@csrf
						<div class="row">
						  <div class="col">
						  	<label for="" class="form-label">masukan medsos</label>
						    <input type="text" class="form-control " placeholder="First name" aria-label="First name" name="jenis_kontak">
						  </div>
						  <div class="col">
								<label for="exampleColorInput" class="form-label">Color picker</label>
								<input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color" name="color">
						  </div>
						</div>
						<button class="btn btn-primary mt-5" type="submit">Save</button>
					</form>				
			</div>
		</div>	
@endsection