<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.master')
@section('content-wrapper')
<div>
    <div class="container">
        <div class="mt-2">
            <h1>Edit Service</h1>
        </div>
        @if (bouncer()->hasPermission('settings.front-setting.service.edit'))
        <div class="mt-5 w-md bg-white px-5 py-5 shadow-sm">
            <form method="POST" action="{{ route('service.update') }}" @submit.prevent="onSubmit">
                @csrf
                <input type="number" value="{{$id}}" hidden name="id">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" name="title" value="{{$service->title}}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <div class="column-grid-2">
                            <div class="form-check mt-1">
                                <input class="form-check-input" value="a" type="radio" name="status" id="flexRadioDefault1" {{$service->status == 'a' ? 'checked':''}}>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" value="d" name="status" id="flexRadioDefault2" {{$service->status == 'd' ? 'checked':''}}>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    De active
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="max-width: 60%">
                    <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                    <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="5">{{$service->body}}</textarea>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        @else
        <div class="mt-5">
            <h3 class="align-middle text-center fs-2"> You Don't Have Permission</h3>
        </div>
        @endif

    </div>
</div>

@endsection
