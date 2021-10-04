@extends('layouts.main')

@section('content')
    <h1 class="mb-5">Article Category : {{ $selectedCtgr }}</h1>
    @foreach($articlesData as $post)
        <article class="mb-2 border-bottom">
            <h2>
                <a href="/posts/{{ $post->a_slug }}">{{ $post->a_title }}</a>
            </h2>
            <h5>By : <a href="#" class="text-decoration-none">{{ $post->users->name }}</a></h5>
            <p>{{ $post->a_excerpt }}</p>
        </article>
    @endforeach

@endsection()