@extends('layouts.layoutadmin')

@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <h1 style="text-align: center; margin-top: 15px;">We Detect</h1>
        <h3 style="text-align: center;">Contact Tracing</h3>

        <h5 style="text-align: center; margin: 15px;">Admin</h5>

        <form method="POST" action="/admin-login-auth"  style="text-align: center;">
                @if(Session::get('fail'))
                    <div class="alert" style="color: red;">
                        {{ Session::get('fail') }}
                    </div>
                @endif

                @csrf

                <label> Username: </label>
                <input type="text" name="username" placeholder="Enter username" value="{{ old('username') }}"/>
                <br>
                <span class="error" style="color: red;">@error('username'){{ $message }} @enderror</span>
                <br>

                <label> Password: <label>
                <input type="password" name="password" placeholder="Enter password"/>
                <br>
                <span class="error" style="color: red;">@error('password'){{ $message }} @enderror</span>
                <br>

                <button type="submit"> Login </button>
        </form>
        </div>
</div>

@endsection

