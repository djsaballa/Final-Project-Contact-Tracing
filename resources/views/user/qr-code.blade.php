
@extends('layouts.layout')

@section('content')

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
            <h1>We Detect</h1>
            <h4>contact tracing</h4>   
            <br>
            <div class="visible-print text-center">
             
             <img src="https://api.qrserver.com/v1/create-qr-code/?data=jordan&amp;size=100x100" alt="" title="" id="user_qr"/>
            
            </div>
            <br>
            <h3>qr_id</h3>
            <br>
            <h2>Thank You!</h2>
            <br>
            <p>You have successfully <br>
            submitted your information</p>
            <br>
            <br>
            <a href="/">
                <button type="submit"class="">Exit</button>
            </a>
            <br>
            <a href="/user-user-form"class="">Return</a>


        </div>
    </div>

@endsection