
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
                <div class="container">
                    <div class="left">              
                        <label for="name"><strong>Name:</strong></label>
                        <input class="form-control form-rounded" type="text" value="{{ $user_info->name }}"  name="name" class="" placeholder="ex. juan dela cruz"><br>
                    </div> 

                    <div class="left">
                        <label for="email" class="" ><strong>Email:</strong></label>
                        <input class="form-control form-rounded" type="email" value="{{ $user_info->email }}"  name="email" class="" placeholder="ex. juandelacruz@gmail.com"><br>
                    </div>

                    <div class="left">
                        <label for="address" class="" ><strong>Address:</strong></label>
                        <input class="form-control form-rounded" type="text" value="{{ $user_info->address }}"  name="address" class="" placeholder="ex. sampaloc apalit pampanga"><br>
                    </div>

                    <div class="left">
                        <label for="phone_number" class="" ><strong>Phone No.:</strong></label>
                        <input class="form-control form-rounded" type="number" value="{{ $user_info->phone_number }}"  name="phone_number" class="" placeholder="ex. 09xxxxxxxxx"><br>
                    </div>

                    <div class="left">
                        <label for="body_temp" class="" ><strong>Body Temperature:</strong></label>
                        <input class="form-control form-rounded" type="number" value="{{ $user_info->body_temp }}"  name="body_temp" class="" placeholder="ex. 36.5"><br>
                    </div>

                    <div class="left">
                        <label for="age" class="" ><strong>Age:</strong></label>
                        <input class="form-control form-rounded" type="number" value="{{ $user_info->age }}"  name="age" class="" placeholder="ex. 19"><br>
                    </div>

                    <div class="container pb-3">
                        <button class="btn btn-dark btn-lg form-rounded custom-button" type="submit" value="submit" class="">Submit</button>
                    </div>

                    </form>
                </div>
        </div>
        <div class="">
            <input type="checkbox" id="check" name="check" value="agree">
            <label for="check"> check if  you agree.</label><br><br>
        </div>

            <a>By signing up, you agree to</a><br>
            <a class="text-danger" href="/user-terms-condition">Terms of Service</a> and 
            <a class="text-danger" href="/user-privacy-policy">Privacy Policy.</a>
        </div>
    </div>
</body>
</html>

@endsection