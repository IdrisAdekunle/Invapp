@extends('layouts.app')



@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Qrcode Scanner <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                        Scan assets qrcode here
                    </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">User Interface</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Qrcode</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- END Hero -->

    <div class="content">
        <div class="block">
            <div class="block-content text-center">

                <p>
                    Please place your qrcode directly to your web cam to scan
                </p>


                <video id="preview"></video>



            </div>
        </div>
    </div>

    <script type="text/javascript">
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        scanner.addListener('scan', function (content) {
            window.location.href = content;
        });
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function (e) {
            console.error(e);
        });
    </script>





@endsection