@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $selectedArticle->a_title }}</h1>
                <p>
                    By : <a href="/blog?getAuthor={{ $selectedArticle->author->username }}" class="text-decoration-none">{{ $selectedArticle->author->name }}</a>
                    , in <a href="/blog?getCategory={{ $selectedArticle->category->c_slug }}" class="text-decoration-none">{{ $selectedArticle->category->c_name }}</a>
                </p>

                <img src="https://source.unsplash.com/1200x400?{{ $selectedArticle->category->c_name }}" class="img-fluid" alt="https://source.unsplash.com/500x400?{{ $selectedArticle->category->c_name }}">

                <article class="my-3 fs-5">
                    {!! $selectedArticle->a_body !!}
                </article>

                <a class="btn btn-info" href="/blog">back to post</a>
            </div>
        </div>
    </div>

@endsection()