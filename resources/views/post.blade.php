
@extends('layouts.main')

@section('container')
<article class="mb-5">
    <div class="container mb-5 text-center">
         <h2>{{ $post["title"] }}</h2>
         <h5>{{ $post["author"] }}</h5>
    </div>
    <div class="container text-justify">
         <p text-justify>{!! $post["detail"] !!}</p>
    </div>
</article>

<p><a href="/" class="btn btn-primary">Back to Home</a></p>
@endsection