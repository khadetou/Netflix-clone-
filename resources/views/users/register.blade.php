@extends('layout')
@section('content')
    <div class="signInContainer">

        <div class="column">

            <div class="header">
                <img src="{{ asset('images/logo.png') }}" title="Logo" alt="Site logo" />
                <h3>Sign Up</h3>
                <span>to continue to Reeceflix</span>
            </div>

            <form method="POST" action='/users'>
                @csrf
                <input type="text" name="firstname" placeholder="First name" required value="{{ old('firstname') }}">
                @error('firstname')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
                <input type="text" name="lastname" placeholder="Last name" required value="{{ old('lastname') }}">
                @error('lastname')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
                <input type="text" name="username" placeholder="Username" required value="{{ old('username') }}">
                @error('username')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
                <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                @error('email')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror

                <input type="email" name="email_confirmation" placeholder="Confirm email" required
                    value='{{ old('email_confirmation') }}'>
                @error('email_confirmation')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
                <input type="password" name="password" placeholder="Password" required>
                @error('password')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
                <input type="password" name="password_confirmation" placeholder="Confirm password" required>
                @error('password_confirmation')
                    <p class="errorMessage">{{ $message }}</p>
                @enderror
                <button type="submit">Submit</button>

            </form>

            <a href="/login" class="signInMessage">Already have an account? Sign in here!</a>

        </div>

    </div>
@endsection
