@extends('layout')
@section('content')
    <div class="signInContainer">

        <div class="column">

            <div class="header">
                <img src="{{ asset('images/logo.png') }}" title="Logo" alt="Site logo" />
                <h3>Sign In</h3>
                <span>to continue to Reeceflix</span>
            </div>

            <form method="POST" action="/users/authenticate">
                @csrf
                <input type="text" name="username" placeholder="Username" required value="{{ old('email') }}">
                @error('email')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror

                <input type="password" name="password" placeholder="Password" required>

                <button type="submit" name="submitButton">SUBMIT</button>

            </form>

            <a href="/register" class="signInMessage">Need an account? Sign up here!</a>

        </div>

    </div>
@endsection
