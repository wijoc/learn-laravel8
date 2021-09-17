@extends('layouts.main')

@section('content')

    @foreach($blogPost as $post)
        <article class="mb-2 border-bottom">
            <h2>
                <a href="/posts/{{ $post['slug'] }}">{{ $post['post_title'] }}</a>
            </h2>
            <h5>By : {{ $post['post_author'] }}</h5>
            <p>{{ $post['post_text'] }}</p>
        </article>
    @endforeach

@endsection()