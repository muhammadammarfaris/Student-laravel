@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Template · Bootstrap v5.1</title>
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3">Don't have an account? <a href="{{ route('register.index') }}">Sign up here!</a></p>
    </form>
</main>                
</body>
</html>
@endsection
