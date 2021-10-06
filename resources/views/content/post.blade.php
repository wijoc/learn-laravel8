@extends('layouts.main')

@section('content')

    <article>
        <h2>{{ $selectedPost->a_title }}</h2>
        <h5>By : <a href="/author/{{ $selectedPost->author->username }}" class="text-decoration-none">{{ $selectedPost->author->name }}</a> in <a href="/category/{{ $selectedPost->categories->c_slug }}">{{ $selectedPost->categories->c_name }}</a></h5>
        <p>{!! $selectedPost->a_body !!}</p>
    </article>

    <a class="btn btn-info" href="/blog">back to post</a>

@endsection()