<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
            body {
                display: flex;
                align-items: center;
                padding-top: 120px;
                padding-bottom: 40px;
                background-color: #87ae46;
            }
            .form-signin {
                width: 100%;
                max-width: 380px;
                padding: 15px;
                margin: auto;
            }
            .form-signin .checkbox {
                font-weight: 400;
            }
            .form-signin .form-floating:focus-within {
                z-index: 2;
            }
            .form-signin input[type="text"] {
                margin-bottom: 5px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            .form-signin input[type="email"] {
                margin-bottom: 5px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            .form-signin input[type="password"] {
                margin-bottom: 5px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            .form-signin button{
                margin-top: 5px;
            }
            .form-signin a{
                text-decoration: none;
            }
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
    </head>
        
    @yield('isi')

</html>