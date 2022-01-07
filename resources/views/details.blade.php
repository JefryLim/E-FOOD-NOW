@extends('master')
@section('title', 'Home')




@section('nav')

@section('isi')

<main>
    @foreach($details as $details)
    <div style="margin-left:400px; margin-right:400px; margin-top:25px;">
    
        <h1 style="font-weight: bold;">{{$details->name}}</h1>
        <div style="margin-bottom:10px;"> 
            <img src="{{Storage::url($details->paths)}}" alt="" width="350px" height="350px"
            style="border-radius: 10px;">
        </div>
        <h4 style="font-weight: bold;">Bahan-bahan :     </h4>
        <p>{{$details->ingredients}}</p>

        <h4 style="font-weight: bold;">Cara membuat :     </h4>
        <p>{{$details->food_procedure}}</p>

        <a href="/welcome">
            <button style="
                background-color: black; 
                color:white;
                border-radius:10px;
                margin-bottom:5px;
                font-weight:bold;
                font-size: 18px;">
            Back</button></a>
        
    </div>
    @endforeach
    
    
</main>
@endsection

@section('footer')