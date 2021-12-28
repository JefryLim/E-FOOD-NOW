@extends('master')
@section('title', 'Admin')

@section('nav')

@section('isi')
<div class="d-flex justify-content-center">
    <h2>Add Item</h2>
    <form action="/add" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name</label>
        <br>
        <input type="text" name="name" id="name">
        <br>
        <label for="desc">Desc</label>
        <br>
        <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        <br>
        <label for="image">Image</label>
        <br>
        <input type="file" name="image" id="image">
        <br>
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
        <label for="n_desc">New Desc</label>
        <br>
        <textarea name="n_desc" id="n_desc" cols="30" rows="10"></textarea>
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
@endsection

@section('footer')