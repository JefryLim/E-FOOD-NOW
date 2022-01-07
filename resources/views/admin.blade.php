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
<nav class="navbar navbar-expand-lg navbar-dark static-top" 
    style="background-color: black; 
            border-color:#87ae45;
            border-style:solid;
            margin-bottom:20px;">
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
          <a class="nav-link active" href="{{route('logout')}}">Log Out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-white" href="#">{{Auth::user()->name ?? ''}}</a>
          <p ></p>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="d-flex justify-content-center">
    <h2>Add Item</h2>
    <form action="/add" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name</label>
        <br>
        <input type="text" name="name" id="name">
        <br>

        <label for="ingredients">Ingredients</label>
        <br>
        <textarea name="ingredients" id="ingredients" cols="30" rows="5"></textarea>
        <br>

        <label for="procedure">Procedure</label>
        <br>
        <textarea name="procedure" id="procedure" cols="30" rows="5"></textarea>
        <br>

        <label for="image">Image</label>
        <br>
        <input type="file" name="image" id="image">
        <br><br>

        <input type="submit" value="Add">
        <br>
    </form>

    <h2>Update Item</h2>
    <form action="/update" method="POST">
        @csrf
        <label for="name">Name</label>
        <br>
        <input type="text" name="name" id="name">
        <br>

        <label for="n_name">New Name</label>
        <br>
        <input type="text" name="n_name" id="n_name">
        <br>

        <label for="n_ingredients">Ingredients</label>
        <br>
        <textarea name="n_ingredients" id="n_ingredients" cols="30" rows="5"></textarea>
        <br>

        <label for="n_procedure">Procedure</label>
        <br>
        <textarea name="n_procedure" id="n_procedure" cols="30" rows="5"></textarea>
        <br>

        <input type="submit" value="Update">
        <br>
    </form>

    <h2>Delete Item</h2>
    <form action="/delete" method="POST">
        @csrf
        <label for="name">Name</label>
        <br>
        <input type="text" name="name" id="name">
        <br>
        <input type="submit" value="Delete">
        <br>
    </form>
</div>

<footer class="fixed-bottom p-1" style="background-color: #87ae45;">
        <p style="color:white;font-weight:bold;text-align:center;margin:2px;">&copy; E-Food Now 2021</p>
    </footer>
    
</body>