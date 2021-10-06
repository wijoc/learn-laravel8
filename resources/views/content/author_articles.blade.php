@extends('layouts.main')

@section('content')
    <h1 class="mb-5">Article by Author : {{ $selectedAuthor }}</h1>
    @foreach($articlesData as $post)
        <article class="mb-2 border-bottom">
            <h2>
                <a href="/posts/{{ $post->a_slug }}">{{ $post->a_title }}</a>
            </h2>
            <h5>By : <a href="#" class="text-decoration-none">{{ $post->author->name }}</a></h5>
            <p>{{ $post->a_excerpt }}</p>
        </article>
    @endforeach

@endsection()