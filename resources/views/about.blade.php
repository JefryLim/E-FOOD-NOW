<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
<body class="bg-light">
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
          <a class="nav-link" aria-current="page" href="/welcome">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"href="/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">Log Out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-white" href="#">{{Auth::user()->name ?? ''}}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="d-flex flex-row" style="margin:100px;background-color:white;padding:15px;
box-shadow: 5px 5px 5px grey;">
<img src="/assets/logo.png" width="45%" height="60%" alt="..." height="36" style="margin-right: 20px;">
<div class="col-lg-6" style="margin-top:20px;">
        <h1 style="font-weight: bold;">About <span style="color:#87ae45;">E-Food Now</span></h1>
        <p style="text-align:justify;">E-Food Now adalah sebuah website yang menyediakan berbagai 
            jenis masakan makanan sehat dan low kalori. Di mana user bisa belajar memasak melalui 
            tahapan yang telah di buat oleh E-Food Now. Bukan hanya itu E-Food Now juga memberikan 
            informasi seputar tentang bahan" sehingga user bukan hanya belajar cara memasak namun 
            juga mengetahui produk" yang di gunakan oleh user itu berguna untuk apa.
        </p>
        <a href="/welcome">
            <button class="btn"style="border-radius:6px;
                        background-color:black;
                        color:white;
                        font-weight:bold;
                        border-color:white;
                        font-size:18px;">
            Explore E-Food Now</button></a>
        
      </div>  
</div>


<div 
  style=
  "margin-bottom: 80px; 
  margin-top : 80px; 
  margin-left: 200px; 
  margin-right: 200px;
  background-color:white;
  padding:15px;
  box-shadow: 5px 5px 5px grey;">

  <h1 style="font-weight: bold; font-size:40px;margin-left:435px;margin-bottom:15px;">Contact <span style="color:#87ae45;">Us</span></h1>
  <img src="/assets/logo.png" width="30%" height="40%" alt="..." height="36"
  style="margin-left:380px;">

  <div class="container" style="margin-top: 30px; margin-left:200px;">

      <div class="d d-flex">
        <div style="margin-right: 50px;">
            <i class="bi bi-telephone-fill" style="font-size:30px;"></i>
            <h3 style="font-weight: bold;">Phone</h3>
            <p>+62 812 6893 0080</p>
            <p>+62 812 6836 9581</p>
        </div>

        <div style="margin-right: 50px;">
            <i class="bi bi-envelope-fill" style="font-size:30px;"></i>
            <h3 style="font-weight: bold;">Email</h3>
            <p>efoodnow@gmail.com</p>
        </div>

        <div>
            <i class="bi bi-share-fill" style="font-size:30px;"></i>
            <h3 style="font-weight: bold;">Our Social Media</h3>
            <a href=""><i class="bi bi-instagram"style="font-size:20px;"></i></a>
            <a href=""><i class="bi bi-facebook" style="font-size:20px;"></i></a>
            <a href=""><i class="bi bi-youtube" style="font-size:20px;"></i></a>
        </div>


      </div>

      
    
  </div>

</div>







<footer class="fixed-bottom p-1" style="background-color: #87ae45;">
        <p style="color:white;font-weight:bold;text-align:center;margin:2px;">&copy; E-Food Now 2021</p>
    </footer>
    
</body>