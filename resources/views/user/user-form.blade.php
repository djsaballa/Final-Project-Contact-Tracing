
@extends('layouts.layout')

@section('content')

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <h1>WE DETECT</h1>
            <h4>contact tracing</h4>
            <br>  

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

                <button type="submit" value="submit" class="">Submit</button>

            </form>

            <input type="checkbox" id="check" name="check" value="agree">
            <label for="check"> check if  you agree.</label><br><br>

            <a>By signing up, you agree to</a><br>
            <a href="/user-terms-condition">Terms of Service &nbsp;&nbsp;</a>and&nbsp;&nbsp;<a href="/user-privacy-policy">Privacy Policy.</a>
        </div>
    </div>

@endsection