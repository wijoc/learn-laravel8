@extends('layouts.main')

@section('content')

    <article>
        <h2>{{ $selectedPost['post_title'] }}</h2>
        <h5>By : {{ $selectedPost['post_author'] }}</h5>
        <p>{{ $selectedPost['post_text'] }}</p>
    </article>

    <a class="btn btn-info" href="/blog">back to post</a>

@endsection()