<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.master')
@section('content-wrapper')

    <div class="container">
        <div class="card border-0 shadow-sm mt-3">
            <h1 class="card-header bg-info text-white py-3">Quick Information</h1>
            <div class="card-body">
                <div class="row justify-content-around">
                    <div class="col-md-3 display-grid text-center bg-warning shadow-sm px-5 py-3 rounded-pill my-3">
                        <h3 class="card-title text-white pb-2"><span class="fs-3 fw-bold">{{$counts}}</span> {{$counts < 2 ? 'Package':'Packages'}} </h3>
                        <div class="d-flex gap-2 text-center m-auto">
                            <span class="card-text rounded-pill badge bg-success pulse">{{$active}}</span>
                            <span class="card-text rounded-pill badge bg-secondary pulse">{{$counts - $active}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 display-grid  text-center bg-primary shadow-sm px-5 py-3 rounded-pill my-3">
                        <h3 class="card-title text-white pb-2">Total Incomes</h3>
                        <p class="card-text text-white fs-3"><span class="fs-1 fw-bold text-white">{{$total_incomes}}</span> $</p>
                    </div>
                    <div class="col-md-3 display-grid text-center shadow-sm px-5 py-3 rounded-pill my-3 bnfsg-color">
                        <h3 class="card-title text-white pb-2">Assigned</h3>
                        <p class="card-text text-white fs-3"><span class="fs-1 fw-bold">{{$assigned}}</span> {{$assigned <= 2 ? 'Client': 'Clients'}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative">
    @if(bouncer()->hasPermission('settings.front-setting.package.add'))
    <div class="position-absolute bottom-0 end-0">
        <a class="btn btn-primary rounded-circle" href="{{route('package.get.add.form')}}" role="button"><i class="icon plus-white-icon"></i></a>
    </div>
    @endif
    <div class="container">
        @if($packages->isEmpty())
            <div class="mt-lg-5">
                <div class="text-center">
                    <img
                        class="w-25 h-25"
                        src="
                            {{asset('/vendor/webkul/admin/assets/images/empty-table-icon.svg')}}
                        "
                    />

                    <p class="mt-5">No Records Found</p>
                </div>
            </div>
        @endif
        <div class="mt-5">
            @foreach($packages as $pack)
            <div class="card my-2 shadow-card position-relative {{$pack->status == 0 ? 'bg-transparent':'bg-white'}}" style="min-width: 18rem;">
                  <span class="position-absolute translate-middle p-2 border border-light rounded-circle {{$pack->status == 1 ? 'online-color pulse':'bg-secondary'}}" style="top: 11%; left: 98%;">
                    <span class="visually-hidden">Status</span>
                  </span>

                <div class="card-body">
                    <div class="card-title row">
                        <h3 class="font-weight-bold col-md-10 text-capitalize fs-2">
                            {{$pack->name}}
                            <span class="badge rounded-pill {{$pack->clients->count() > 0 ? 'bnfsg-color':'badge-danger' }}">{{$pack->clients->count()}} {{$pack->clients->count() > 1 ? 'Clients':'Client'}}</span>
                        </h3>
                        <h5 class="col-md-2">
                            @if($pack->clients->count() > 0)
                            <span class="badge bg-primary rounded-pill">{{$pack->clients->count() * $pack->price}} $</span>
                            @endif
                        </h5>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h6 class="card-subtitle mb-2 text-muted">$ {{$pack->price}}</h6>
                            <p class="card-text fs-6 text-muted" style="min-height: 43px;">{{$pack->description}}.</p>
                        </div>
                        <div class="col-md-1">
                            <h6 class="card-subtitle mb-2 text-muted">{{$pack->type_value}} {{$pack->type_label}}s</h6>
                        </div>
                        <div class="col-md-6">
                            <h1 class="position-relative fs-3">Items
                                <span class="fs-13 position-absolute top-0 start-30 badge rounded-pill bg-info">
                                 {{$pack->items()->count()}}
                                </span>
                            </h1>
                            <div class="">
                                <ul class="d-flex fs-18">
                                @foreach($pack->items as $item)
                                    <li class="mx-1 fs-13 text-capitalize badge rounded-pill {{$item->value === 'duration'? 'badge-warning-outline':'badge-primary-outline'}}">{{$item->label}}</li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('package.get.edit.form',$pack->id)}}" class="card-link"><span class="badge bg-info fw-light">Edit</span></a>
                    <a class="card-link cursor-pointer" data-bs-toggle="modal" data-bs-target="#Modal{{$pack->id}}"><span class="badge bg-danger fw-light">Delete</span></a>
                </div>
            </div>
                <!-- Modal -->
                <div class="modal fade" id="Modal{{$pack->id}}" tabindex="-1" aria-labelledby="Modal{{$pack->id}}Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fs-3" id="Modal{{$pack->id}}Label">Delete Action</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are You Sure That you Want To Delete !!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="{{route('package.delete',$pack->id)}}" type="button" class="btn btn-danger-outline">Delete</a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
    </div>
</div>
    </div>
@stack('child-scripts')
@push('css')
    <style>
        .bnfsg-color{background-color: #6f31ad;}
        .yellow-color{background-color: #ffc800;}
        .red-color{background-color: #ed1b24;}
        .online-color{background-color: rgba(47, 255, 0, 0.84);}

        .fs-13{font-size: 13px;}
        .pulse {
            overflow: visible;
            position: relative;
        }
        .pulse:before {
            content: '';
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: inherit;
            border-radius: inherit;
            transition: opacity .3s, transform .3s;
            animation: pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;
            z-index: -1;
        }
        .shadow-card{
            transition: all ease-in-out 0.2s ;
        }
        .shadow-card:hover{
            transition-delay: 150ms;
            transform: scale(1.1);
            z-index: 2;
            box-shadow: 0px 18px 9px -7px rgba(0,0,0,0.1);
        }
        @keyframes pulse-animation {
            0% {
                opacity: 1;
                transform: scale(1);
            }
            50% {
                opacity: 0;
                transform: scale(1.5);
            }
            100% {
                opacity: 0;
                transform: scale(1.5);
            }
        }
    </style>

@endpush

@endsection
