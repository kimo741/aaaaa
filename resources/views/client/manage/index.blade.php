<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.master')
@section('content-wrapper')
    <div class="container">
        <div class="card mt-3">
            <h1 class="card-header bg-info text-white py-3">Quick Information</h1>
            <div class="card-body">
                <div class="row justify-content-around">
                    <div class="col-md-3 display-grid text-center bg-warning shadow-sm px-5 py-3 rounded-pill my-3">
                        <h3 class="card-title text-white pb-2"><span class="fs-3">20</span> Clients</h3>
                        <div class="d-flex gap-2 text-center">
                            <span class="card-text rounded-pill badge bg-success pulse">15</span>
                            <span class="card-text rounded-pill badge bg-secondary">8</span>
                        </div>
                    </div>
                    <div class="col-md-3 display-grid text-center bg-primary shadow-sm px-5 py-3 rounded-pill my-3">
                        <h3 class="card-title text-white pb-2">Clients With Package</h3>
                        <p class="card-text text-white fs-3"><span class="fs-1 fw-bold text-white">12</span> Clients</p>
                    </div>
                    <div class="col-md-3 display-grid text-center bg-primary shadow-sm px-5 py-3 rounded-pill my-3">
                        <h3 class="card-title text-white pb-2">Clients Not Assigned</h3>
                        <p class="card-text text-white fs-3"><span class="fs-1 fw-bold text-danger">8</span> Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="position-relative">
{{--    @if(bouncer()->hasPermission('settings.front-setting.item.add'))--}}
{{--    <div class="position-absolute bottom-0 end-0">--}}
{{--        <a class="btn btn-primary rounded-circle" href="{{route('item.get.add.form')}}" role="button"><i class="icon plus-white-icon"></i></a>--}}
{{--    </div>--}}
{{--    @endif--}}
    <div class="container">
        <div class="mt-3">
            <h1>All Clients</h1>
        </div>
        @if($clients->isEmpty())
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
        <div class="">
            <div class="row row-cols-1 mt-3 row-cols-md-3 g-4">
            @foreach($clients as $client)
                    <div class="col-md-3 mb-5">
                        <div class="card shadow-card border-0 shadow-sm" style="max-width: 250px">
                            <div class="">
                                <img src="{{asset('ui\avatar\150-1.jpg')}}" style="max-height: 250px;" class="card-img-top" alt="client image">
                            </div>
                            <div class="card-body">
                                <div class="card-title my-0 row">
                                    <div class="col-md-9">
                                        <h2 class=" mx-0 my-0">{{$client->first_name}} {{$client->last_name}}</h2>
                                        <span class="text-muted fs-13">{{$client->email}}</span>
                                    </div>
                                    <div class="col-md-3 position-relative">
                                        <span class="position-absolute translate-middle p-2 border border-light rounded-circle {{$client->status == 0 ? 'bg-sercondry':'bg-success pulse'}}" style="top: 10px; left: 80%;">
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <span class="fs-13 text-muted">phone : {{$client->phone}}</span>
                                </div>
                                <div class="d-flex justify-content-start gap-3 mt-3">
                                    <a href="{{route('client.get.edit.form',$client->id)}}" class="badge badge-primary">Edit</a>
                                    <a href="{{route('client.delete',$client->id)}}" class="badge badge-danger">Delete</a>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted fs-13">Last updated {{\Carbon\Carbon::parse($client->updated_at)->diffForHumans()}}</small>
                            </div>
                        </div>
                    </div>
            @endforeach
                </div>
        </div>
    </div>
</div>
@stack('child-scripts')
@push('css')
    <style>
        .fs-13{font-size: 15px}
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
        .space-latter{
            letter-spacing: 1px;
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

