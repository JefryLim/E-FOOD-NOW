@extends('master')
@section('title', 'Home')
@section('isi')
<body>

    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark static-top" 
    style="background-color: black; 
            border-color:#87ae45;
            border-style:solid;">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/assets/black.png" width="70%" height="60%" alt="..." height="36">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
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


    <footer class="fixed-bottom p-1" style="background-color: #87ae45;">
        <p style="color:white;font-weight:bold;text-align:center;margin:2px;">&copy; E-Food Now 2021</p>
    </footer>
    
</body>
@endsection