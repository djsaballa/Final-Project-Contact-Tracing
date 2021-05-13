@extends('layouts.layoutadmin')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <h1 style="text-align: center; margin-top: 15px;">We Detect</h1>
        <h3 style="text-align: center;">Contact Tracing</h3>

        <h5 style="text-align: center; margin: 15px;">Admin</h5>

            <video id="preview"></video>
            <script type="text/javascript">
            let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
            scanner.addListener('scan', function (content) {
                alert(content);
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
            
        <form action='/admin-receiver-qr-create' method='POST' style="text-align: center;">
        @csrf

        QR Code:
        <input type="text" name="qr" value="{{ $user_qr->qr }}"/> 
        <br>
        <br>

        </form>
</div>
</div>

@endsection