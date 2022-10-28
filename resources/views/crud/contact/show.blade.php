@if ($kontaks->isEmpty())
	<p class="fs-3">Tidak punya Kontak</p>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">daftar kontak {{$data->nama}}</h6>
    </div>
    <div id="kontak" class="card-body">
    		@foreach ($kontaks as $kontak)
    			<p class="fw-bold fst-normal">
					</i>{{$kontak->jenis->jenis_kontak}} : {{$kontak->deskripsi}}
				</p>
    		@endforeach
    </div>
</div>