<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.master')
@section('content-wrapper')
<div class="position-relative">
    <div class="container">
        <div class="">
            @if(isset($package))
            <div class="card my-3">
                <div class="text-center py-3 card-header bg-primary text-white fs-3 fw-bold">
                    Your Package
                </div>
                <div class="card-body">
                    <div class="mb-4 d-flex justify-content-between px-3">
                        <div>
                            <h5 class="card-title fs-1 text-capitalize pf-color">{{$package->name}}</h5>
                            <p class="card-text text-muted">{{$package->description}}</p>
                        </div>
                        <div>
                            <h5 class="">will expire at</h5>
                            <span class="p-2 badge badge-danger-outline badge-pill"> {{\Carbon\Carbon::parse(auth()->guard('client')->user()->expire_at)->format('l jS \of F Y')}}</span>
                        </div>
                    </div>
                    <ul class="row mb-3 gap-2 justify-content-center">
                        @foreach($items as $item)
                            @foreach($statusItem as $item_status)
                                @if($item->id == $item_status['item_id'])
                                <li class="col-sm-2 badge badge-pill py-2 {{$item_status['status'] == 1 ? 'badge-primary':'badge-primary-outline'}}">{{$item->label}}</li>
                                @endif
                            @endforeach
                        @endforeach
                    </ul>
                    <div class="mt-4">
{{--                        <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    </div>
                </div>
                <div class="card-footer text-center bg-primary text-white">
                    {{\Carbon\Carbon::parse(auth()->guard('client')->user()->sub_time)->diffForHumans()}}
                </div>
            </div>
            @else
                <div class="full-width my-5 text-center">
                    <span class="bnfsg-color text-white px-4 py-3 pulse rounded"> Get Your Package </span>
                </div>
            @endif
            <div class="row gap-3 py-2 justify-content-center">
                @foreach($all_packages as $pack)
                    @if($pack->status == 1 && $pack->id != auth()->guard('client')->user()->package_id)
                    <div class="col-lg-3 card px-0 shadow-sm" style="max-width: 22rem;">
                        <div class="card-body bnfsg-color text-white w-100 max-h-98">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title fs-3 text-capitalize text-white">{{$pack->name}}</h5>
                                <p class="card-subtitle text-color-price">{{$pack->price}} $</p>
                            </div>
                            <p class="card-text">{{$pack->description}}</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            @foreach($pack->items as $it)
                            <li class="list-group-item">{{$it->label}}</li>
                            @endforeach
                        </ul>
                        <div class="card-body text-center">
                            <form action="{{ route('assign.client.package') }}" method="post">
                                @csrf
                                <input hidden type="text" name="package_id" value="{{$pack->id}}">
                                <input hidden type="text" name="client_id" value="{{auth()->guard('client')->user()->id}}">
                                <button type="submit" class="card-link btn bnfsg-color text-white">{{auth()->guard('client')->user()->package_id ? 'Change Package' : 'Get Package'}}</button>

                            </form>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>


{{--            @if(isset($package))--}}
{{--                {{ $package }}--}}
{{--                @endif--}}
{{--            <br>--}}
{{--            @if(isset($items))--}}
{{--                @if($items->isEmpty())--}}
{{--                <h2> No Items </h2>--}}
{{--                        {{  $items }}--}}
{{--                @endif--}}
{{--            @endif--}}
{{--            <br>--}}
{{--            @if(isset($all_packages))--}}
{{--                {{ $all_packages }}--}}
{{--            @endif--}}
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
        .pf-color{color: #0E90D9}
        .text-color-price{color: #ecf406}

        .max-h-98{max-height: 98px;}
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
                background-color: #f1e702;
            }
            50% {
                opacity: 0;
                transform: scale(1.5);
                background-color: #0E90D9;
            }
            100% {
                opacity: 0;
                transform: scale(1.5);
                background-color: #eccc07;
            }
        }
    </style>

@endpush

@endsection

