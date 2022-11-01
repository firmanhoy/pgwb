@if ($kontaks->isEmpty())
	<img src="{{ asset('image/empty.png') }}" class="rounded mx-auto d-block" alt="...">
    <p class="ms-auto fs-4">Kontak Kosong :(</p>
    @else
    {{-- <div class="card shadow mb-4">
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
    </div> --}}
    <ol class="list-group">
        <li class="list-group-item active" aria-current="true">Daftar kontak {{$data->nama}}</li>
    </ol>
    <ol class="list-group list-group-numbered">
        @foreach ($kontaks as $kontak)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">{{$kontak->jenis->jenis_kontak}}</div>
                    {{$kontak->deskripsi}}
                </div>
                <a href="{{ route('contact.edit',$kontak->id) }}" class="btn btn-warning my-auto mr-1 btn-sm"><i class="fas fa-pen"></i></a>
                <a href="{{ route('contact.hapus', $kontak->id ) }}" class="btn btn-danger my-auto mr-1 btn-sm "><i class="fas fa-trash"></i></a>
                <a target="_blank" href="//{{$kontak->link}}" class="btn btn-outline-primary my-auto px-3">visit</a>
            </li>
        @endforeach
    </ol>
@endif
