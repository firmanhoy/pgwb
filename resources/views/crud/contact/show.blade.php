<div class="container justify-content-center">
	<img src="{{ asset('/asset/img'. $data->foto) }}" alt="" class="img-thumbnail">
	<p class="fs-3">{{$data->foto}}</p>
</div>
@if ($kontaks->isEmpty())
	<p class="fs-3">Tidak punya Kontak</p>
@endif