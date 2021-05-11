
@extends('layouts.layout')

@section('content')

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
            <h1>We Detect</h1>   
            <br>
             <div class="visible-print text-center">
                <h1> Laravel QR Code Generator Example </h1>
                
                {!! QrCode::size(250)->generate('codingdriver.com'); !!}
            </div>
            
        </div>
    </div>

@endsection