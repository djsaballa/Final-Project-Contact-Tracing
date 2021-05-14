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
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <div class="container mt-5">
                <h1 class="font text-white">We Detect</h1>
                <h5 class="font text-white">Contact Tracing</h5>
                <p class="font text-white">Admin</p>
        </div>

        

        <form method="POST" action="/admin-login-auth"  style="text-align: center;">
                @if(Session::get('fail'))
                    <div class="alert" style="color: red;">
                        {{ Session::get('fail') }}
                    </div>
                    <br>
                @endif

                @csrf

                <label class="text-white left">Username: </label>
                <input class="form-control form-rounded" type="text" name="username" placeholder="Enter username" value="{{ old('username') }}"/>
                <br>
                <span class="error" style="color: red;">@error('username'){{ $message }} @enderror</span>
                <br>

                <label class="text-white left">Password: </label>
                <input class="form-control form-rounded" type="password" name="password" placeholder="Enter password"/>
                <br>
                <span class="error" style="color: red;">@error('password'){{ $message }} @enderror</span>
                <br>
                <button class="btn btn-primary form-rounded custom-button1" type="submit"> Login </button>
        </form>
        
        </div>
</div>
</html>

@endsection

