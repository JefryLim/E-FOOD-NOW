@extends('masterloginregis')
@section('title', 'Login')
@section('isi')
    <body class="text-center">
        <form class="form-signin" method="POST" action="">
            @csrf
            <h2 class="h2 mb-3 text-white">Login E-FOOD NOW</h2>
    
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
                    <a href="/register" class="h5 text-white">Create account</a>
                </label>
            </div>
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            <p class="mt-5 mb-3 text-dark">&copy; E-Food Now 2021</p>
        </form>  
    </body>
@endsection