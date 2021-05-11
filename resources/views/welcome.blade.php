@extends('layouts.layout')

@section('content')

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
            <a href="/admin-welcome">
                <button type="submit" class="choice">ADMIN</button>
            </a>
            <a href="/user-welcome">
                <button type="submit"class="choice">USER</button>
            </a>
            
        </div>
    </div>

@endsection
