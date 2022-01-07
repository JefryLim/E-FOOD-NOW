<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<style>
    a{
        font-size: 20px;
        font-weight: bold;
        margin-right: 20px;
    }

    .nav-item a:hover{
        background-color: #87ae45;
    }

</style>
<body>
@yield('nav')
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark static-top" 
    style="background-color: black; 
            border-color:#87ae45;
            border-style:solid;">
  <div class="container">
    <a class="navbar-brand" href="/welcome">
      <img src="/assets/black.png" width="70%" height="60%" alt="..." height="36">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/welcome">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">Log Out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-white" href="#">{{Auth::user()->name ?? ''}}</a>
          <p ></p>
        </li>
      </ul>
    </div>
  </div>
</nav>

    @yield('isi')
    
    @yield('footer')
    <footer class=" p-1" style="background-color: #87ae45;">
        <p style="color:white;font-weight:bold;text-align:center;margin:2px;">&copy; E-Food Now 2021</p>
    </footer>
    
</body>
</html> 