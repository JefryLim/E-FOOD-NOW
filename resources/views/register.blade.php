@extends('masterloginregis')
@section('title', 'Register')
@section('isi')
    <body class="text-center">
        <form class="form-signin" method="POST" action="">
            @csrf
            <h2 class="h2 mb-3 text-white">Register E-FOOD NOW</h2>

            <div class="form-floating">
                <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" id="floatingName" placeholder="Name" value="{{old('name')}}">
                <label for="floatingName">Name</label>
                @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
                @endif
            </div>

            <div class="form-floating">
                <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" id="floatingInput" placeholder="Email" value="{{old('email')}}">
                <label for="floatingInput">Email Address</label>
                @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{$errors->first('email')}}
                </div>
                @endif
            </div>

            <div class="form-floating">
                <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @if($errors->has('password'))
                <div class="invalid-feedback">
                    {{$errors->first('password')}}
                </div>
                @endif
            </div>

            <div class="form-floating">
                <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : ''}}" id="floatingPassword" placeholder="Password Confirmation">
                <label for="floatingPassword">Password Confirmation</label>
                @if($errors->has('password_confirmation'))
                <div class="invalid-feedback">
                    {{$errors->first('password_confirmation')}}
                </div>
                @endif
            </div>
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <p class="mt-5 mb-3 text-dark">&copy; E-Food Now 2021</p>
        </form>  
    </body>
@endsection
