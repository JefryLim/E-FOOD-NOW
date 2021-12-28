@extends('master')
@section('title', 'Home')

@section('nav')

@section('isi')
<div>
        @foreach($datas as $data)
            <img src="{{Storage::url($data->paths)}}" alt="" width="100px">
            <br>
            {{ $data->name }}
            <br>
            <pre>
            {{ $data->desc }}
            </pre>
            <br>
        @endforeach
</div>
@endsection

@section('footer')