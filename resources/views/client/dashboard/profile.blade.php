<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.master')
@section('content-wrapper')
    <div class="container">
    <!-- Basic Info -->
    <div class="my-3 d-flex justify-content-between">
        <h1 >Personal Information</h1>
        <div class="card mb-3 border-0 shadow-sm" style="width: 80%;">
            <form method="POST" class="mb-0" action="{{ route('client.dashboard.profile.update') }}">
                @csrf
                <div class="row g-0">
                    <div class="col-md-4 position-relative">
                        <span class="position-absolute icon-place menu-label"><i class="fa-solid fa-marker"></i></span>
                        <img src="{{asset('storage\public\\' . $client->image)}}" class="img-fluid rounded-start" alt="image" style="width: 100%; height: 100%">
                    </div>
                    <div class="col-md-8 px-3 pt-5 mt-2">
                        <div class="column-grid-2">
                            <div class="form-group">
                                <label for="firstName">First name</label>
                                <input id="firstName" type="text" class="form-control" name="first_name" value="{{$client->first_name}}">
                            </div>
                            <div class="form-group">
                                <label for="lasttName">Last name</label>
                                <input id="lastName" type="text" class="form-control" name="last_name" value="{{$client->last_name}}">
                            </div>
                        </div>
                        <div class="column-grid-2">
                            <div class="form-group">
                                <label for="firstName">Email</label>
                                <input id="firstName" type="email" class="form-control" name="email" value="{{$client->email}}">
                            </div>
                            <div class="form-group">
                                <label for="lasttName">Phone</label>
                                <input id="lastName" type="text" class="form-control" name="phone" value="{{$client->phone}}">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-2">
                            <input type="submit" class="btn btn-primary mb-3" value="Update">
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="my-3 d-flex justify-content-between">
        <h1>Reset Password</h1>
        <div class="card mb-3 px-2 py-2 border-0 shadow-sm" style="width: 80%;">
            <form method="POST" action="{{route('client.dashboard.profile.reset')}}">
                @csrf
                <div class="px-5 mt-2">
                        <div class="col-md-6">
{{--                            <div class="form-group">--}}
{{--                                <label for="oldPass" class="required">Old Password</label>--}}
{{--                                <input id="oldPass" type="password" class="form-control" name="password" required>--}}
{{--                            </div>--}}
                        </div>
                        <div class="column-grid-2 gap-4 mt-3">
                            <div class="form-group">
                                <label for="pass" class="required">New Password</label>
                                <input id="pass" type="password" class="form-control" name="new_password" required>
                            </div>
                            <div class="form-group">
                                <label for="oldPass" class="required">Confirm Password</label>
                                <input id="oldPass" type="password" class="form-control" name="confirm_password" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-2">
                            <input type="submit" class="btn btn-danger" value="Reset Password">
                        </div>
                </div>
            </form>
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

        .max-h-98{max-height: 98px;}
        .fs-13{font-size: 15px}
        .icon-place {
            right: 0;
            top: -13px;
        }
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
