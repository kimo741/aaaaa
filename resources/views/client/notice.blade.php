<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.anonymous-master')

@section('content')
    <div class="panel">
        <div class="panel-body">

            <div class="form-container">
                <h1>E-mail Verification</h1>
                <p>Check Your E-mail To Verify Your Account...</p>
                <small>You can't login without verifing your account !!
                    <div class="spinner-border spinner-border-sm text-success" role="status">
                        <span class="visually-hidden">Checking...</span>
                    </div>
                </small>
                <form class="mt-3" method="POST" action="{{route('verification.send')}}">
                    <p>You Doesn't Get E-mail ? </p>
                    <button type="submit" class="btn btn-primary-outline">Send Mail Again</button>
                </form>
            </div>
        </div>
    </div>
@endsection
