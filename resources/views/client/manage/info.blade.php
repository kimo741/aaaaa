@extends('client.manage.add')
@section('client-forms')
            <div class="panel-body">
                <form method="POST" class="overflow-hidden px-2" action="{{ route('client.add') }}" enctype="multipart/form-data" @submit.prevent="$root.onSubmit">
                    {!! view_render_event('admin.sessions.login.form_controls.before') !!}

                    @csrf
                    <!-- *** Client Info *** -->
                    <div class="display-tab trans-content" id="display-info-tab">
                        <div class="uploader row">
                            <div class="imgUp col-md-7">
                                <div class="imagePreview"></div>
                                <label class="btn btn-primary addImageBtn btn-sm">
                                    +<input type="file" name="image" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                </label>
                            </div>
                            <div class="col-md-5">
                                <select class="form-select" name="status" aria-label="select status">
                                    <option value="1" selected>Enable</option>
                                    <option value="0">Disable</option>
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
                                    v-validate.disable="'required|min:6'"
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
                                    v-validate.disable="'required|min:6'"
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
                                <option selected value="">Available Packages</option>
                                @foreach($packages as $pack)
                                <option value="{{$pack->id}}">{{$pack->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <!-- *** Client Task *** -->
{{--                    <div class="display-tab trans-content hide-tab" id="display-task-tab">--}}
{{--                        <div class="uploader row">--}}
{{--                            <div class="imgUp col-md-7">--}}
{{--                                <div class="imagePreview"></div>--}}
{{--                                <label class="btn btn-primary addImageBtn btn-sm">--}}
{{--                                    +<input type="file" name="image" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-5">--}}
{{--                                <select class="form-select" name="status" aria-label="select status">--}}
{{--                                    <option selected>Account Status</option>--}}
{{--                                    <option value="1">Enable</option>--}}
{{--                                    <option value="0">Disable</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="column-grid-2">--}}
{{--                            <div class="form-group" :class="[errors.has('first_name') ? 'has-error' : '']">--}}
{{--                                <label for="first_name" class="required">First Name</label>--}}

{{--                                <input--}}
{{--                                    type="text"--}}
{{--                                    name="first_name"--}}
{{--                                    class="control"--}}
{{--                                    id="first_name"--}}
{{--                                    v-validate.disable="'required'"--}}
{{--                                    data-vv-as="&quot;{{'First Name'}}&quot;"--}}
{{--                                />--}}

{{--                                <span class="control-error" v-if="errors.has('first_name')">--}}
{{--                                @{{ errors.first('first_name') }}--}}
{{--                            </span>--}}
{{--                            </div>--}}
{{--                            <div class="form-group" :class="[errors.has('last_name') ? 'has-error' : '']">--}}
{{--                                <label for="last_name" class="required">Last Name</label>--}}

{{--                                <input--}}
{{--                                    type="text"--}}
{{--                                    name="last_name"--}}
{{--                                    class="control"--}}
{{--                                    id="last_name"--}}
{{--                                    v-validate.disable="'required'"--}}
{{--                                    data-vv-as="&quot;{{'Last Name'}}&quot;"--}}
{{--                                />--}}

{{--                                <span class="control-error" v-if="errors.has('last_name')">--}}
{{--                                @{{ errors.first('last_name') }}--}}
{{--                            </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="column-grid-2">--}}
{{--                            <div class="form-group" :class="[errors.has('email') ? 'has-error' : '']">--}}
{{--                                <label for="email" class="required">{{ __('admin::app.sessions.login.email') }}</label>--}}

{{--                                <input--}}
{{--                                    type="text"--}}
{{--                                    name="email"--}}
{{--                                    class="control"--}}
{{--                                    id="email"--}}
{{--                                    v-validate.disable="'required|email'"--}}
{{--                                    data-vv-as="&quot;{{ __('admin::app.sessions.login.email') }}&quot;"--}}
{{--                                />--}}

{{--                                <span class="control-error" v-if="errors.has('email')">--}}
{{--                                @{{ errors.first('email') }}--}}
{{--                            </span>--}}
{{--                            </div>--}}
{{--                            <div class="form-group" :class="[errors.has('phone') ? 'has-error' : '']">--}}
{{--                                <label for="phone" class="required">Phone</label>--}}

{{--                                <input--}}
{{--                                    type="text"--}}
{{--                                    name="phone"--}}
{{--                                    class="control"--}}
{{--                                    id="phone"--}}
{{--                                    v-validate.disable="'required'"--}}
{{--                                    data-vv-as="&quot;{{'Phone'}}&quot;"--}}
{{--                                />--}}

{{--                                <span class="control-error" v-if="errors.has('phone')">--}}
{{--                                @{{ errors.first('phone') }}--}}
{{--                            </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="form-group" :class="[errors.has('password') ? 'has-error' : '']">--}}
{{--                                <label for="password" class="required">{{ __('admin::app.sessions.login.password') }}</label>--}}

{{--                                <input--}}
{{--                                    type="password"--}}
{{--                                    name="password"--}}
{{--                                    class="control"--}}
{{--                                    id="password"--}}
{{--                                    v-validate.disable="'required|min:6'"--}}
{{--                                    data-vv-as="&quot;{{ __('admin::app.sessions.login.password') }}&quot;"--}}
{{--                                />--}}

{{--                                <span class="control-error" v-if="errors.has('password')">--}}
{{--                                @{{ errors.first('password') }}--}}
{{--                            </span>--}}
{{--                            </div>--}}
{{--                            <div class="form-group" :class="[errors.has('confirm_password') ? 'has-error' : '']">--}}
{{--                                <label for="confirm_password" class="required">Password Confirm</label>--}}

{{--                                <input--}}
{{--                                    type="password"--}}
{{--                                    name="confirm_password"--}}
{{--                                    class="control"--}}
{{--                                    id="confirm_password"--}}
{{--                                    v-validate.disable="'required|min:6'"--}}
{{--                                    data-vv-as="&quot;{{ 'Confirm Password' }}&quot;"--}}
{{--                                />--}}

{{--                                <span class="control-error" v-if="errors.has('confirm_password')">--}}
{{--                                @{{ errors.first('confirm_password') }}--}}
{{--                            </span>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}

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
@endsection
