<!DOCTYPE html>
<html lang="en">
<head>
    @include('main.head')
    <title>Login</title>
</head>
<body>
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />


    @include('login.login-nav')

    @include('login.video-bg')

    @include('login.login-form')

@include('main.footer')

</body>
</html>
