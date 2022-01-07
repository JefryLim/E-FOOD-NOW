@extends('master')
@section('title', 'Home')

@section('nav')

@section('isi')

<main>
  <div class="album py-5 bg-light">
    <div class="container">
    <h1 style="font-weight: bold;">List Menu</h1>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach($datas as $data)
        <div class="col">
          <div class="card shadow-sm" style="align-items: center; width: 400px">
            <svg width="100%" height="20px"></svg>
            <a href="/welcome/{{$data->id}}">
                <img src="{{Storage::url($data->paths)}}" alt="" width="300px" height="300px"
                style="border-radius: 10px;">
            </a>
            <h5 class="card-text" 
              style="margin-top: 5px; margin-bottom:5px; font-weight:bold;">
              {{ $data->name }}</h5>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>

</main>
@endsection

@section('footer')