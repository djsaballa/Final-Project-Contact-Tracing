
@extends('layouts.layout')

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

            <div class="font mt-5 mb-5">
                <h1 class="font" style="font-size: 35px;">WE DETECT</h1>
            </div>

            <br>
            <div class="visible-print text-center">
            @foreach ($user_info as $user_info) 
                    <img src="https://api.qrserver.com/v1/create-qr-code/?data={{$user_info->name}} &amp;size=200x200" alt="" title="CTS" id="user_qr"/>
                    <p>{{$user_info->id}}</p>
                @endforeach
                
            </div>

            <h1 class="sora"><strong>Thank You!</strong></h1>
            <br>
            <p class="poppins"><strong>You have successfully <br>
            submitted your information</strong></p>
            <br>
            <br>
            <a href="/">
                <button class="btn btn-dark btn-lg form-rounded custom-button mb-4  " type="submit"class="">Exit</button>
            </a>
            <br>
<<<<<<< HEAD
            <a href="/user-user-form"class="">Return</a>
        </div>
    </div>
=======
            <a href="/user-user-form"class="text-dark poppins"><strong>Return</strong></a>


</body>
</html>

>>>>>>> 229673827775a889ae67bba26622279d79cc045f

@endsection