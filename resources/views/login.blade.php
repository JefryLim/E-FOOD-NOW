@extends('masterloginregis')
@section('title', 'Login')
@section('isi')
    <body class="text-center">
        <form class="form-signin" method="POST" action="" style="background-color: white;
                border-radius:10px;">
            @csrf
            <img src="/assets/logo.png" width="70%" height="60%" alt="..." height="36" style="margin-bottom: 3px;">
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="Create_account mb-3">
                <label>
                    <a href="/register" class="text-primary" style="font-weight: bold;">Create Account</a>
                </label>
            </div>
            
            <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>
            <p class="mt-5 mb-3 text-dark" style="font-weight: bold;">&copy; E-Food Now 2021</p>
        </form>  
    </body>
@endsection