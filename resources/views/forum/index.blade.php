@extends('layouts.forum')

@section('content')

    <div class="container">

        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{url('/')}}/create" class="btn btn-success" type="button">New Post</a>
                </div>

            </div>
        </div>

        <hr>

        <div class="row mt-3">
            <div class="col-12">
                <h4>Movie</h4>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">
                        <a href="{{url('/')}}/1/view">Three Days of the Condor</a>
                        <span class="badge text-bg-info">4</span>
                        <br>
                        <small>2022-07-21 | by dami</small>
                    </li>

                    <li class="list-group-item list-group-item-action">
                        Three Days of the Condor
                        <span class="badge text-bg-info">4</span>
                        <br>
                        <small>2022-07-21 | by dami</small>
                    </li>

                    <li class="list-group-item list-group-item-action">
                        Three Days of the Condor
                        <span class="badge text-bg-info">4</span>
                        <br>
                        <small>2022-07-21 | by dami</small>
                    </li>
                </ul>
            </div>

            <div class="col-12 my-3">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="button" class="btn btn-dark">All Category</button>
                </div>
            </div>
        </div>

        <hr>

        <div class="row mt-5">
            <div class="col-12">
                <h4>Music</h4>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">
                        Three Days of the Condor
                        <span class="badge text-bg-info">4</span>
                        <br>
                        <small>2022-07-21 | by dami</small>
                    </li>

                    <li class="list-group-item list-group-item-action">
                        Three Days of the Condor
                        <span class="badge text-bg-info">4</span>
                        <br>
                        <small>2022-07-21 | by dami</small>
                    </li>

                    <li class="list-group-item list-group-item-action">
                        Three Days of the Condor
                        <span class="badge text-bg-info">4</span>
                        <br>
                        <small>2022-07-21 | by dami</small>
                    </li>
                </ul>
            </div>

            <div class="col-12 my-3">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="button" class="btn btn-dark">All Category</button>
                </div>
            </div>
        </div>

    </div>

@endsection

















