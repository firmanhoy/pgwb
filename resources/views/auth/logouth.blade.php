@extends('auth.mainAuth')
@section('name')
@section('content')
		<div class="row justify-content-center bg-danger">
			
			<div class="">
				<form action="/logout" method="post">
					@csrf
					<button class="btn btn-danger py-5" type="submit">LOGOUTT</button>
				</form>
			</div>

		</div>
@endsection