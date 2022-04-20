<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.master')
@section('content-wrapper')

    {{--<div class="bg-primary">--}}
{{--    <h1>{{$package[0]->name}}</h1>--}}
{{--    <h1>{{$package[0]->price}}</h1>--}}
{{--    <h1>{{$package[0]->description}}</h1>--}}
{{--</div>--}}
<div class="position-relative">
    <div class="position-absolute bottom-0 end-0">
        <a class="btn btn-primary rounded-circle" href="{{route('service.get.add.form')}}" role="button"><i class="icon plus-white-icon"></i></a>
    </div>
    <div class="container">
        <div class="mt-2">
            <h1>All Services</h1>
        </div>
        <div class="mt-5 column-grid-2">
            @foreach($services as $item)
            <div class="card my-2 position-relative shadow-card" style="min-width: 18rem;">
                  <span class="position-absolute translate-middle p-2  border border-light rounded-circle {{$item->status == 'a' ? 'bg-success pulse':'bg-secondary'}}" style="top: 11%; left: 98%;">
                    <span class="visually-hidden">Status</span>
                  </span>
                <div class="card-body">
                    <h5 class="card-title fs-4 text-capitalize">{{$item->title}}</h5>
                    <p class="card-text fs-6">{{$item->body}}.</p>
                    <a href="{{route('service.get.edit.form',$item->id)}}" class="card-link"><span class="badge bg-info fw-light">Edit</span></a>
                    <a href="{{route('service.delete',$item->id)}}" class="card-link"><span class="badge bg-danger fw-light">Delete</span></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stack('child-scripts')
    @push('css')
        <style>
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

