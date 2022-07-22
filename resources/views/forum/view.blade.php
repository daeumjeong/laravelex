@extends('layouts.forum')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 border border-1 mt-5">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cumque distinctio, dolorem impedit ipsam natus odit quae quidem saepe veritatis? Fugiat iste libero magni nesciunt nulla provident quas quo rerum. Doloribus, ducimus eaque esse eum, illo illum ipsum iusto, laborum mollitia nulla porro possimus quo sequi sunt suscipit totam voluptatem.</p>
                <hr>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <button class="btn btn-secondary me-md-2" type="button">Edit</button>
                    <button class="btn btn-danger" type="button">Delete</button>
                </div>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button class="btn btn-primary" type="button">좋아요</button>
                </div>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">A second item</li>
                    <li class="list-group-item list-group-item-action">A third item</li>
                    <li class="list-group-item list-group-item-action">A fourth item</li>
                    <li class="list-group-item list-group-item-action">And a fifth one</li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row my-3">
            <div class="col-12">
                <input type="text" class="form-control">
            </div>
            <div class="col-12 mt-3">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="button">Submit</button>
                </div>
            </div>
        </div>
    </div>

@endsection
