@extends('layout.backend.app',[
    'title' => 'Meta Data',
    'pageTitle' => 'Meta Data'
])
@section('content')

<!-- Content Row -->
<div class="row">

    @foreach ($data as $data)
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data["judul"]}}</div>
                        <a href="/">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            {{$data["file"]}}
						</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

{{-- akhir conten --}}
</div>
@stop
{{-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Subak Selat</div>
                        <a href="/">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            pafjajfjaf.pdf
						</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div> --}}
