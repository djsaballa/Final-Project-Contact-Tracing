
@extends('layouts.layout')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}" />
</head>
<body>

        <div class="containers">
            <img class="heading shadow-lg" src="/images/heading.png" alt="heading">
            <h1 class="font centered display-1" style="top: 30%">WE DETECT</h1>
            <p class="font centered pt-3">contact tracing</p>
        </div>

        <br>

        <h1 class="left container pt-3 pb-3 poppins"><strong>Guest's Information</strong></h1>

        <div class="container poppins">
            <form action="/user-user-create" method="POST">

                @csrf 
        
                <input type="hidden" value="{{ $user_info->id }}" name="id" >

            <div class="left">              
                <label for="name">Name:</label>
                <input class="form-control form-rounded" type="text" value="{{ $user_info->name }}"  name="name" class="" placeholder="ex. juan dela cruz">
                <span class="error" style="color: red;">@error('name'){{ $message }} @enderror</span>
            </div>
            <br>

            <div class="left">
                <label for="email" class="" >Email:</label>
                <input class="form-control form-rounded" type="email" value="{{ $user_info->email }}"  name="email" class="" placeholder="ex. juandelacruz@gmail.com">
                <span class="error" style="color: red;">@error('email'){{ $message }} @enderror</span>
            </div>
            <br>

            <div class="left">
                <label for="address" class="" >Address:</label>
                <input class="form-control form-rounded" type="text" value="{{ $user_info->address }}"  name="address" class="" placeholder="ex. sampaloc apalit pampanga">
                <span class="error" style="color: red;">@error('address'){{ $message }} @enderror</span>
            </div>
            <br>

            <div class="left">
                <label for="phone_number" class="" >Phone No.:</label>
                <input class="form-control form-rounded" type="number" value="{{ $user_info->phone_number }}"  name="phone_number" class="" placeholder="ex. 09xxxxxxxxx">
                <span class="error" style="color: red;">@error('phone_number'){{ $message }} @enderror</span>
            </div>
            <br>

            <div class="left">
                <label for="body_temp" class="" >Body Temperature:</label>
                <input class="form-control form-rounded" type="number" value="{{ $user_info->body_temp }}"  name="body_temp" class="" placeholder="ex. 36.5">
                <span class="error" style="color: red;">@error('body_temp'){{ $message }} @enderror</span>
            </div>
            <br>

            <div class="left">
                <label for="age" class="" >Age:</label>
                <input class="form-control form-rounded" type="number" value="{{ $user_info->age }}"  name="age" class="" placeholder="ex. 19">
                <span class="error" style="color: red;">@error('age'){{ $message }} @enderror</span>
            </div>
            <br>

                <button class="btn-lg btn-dark custom-button form-rounded mt-4 mb-4" type="submit" value="submit" class="">Submit</button>

            </form>

        </div>
        <div class="">
            <input type="checkbox" id="check" name="check" value="agree">
            <label for="check"> check if  you agree.</label><br><br>
        </div>

            <a>By signing up, you agree to</a><br>
            <a class="text-danger" href="/user-terms-condition">Terms of Service</a> and 
            <a class="text-danger" href="/user-privacy-policy">Privacy Policy.</a>

            <div class="container mt-3 mb-3">
                <a class="btn btn-dark form-rounded custom-button1" href="/"><h5>Back</h5></a>
            </div>
        </div>
    </div>
</body>
</html>

@endsection