<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.master')
@section('content-wrapper')
<div>
    <div class="container">
        <div class="mt-2">
            <h1>Add Item</h1>
        </div>
        @if (bouncer()->hasPermission('settings.front-setting.item.create'))
        <div class="mt-5 w-md bg-white px-5 py-5 shadow-sm">

            <form method="POST" action="{{ route('item.update') }}" @submit.prevent="onSubmit">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Select Package</label>
                        <select class="form-select" name="package_id" aria-label="Default select example">
                            <option selected>Select Package</option>
                            @foreach($packages as $package)
                                <option value="{{$package->id}}" class="text-capitalize">{{$package->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Select Quantity</label>
                        <select class="form-select" name="value" aria-label="Default select example" onchange="getComboA(this)">
                            <option selected>Select Quantity Value</option>
                            <option value="duration" class="text-capitalize">Time</option>
                            <option value="count" class="text-capitalize">Count</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3" :class="[errors.has('label') ? 'has-error' : '']">
                        <label for="label" class="form-label">Label</label>
                        <input type="text" id="label" name="label" class="form-control"
                           v-validate.disable="'required'"
                           data-vv-as="&quot;{{'Label'}}&quot;"
                        >
                        <span class="control-error text-danger" v-if="errors.has('label')">
                            @{{ errors.first('label') }}
                        </span>
                    </div>
                    <div class="col-md-3 mb-3" id="count-div" >
                        <label for="count" class="form-label">Count</label>
                        <input type="number" name="count" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3" id="time" style="display: none">
                        <label for="duration" class="form-label">Time</label>
                        <input type="text" name="duration" class="form-control">
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary">Save</button>
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
@push('scripts')
    <script>
        function getComboA(selectObject) {
            const value = selectObject.value;
            const time  = document.getElementById('time');
            const count = document.getElementById('count-div');

            if (value === 'duration') {
                time.style.display = 'block'
                count.style.display = 'none'
            } else  {
                time.style.display = 'none'
                count.style.display = 'block'
            }
        }
    </script>
@endpush

@endsection
