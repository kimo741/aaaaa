<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('admin::layouts.master')

@section('content-wrapper')
    @if (bouncer()->hasPermission('client.create'))
    <div class="">
        <h1 class="align-middle mb-5 mt-3 text-center fs-2">Update Clients</h1>
    </div>
    <div class="center-box">
        <div class="panel adjacent-center">
            <div class="form-container">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <button onclick="getTab('display-info-tab')" id="info" class="nav-link remove_active active display-info-tab-btn">Info</button>
                    </li>
                    <li class="nav-item">
                        <button onclick="getTab('display-package-tab')" id="package" class="nav-link remove_active display-package-tab-btn">Packages</button>
                    </li>
                    <li class="nav-item">
                        <button onclick="getTab('display-task-tab')" id="task" class="nav-link remove_active display-task-tab-btn">Tasks</button>
                    </li>
                </ul>
                    @yield('client-forms')
            </div>
        </div>
    </div>
    @else
    <div class="mt-5">
        <h3 class="align-middle text-center fs-2"> You Don't Have Permission</h3>
    </div>
    @endif

    @push('scripts')
        <script>
            function getTab(idName) {
                const hide  = document.getElementsByClassName('display-tab');
                const show = document.getElementById(idName);
                const hide_btn = document.querySelectorAll('.remove_active')
                for (i = 0; i < hide.length; i++) {
                    hide[i].classList.add('hide-tab');
                }
                hide_btn.forEach(btn => {
                    btn.classList.remove('active')
                })
                show.classList.remove('hide-tab')
                document.querySelector('.' + idName + '-btn').classList.add('active');
            }
        </script>
    @endpush
@stop
@push('css')
    <style>
        .fs-13{font-size: 15px;}
        .trans-content{
            transition: all .35s ease-in-out;
        }
        .hide-tab{
            position: absolute;
            left: 100%;
            top: 100%;
            opacity: 0;
        }
        .center-box {
            margin: auto;
            max-width: 30%;
        }
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
            background-image: url("https://www.royalunibrew.com/wp-content/uploads/2021/07/blank-profile-picture-973460_640.png");
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
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
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
