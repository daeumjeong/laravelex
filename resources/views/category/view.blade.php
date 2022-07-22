@extends('layouts.forum')

@section('content')
    <div class="container">

        <form method="POST" action="/category/{{$category->id}}/update">
            @method('PUT')
            @csrf

            <div class="row my-3">
                <div class="col-12">
                    <input type="text" class="form-control" name="title" value="{{$category->title}}">
                </div>
            </div>

            <div class="row my-3">
                <div class="col-12">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                        <button class="btn btn-secondary me-md-2" type="submit">Update</button>
                    </div>
                </div>
            </div>


        </form>

        <form method="POST" action="/category/{{$category->id}}/delete">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>

    </div>
@endsection
