@extends('layouts.layoutadmin')

@section('content')
<!DOCTYPE html>
<html>
<head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
      <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Sora' rel='stylesheet'>
      <link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}" />
</head>
<body>
      <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="">
                    <div class="text-white">
                            <h1 class="font" style="font-size: 35px;">WE DETECT</h1>
                            <h4 class="font" style="font-size: 14px;">contact tracing</h4>
                    </div>
            </div>
            <div class="container">
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
        </div>
            
        <form action='/admin-receiver-qr-create' method='POST' style="text-align: center;">
        @csrf

        <label class="text-white left mt-5 ">QR Code:</label>
        <input class="form-control form-rounded" type="text"  name="user_info_qr_code">

        </form>
      </div>
      </div>

</body>
</html>

@endsection