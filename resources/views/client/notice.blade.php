<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.anonymous-master')

@section('content')
                <h1>E-mail Verification</h1>
    <div class="panel">
        <div class="panel-body" style="padding: 25px">

            <div class="form-container">
            <h1 style="margin-bottom:21px">Hi, {{ $client->first_name }}</h1>
                <p style="line-height: 2;font-size: 15px;">
                    plece Check Your E-mail send To
                    <strong>
                        {{ $client->email }}
                    </strong>
                </p>
                <small style="font-size:12px">You can't login without verifing your account</small>
                <small style="font-size:12px">If you have problem pleac contact-us at
                    <a style="display: inline;" href="mailto:admin@ladune.com">admin@ladune.com</a>
                </small>
                <a href="{{route('verification.send', $client->email)}}" class="mb-0 mt-5">Resend email </a>
            </div>
        </div>
    </div>
@endsection
