<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.master')
@section('content-wrapper')
<div>
    <div class="container">
        <div class="mt-2">
            <h1>Add Package</h1>
        </div>
        <div class="mt-5 w-md bg-white px-5 py-5 shadow-sm">
            <form method="POST" action="{{ route('package.add') }}" @submit.prevent="onSubmit">
                @csrf
                <div class="row">
                    <div class="col-md-9 mb-3" :class="[errors.has('name') ? 'has-error' : '']">
                        <label for="name" class="form-label">Name</label>
                        <input type="text"  name="name" class="form-control"
                            id="name"
                            v-validate.disable="'required'"
                            data-vv-as="&quot;{{ 'Name' }}&quot;"
                        >
                         <span class="control-error text-danger" v-if="errors.has('name')">
                            @{{ errors.first('name') }}
                        </span>
                    </div>
                    <div class="col-md-3 mb-3" :class="[errors.has('price') ? 'has-error' : '']">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control"
                            id="price"
                            v-validate.disable="'required'"
                            data-vv-as="&quot;{{ 'Price' }}&quot;"
                        >
                        <span class="control-error text-danger" v-if="errors.has('price')">
                            @{{ errors.first('price') }}
                        </span>
                    </div>
                </div>
                <div :class="[errors.has('description') ? 'has-error' : '']">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3"
                        id="description"
                        v-validate.disable="'required'"
                        data-vv-as="&quot;{{ 'Description' }}&quot;"
                    ></textarea>
                    <span class="control-error text-danger" v-if="errors.has('description')">
                            @{{ errors.first('description') }}
                    </span>
                </div>
                <div class="row mt-3 justify-content-between">
                    <div class="col-4">
                        <div>
                            <select class="form-select" name="type_label" aria-label="Default select example">
                                <option selected>Select Package Type</option>
                                <option value="day">Day</option>
                                <option value="week">Week</option>
                                <option value="month">Month</option>
                                <option value="year">Year</option>
                            </select>
                            <div :class="[errors.has('type_label') ? 'has-error' : '']">
                                <input type="number" name="type_value" class="mt-3 form-control"
                                     id="type_value"
                                    v-validate.disable="'required'"
                                    data-vv-as="&quot;{{ 'type value' }}&quot;"
                                >
                                <span class="control-error text-danger" v-if="errors.has('type_value')">
                                @{{ errors.first('type_value') }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <label class="form-label">Status</label>
                            <div class="form-check mt-1">
                                <input class="form-check-input" value="1" type="radio" name="status" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" value="0" name="status" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    De active
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>

{{--        <div class="alert alert-danger" role="alert">--}}
{{--            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Error:</span>--}}
{{--            Enter a valid email address--}}
{{--        </div>--}}

    </div>
</div>

@endsection
