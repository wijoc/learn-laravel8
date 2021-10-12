@extends('layouts.main')

@section('content')
    <h1 class="mb-5">{{ $page_title }}</h1>
    
    @if($articlesData->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $articlesData[0]->category->c_name }}" class="card-img-top" alt="{{  $articlesData[0]->category->c_name }}">
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/article/{{ $articlesData[0]->a_slug }}" class="text-dark text-decoration-none">{{ $articlesData[0]->a_title }}</a>
                </h3>
                <p><small>
                    By : <a href="/author/{{ $articlesData[0]->author->username }}" class="text-decoration-none">{{ $articlesData[0]->author->name }}</a>
                    , in : <a href="/category/{{ $articlesData[0]->category->c_slug }}" class="text-decoration-none">{{ $articlesData[0]->category->c_name }}</a>

                    <!-- function diffForHumans(), is from carbon library -->
                    <small class="text-muted">{{ $articlesData[0]->created_at->diffForHumans() }}</small>
                    </small>
                </p>
                <p class="card-text">{{ $articlesData[0]->a_excerpt }}</p>
                <a href="/article/{{ $articlesData[0]->a_slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>
    @else
        <p class="text-center fs-3">No post found</p>
    @endif

    <div class="container">
        <div class="row">

            {{-- skip(1), to skip element (in this case 1 element) from obj / arr --}}
            @foreach($articlesData->skip(1) as $article)
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.4)">
                        <a href="/category/{{ $article->category->c_slug }}" class="text-decoration-none text-white">{{ $article->category->c_name }}</a>
                    </div>
                    <img src="https://source.unsplash.com/500x400?{{ $article->category->c_name }}" class="card-img-top" alt="{{ $article->category->c_name }}">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/article/{{ $article->a_slug }}" class="text-dark text-decoration-none">{{ $article->a_title }}</a>
                        </h5>
                        <p>
                            <small class="text-muted">
                                By : <a href="/author/{{ $article->author->username }}" class="text-decoration-none">{{ $article->author->name }}</a>
                                {{ $article->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $article->a_excerpt }}</p>
                        <a href="/article/{{ $article->a_slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

@endsection()