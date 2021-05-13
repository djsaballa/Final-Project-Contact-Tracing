@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}" />
</head>
<body>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    
    <div class="text-white">
        <h1 class="font">WE DETECT</h1>
        <h4 class="font">contact tracing</h4>
    </div>
    <br>
	        <a href="/user-user-form">
	            <button type="submit" class="choice btn btn-primary font">START</button>
	        </a>
        
    </div>
</div>

</body>
</html>

@endsection
