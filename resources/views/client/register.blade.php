@extends('admin::layouts.anonymous-master')

@section('content')
    <div class="panel">
        <div class="panel-body">

            <div class="form-container">
                <form method="POST" action="{{ route('do.register') }}"  enctype="multipart/form-data" @submit.prevent="$root.onSubmit">
                    {!! view_render_event('admin.sessions.login.form_controls.before') !!}

                    @csrf
                    <div class="uploader">
                        <div class="imgUp">
                            <div class="imagePreview" style="{{$client->image ? 'background-image: ' . asset('storage\public\\' . $client->image) :''}}"></div>
                            <label class="btn btn-primary addImageBtn btn-sm">
                                +<input type="file" name="image" class="uploadFile img" style="width: 0px;height: 0px;overflow: hidden;">
                            </label>
                        </div>
                    </div>
                    <div class="column-grid-2">
                        <div class="form-group" :class="[errors.has('first_name') ? 'has-error' : '']">
                            <label for="first_name">First Name</label>

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
                            <label for="last_name">Last Name</label>

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
                            <label for="email">{{ __('admin::app.sessions.login.email') }}</label>

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
                            <label for="phone">Phone</label>

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
                            <label for="password">{{ __('admin::app.sessions.login.password') }}</label>

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
                            <label for="confirm_password">Password Confirm</label>

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

                    {!! view_render_event('admin.sessions.login.form_controls.after') !!}

                    <div class="button-group">
                        {!! view_render_event('admin.sessions.login.form_buttons.before') !!}

                        <button type="submit" class="btn btn-xl btn-primary">
                            Register
                        </button>

                        {!! view_render_event('admin.sessions.login.form_buttons.after') !!}
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@push('css')
    <style>
        .imgUp
        {
            margin-bottom:15px;
        }
        .addImageBtn{
            border-radius: 50%;
        }
        .imagePreview {
            width: 20%;
            height: 65px;
            border-radius: 50%;
            /*background-image: url("https://www.royalunibrew.com/wp-content/uploads/2021/07/blank-profile-picture-973460_640.png");*/
            background-position: center center;
            background-color:#fff;
            background-size: cover;
            background-repeat:no-repeat;
            display: inline-block;
            box-shadow: -6px 2px 6px 0px rgb(0 0 0 / 20%);
        }
        .panel-body {
            padding: 33px !important;
        }

    </style>
@endpush
@push('scripts')
    <script>
        $(document).on("click", "i.del" , function() {
            $(this).parent().remove();
        });
        $(function() {
            $(document).on("change",".uploadFile", function()
            {
                let uploadFile = $(this);
                let files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    let reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        // alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                        uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                    }
                }

            });
        });

        $(() => {
            $('input').keyup(({target}) => {
                if ($(target).parent('.has-error').length) {
                    $(target).parent('.has-error').addClass('hide-error');
                }
            });

            $('button').click(() => {
                $('.hide-error').removeClass('hide-error');
            });
        });
    </script>
@endpush
