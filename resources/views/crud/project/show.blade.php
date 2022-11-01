@if ($data->isEmpty())
	<img src="{{ asset('image/empty.png') }}" class="rounded mx-auto d-block" alt="...">
    <p class="ms-auto fs-4">Project Kosong :(</p>
@endif
	
	@foreach ($data as $item)
		<div class="card-body" >
	    	<div class="card shadow mb-4"style="margin-top: -30px;">
		        <!-- Card Header - Accordion -->
		        <a href="#collapseCardExample" class="d-inline card-header py-3 d-flex" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
		            <h6 class="m-0 font-weight-bold text-primary">{{$item->nama_project}}</h6>
					<span class="badge rounded-pill text-bg-primary ms-auto">{{$item->tanggal}}</span>
		        </a>
		        <!-- Card Content - Collapse -->
		        <div class="collapse" id="collapseCardExample" style="">
		            <div class="card-body">
		                <h5 class="fw-bold">Tanggal Project : </h5>
		                {{$item->tanggal}}
		                <h5 class="fw-bold">Deskripsi : </h5>
		                {{$item->deskripsi}}

		            </div>
		            <div class="card-footer">
			            <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-right">
			            	<a href="{{ route('project.edit', ['project'=> $item->id
			            	]) }}" class="btn btn-warning  mr-1 btn-sm"><i class="fas fa-pen"></i></a>
			  				<a href="{{ route('project.hapus', $item->id ) }}" class="btn btn-danger  mr-1 btn-sm "><i class="fas fa-trash"></i></a>
			            </h6>
			        </div>
		        </div>
		    </div>
		</div>
	@endforeach
	