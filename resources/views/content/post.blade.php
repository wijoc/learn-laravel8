@extends('layouts.main')

@section('content')

    <article>
        <h2>{{ $selectedPost->a_title }}</h2>
        <h5>By : {{ $selectedPost->a_author }}</h5>
        <p>{!! $selectedPost->a_body !!}</p>
    </article>

    <a class="btn btn-info" href="/blog">back to post</a>

@endsection()