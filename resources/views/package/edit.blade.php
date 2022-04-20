<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.master')
@section('content-wrapper')
<div>
    <div class="container">
        <div class="mt-2">
            <h1>Edit Package</h1>
        </div>
        <div class="mt-5 w-md bg-white px-5 py-5 shadow-sm">
            <form method="POST" action="{{ route('package.update') }}" @submit.prevent="onSubmit">
                @csrf
                <input type="number" value="{{$id}}" hidden name="id">
                <div class="row">
                    <div class="col-md-9 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$package->name}}">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" value="{{$package->price}}">
                    </div>
                </div>
                <div>
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$package->description}}</textarea>
                </div>
                <div class="row mt-3 justify-content-between">
{{--                    <div class="col-3">--}}
{{--                        <label for="exampleFormControlInput1" class="form-label">Items</label>--}}
{{--                        <div>--}}
{{--                            @if(!($all->isEmpty()))--}}
{{--                            @foreach($all as $item)--}}
{{--                                <div class="form-check-inline my-2">--}}
{{--                                    <input class="form-check-input" name="items_id[]" type="checkbox" value="{{$item->id}}" id="{{$item->label}}_{{$item->id}}"--}}
{{--                                       @foreach($package->items as $p_item)--}}
{{--                                           {{$item->id == $p_item->id ? "Checked" : ""}}--}}
{{--                                       @endforeach--}}
{{--                                    >--}}
{{--                                    <label class="form-check-label text-capitalize" for="{{$item->label}}_{{$item->id}}">--}}
{{--                                        {{ $item->label }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                            @else--}}
{{--                                <span>No Items Found</span>--}}
{{--                            @endif--}}
{{--                        </div>--}}

{{--                    </div>--}}
                    <div class="col-4">
                        <div class="">
                            <select class="form-select" name="type_label" aria-label="Default select example">
{{--                                <option selected>Select Package Type</option>--}}
                                <option {{$package->type_label == 'day' ? 'selected' :''}} value="day">Day</option>
                                <option {{$package->type_label == 'week' ? 'selected' :''}} value="week">Week</option>
                                <option {{$package->type_label == 'month' ? 'selected' :''}} value="month">Month</option>
                                <option {{$package->type_label == 'year' ? 'selected' :''}} value="year">Year</option>
                            </select>
                            <input type="number" name="type_value" value="{{$package->type_value}}" class="mt-3 form-control">
                        </div>
                    </div>

                    <div class="col-6">
                        <div>
                            <label class="form-label">Status</label>
                            <div class="form-check mt-1">
                                <input class="form-check-input" value="1" type="radio" name="status" id="flexRadioDefault1" {{$package->status == 1 ? 'checked':''}}>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" value="0" name="status" id="flexRadioDefault2" {{$package->status == 0 ? 'checked':''}}>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    De active
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection
