
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

        <div class="">
            <img src="{{ URL::to('../../resources/images/heading.png') }}">
            <h1 class="font">WE DETECT</h1>
            <h4 class="font">contact tracing</h4>
        </div>

        <br>

        <div class="">
            <form action="/user-user-create" method="POST">

                @csrf 
        
                <input type="hidden" value="{{ $user_info->id }}" name="id" >
                                
                <label for="name" class="" >Name:</label>
                <input type="text" value="{{ $user_info->name }}"  name="name" class="" placeholder="ex. juan dela cruz"><br>

                <label for="email" class="" >Email:</label>
                <input type="email" value="{{ $user_info->email }}"  name="email" class="" placeholder="ex. juandelacruz@gmail.com"><br>

                <label for="address" class="" >Address:</label>
                <input type="text" value="{{ $user_info->address }}"  name="address" class="" placeholder="ex. sampaloc apalit pampanga"><br>

                <label for="phone_number" class="" >Phone No.:</label>
                <input type="number" value="{{ $user_info->phone_number }}"  name="phone_number" class="" placeholder="ex. 09xxxxxxxxx"><br>

                <label for="body_temp" class="" >Body Temperature:</label>
                <input type="number" value="{{ $user_info->body_temp }}"  name="body_temp" class="" placeholder="ex. 36.5"><br>

                <label for="age" class="" >Age:</label>
                <input type="number" value="{{ $user_info->age }}"  name="age" class="" placeholder="ex. 19"><br>

                <button class="btn btn-primary" type="submit" value="submit" class="">Submit</button>

            </form>
        </div>
        <div class="">
            <input type="checkbox" id="check" name="check" value="agree">
            <label for="check"> check if  you agree.</label><br><br>
        </div>

            <a>By signing up, you agree to</a><br>
            <a href="/user-terms-condition">Terms of Service &nbsp;&nbsp;</a>and&nbsp;&nbsp;<a href="/user-privacy-policy">Privacy Policy.</a>
        </div>
    </div>
</body>
</html>

@endsection