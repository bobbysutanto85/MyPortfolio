
@extends('layouts.main')

@section('container')

    <h2 align="center">Portfolio</h2>
    <br><br>
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $post["img"] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post["title"] }}</h5>
                            <p class="card-text">{!! $post["body"] !!}</p>
                            <a href="/{{ $post["slug"] }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection