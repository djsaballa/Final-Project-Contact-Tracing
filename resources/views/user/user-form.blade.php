
@extends('layouts.layout')

@section('content')

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
            <form action="">
            
            <input type="hidden" value="" name="id" >
                            
            <label for="name" class="" >Name:</label>
            <input type="text" value=""  name="name" class="" placeholder="Ex. juan dela cruz"><br>

            <label for="email" class="" >Email:</label>
            <input type="email" value=""  name="email" class="" placeholder="Ex. juandelacruz@gmail.com"><br>

            <label for="address" class="" >Address:</label>
            <input type="text" value=""  name="address" class="" placeholder="type your address..."><br>

            <label for="number" class="" >Phone No.:</label>
            <input type="number" value=""  name="number" class="" placeholder="type your no."><br>

            <label for="temperature" class="" >Body Temperature:</label>
            <input type="number" value=""  name="temperature" class="" placeholder="type your body temp..."><br>

            <label for="age" class="" >Age:</label>
            <input type="number" value=""  name="age" class="" placeholder="type your age..."><br>

            <button type="submit" value="" class="">Submit</button>

            </form>

            <input type="checkbox" id="check" name="check" value="agree">
            <label for="check"> check if  you agree.</label><br><br>

            <a>By signing up, you agree to</a><br>
            <a href="/user-terms-condition">Terms of Service &nbsp;&nbsp;</a>and&nbsp;&nbsp;<a href="/user-privacy-policy">Privacy Policy.</a>
        </div>
    </div>

@endsection