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

        <div class="container">
                <h1 class="font text-white">We Detect</h1>
                <h5 class="font text-white">Contact Tracing</h5>
        </div>

        <h5 class="font text-white mb-5">Admin</h5>


        <a href='/admin-receiver-qr'> <button class="btn btn-primary form-rounded"> Scan QR Code </button> </a>
        <a href='/admin-table-list'> <button class="btn btn-primary form-rounded"> Guest List </button> </a>


        </div>
</div>

</body>
</html>
@endsection