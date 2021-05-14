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

                <div class="container mb-5">
                        <div class="text-white containers centered mb-5">
                                <h1 class="font" style="font-size: 35px;">WE DETECT</h1>
                                <h4 class="font" style="font-size: 14px;">contact tracing</h4>
                                <h5 class="font" style="text-align: center; margin: 15px;">Admin</h5>
                        </div>
                </div>


                
                <div class="centered mt-5">
                        <a href="/admin-login">
                                <button type="submit" class="choice btn-lg btn-primary font form-rounded">Login</button>
                        </a>
                </div>
        </div> 
        </div>
        </div>

</body>
</html>

@endsection
