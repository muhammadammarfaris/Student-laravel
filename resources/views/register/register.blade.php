@extends('layouts.main')

@section('container')

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Register Template · Bootstrap v5.1</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
    <main class="form-signin">
        <form method="POST" action="{{ route('register.store') }}">  
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please register</h1>
            <div class="form-floating">
                <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3"> 
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <p class="mt-5 mb-3">Already have an account? <a href="{{ route('login.index') }}">Sign in here!</a></p>
        </form>
    </main>
</body>
</html>

@endsection
