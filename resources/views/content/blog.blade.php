@extends('layouts.main')

@section('content')

    @foreach($blogPost as $post)
        <article class="mb-2 border-bottom">
            <h2>
                <a href="/posts/{{ $post->a_slug }}">{{ $post->a_title }}</a>
            </h2>
            <h5>By : <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>, created at : {{ $post->created_at }}</h5>
            <p>{{ $post->a_excerpt }}</p>
        </article>
    @endforeach

@endsection()