@extends('client.manage.add')
@section('client-forms')
    @if (bouncer()->hasPermission('client.edit'))
        <div class="panel-body">
            <form method="POST" class="overflow-hidden px-2" enctype="multipart/form-data" action="{{ route('client.update') }}" @submit.prevent="$root.onSubmit">
                {!! view_render_event('admin.sessions.login.form_controls.before') !!}

                @csrf
                <input type="number" value="{{$id}}" hidden name="id">

                <!-- *** Client Info *** -->
                <div class="display-tab trans-content" id="display-info-tab">
                    <div class="uploader row">
                        <div class="imgUp col-md-7">
                            <div class="imagePreview" style="{{ 'background-image:url("' . asset('storage/public/' . $client->image) . '")'}}"></div>
                            <label class="btn btn-primary addImageBtn btn-sm">
                                +<input type="file" name="image" class="uploadFile img" style="width: 0px;height: 0px;overflow: hidden;">
                            </label>
                        </div>
                        <div class="col-md-5">
                            <select class="form-select" name="status" aria-label="select status">
                                <option {{$client->status == 1 ? 'selected':''}} value="1">Enable</option>
                                <option {{$client->status == 0 ? 'selected':''}} value="0">Disable</option>
                            </select>
                        </div>
                    </div>
                    <div class="column-grid-2">
                        <div class="form-group" :class="[errors.has('first_name') ? 'has-error' : '']">
                            <label for="first_name" class="required">First Name</label>

                            <input
                                type="text"
                                name="first_name"
                                class="control"
                                id="first_name"
                                value="{{$client->first_name}}"
                                v-validate.disable="'required'"
                                data-vv-as="&quot;{{'First Name'}}&quot;"
                            />

                            <span class="control-error" v-if="errors.has('first_name')">
                                @{{ errors.first('first_name') }}
                            </span>
                        </div>
                        <div class="form-group" :class="[errors.has('last_name') ? 'has-error' : '']">
                            <label for="last_name" class="required">Last Name</label>

                            <input
                                type="text"
                                name="last_name"
                                class="control"
                                id="last_name"
                                value="{{$client->last_name}}"
                                v-validate.disable="'required'"
                                data-vv-as="&quot;{{'Last Name'}}&quot;"
                            />

                            <span class="control-error" v-if="errors.has('last_name')">
                                @{{ errors.first('last_name') }}
                            </span>
                        </div>
                    </div>

                    <div class="column-grid-2">
                        <div class="form-group" :class="[errors.has('email') ? 'has-error' : '']">
                            <label for="email" class="required">{{ __('admin::app.sessions.login.email') }}</label>

                            <input
                                type="text"
                                name="email"
                                class="control"
                                id="email"
                                value="{{$client->email}}"
                                v-validate.disable="'required|email'"
                                data-vv-as="&quot;{{ __('admin::app.sessions.login.email') }}&quot;"
                            />

                            <span class="control-error" v-if="errors.has('email')">
                                @{{ errors.first('email') }}
                            </span>
                        </div>
                        <div class="form-group" :class="[errors.has('phone') ? 'has-error' : '']">
                            <label for="phone" class="required">Phone</label>

                            <input
                                type="text"
                                name="phone"
                                class="control"
                                value="{{$client->phone}}"
                                id="phone"
                                v-validate.disable="'required'"
                                data-vv-as="&quot;{{'Phone'}}&quot;"
                            />

                            <span class="control-error" v-if="errors.has('phone')">
                                @{{ errors.first('phone') }}
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="form-group" :class="[errors.has('password') ? 'has-error' : '']">
                            <label for="password" class="required">{{ __('admin::app.sessions.login.password') }}</label>

                            <input
                                type="password"
                                name="password"
                                class="control"
                                id="password"
                                data-vv-as="&quot;{{ __('admin::app.sessions.login.password') }}&quot;"
                            />

                            <span class="control-error" v-if="errors.has('password')">
                                @{{ errors.first('password') }}
                            </span>
                        </div>
                        <div class="form-group" :class="[errors.has('confirm_password') ? 'has-error' : '']">
                            <label for="confirm_password" class="required">Password Confirm</label>

                            <input
                                type="password"
                                name="confirm_password"
                                class="control"
                                id="confirm_password"
                                data-vv-as="&quot;{{ 'Confirm Password' }}&quot;"
                            />

                            <span class="control-error" v-if="errors.has('confirm_password')">
                                @{{ errors.first('confirm_password') }}
                            </span>
                        </div>

                    </div>
                </div>

                <!-- *** Client Package *** -->
                <div class="display-tab trans-content hide-tab" id="display-package-tab">
                    <div class="d-flex justify-content-between text-capitalize mb-3">
                        <h1> select package</h1>
                        <a href="#" class="fs-13"><span>i want to take a round 🧐 </span></a>
                    </div>
                    <div class="pb-3 mb-3">
                        <select class="form-select" aria-label="Packages" name="package_id">
                            <option selected value="0">{{$client->package_id == null|'0' ? 'No Package Selected' : 'Disable Package'}}</option>
                            @foreach($packages as $pack)
                            <option class="text-capitalize" {{$pack->id == $client->package_id ? 'selected' : ''}} value="{{$pack->id}}">{{$pack->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <!-- *** Tasks *** -->
                <div class="display-tab trans-content hide-tab" id="display-task-tab">
                    <div class="d-flex justify-content-between text-capitalize mb-3">
                        <h1 class="fs-2">Client Tasks</h1>
                        <span class="fs-13">✌ Do Your Best</span>
                    </div>
                    <div class="pb-3 mb-3">
                    @if(isset($tasks))
                    @foreach($tasks as $task)
                                <div class="form-check my-3">
                                    <input class="form-check-input" name="task_items[]" type="checkbox" value="{{$task['id']}}" id="flexCheckChecked_{{$task['id']}}" {{ $task['status'] == 1 ? 'checked':'' }}>
                                    <label class="form-check-label" for="flexCheckChecked_{{$task['id']}}">
                                        {{ $task['label'] }}
                                    </label>
                                </div>
                        @endforeach
                        @endif
                    </div>
                </div>

                {!! view_render_event('admin.sessions.login.form_controls.after') !!}

                <div class="button-group">
                    {!! view_render_event('admin.sessions.login.form_buttons.before') !!}

                    <button type="submit" class="btn btn-xl btn-primary">
                        Save
                    </button>

                    {!! view_render_event('admin.sessions.login.form_buttons.after') !!}
                </div>

            </form>
        </div>
    @else
        <div class="mt-5">
            <h3 class="align-middle text-center fs-2"> You Don't Have Permission</h3>
        </div>
    @endif
@endsection
