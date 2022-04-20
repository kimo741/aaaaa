<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.master')
@section('content-wrapper')
<div>
    <div class="container">
        <div class="mt-2">
            <h1>Add Service</h1>
        </div>
        <div class="mt-5 w-md bg-white px-5 py-5 shadow-sm">
            <form method="POST" action="{{ route('service.update') }}" @submit.prevent="onSubmit">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3" :class="[errors.has('title') ? 'has-error' : '']">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control"
                        id="title"
                        v-validate.disable="'required'"
                        data-vv-as="&quot;{{ 'Title' }}&quot;"
                        >
                        <span class="control-error text-danger" v-if="errors.has('title')">
                            @{{ errors.first('title') }}
                        </span>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <div class="column-grid-2">
                            <div class="form-check mt-1">
                                <input class="form-check-input" value="a" type="radio" name="status" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" value="d" name="status" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    De active
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="max-width: 60%" :class="[errors.has('body') ? 'has-error' : '']">
                    <label for="body" class="form-label">Body</label>
                    <textarea class="form-control" name="body" rows="5"
                        id="body"
                        v-validate.disable="'required'"
                        data-vv-as="&quot;{{ 'Body' }}&quot;"
                    ></textarea>
                    <span class="control-error text-danger" v-if="errors.has('body')">
                            @{{ errors.first('body') }}
                    </span>
                </div>
                <div class="d-flex justify-content-end mt-3">
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
