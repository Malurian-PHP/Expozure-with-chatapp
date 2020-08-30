@extends('layouts.schema')

@section('content')

<div class="main" id="app">
<chat-app></chat-app>
    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="signup-container">
            <div class="signup-content">
            <form method="POST" id="signup-form" action="{{ route('login') }}" class="signup-form">
                        @csrf
                    <h2 class="form-title">Login</h2>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Sign In"/>
                    </div>
                </form>
                <p class="loginhere">
                    Don't have an account ? <a href="{{ url('/sign') }}" class="loginhere-link">Register here</a>
                </p>
            </div>
        </div>
    </section>


</div>


@endsection
