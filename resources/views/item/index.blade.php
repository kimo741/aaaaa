<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.master')
@section('content-wrapper')
<div class="position-relative">
    @if(bouncer()->hasPermission('settings.front-setting.item.add'))
    <div class="position-absolute bottom-0 end-0">
        <a class="btn btn-primary rounded-circle" href="{{route('item.get.add.form')}}" role="button"><i class="icon plus-white-icon"></i></a>
    </div>
    @endif
    <div class="container">
        <div class="mt-2">
            <h1>All Items</h1>
        </div>
        @if($items->isEmpty())
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
        <div class="mt-5 column-grid-2">
            @foreach($items as $item)
            <div class="card my-2 shadow-card" style="min-width: 18rem;">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between">
                        <h5 class=" fs-4 text-capitalize">{{$item->label}}</h5>
                        <h3 class="badge rounded-pill space-latter {{$item->value === 'duration'? 'badge-warning':'badge-primary'}}">{{$item->value === 'duration'? 'Time':'Count'}}</h3>
                    </div>
                    @if(isset($item->duration))
                    <p class="card-text fs-3 text-capitalize">{{$item->duration}}</p>
                    @endif
                    @if(isset($item->count))
                    <p class="card-text fs-3 text-capitalize">{{$item->count}}</p>
                    @endif
                    <a href="{{route('item.get.edit.form',$item->id)}}" class="card-link"><span class="badge bg-info fw-light">Edit</span></a>
                    <a href="{{route('item.delete',$item->id)}}" class="card-link"><span class="badge bg-danger fw-light">Delete</span></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stack('child-scripts')
@push('css')
    <style>
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

