@extends('layouts.main')

@section('content')

    <h2>Categories</h2>

    <div class="containter">
        <div class="row justify-content-center">
            @foreach($ctgrData as $row)
            <div class="col-md-4">
                <a href="/category/{{ $row->c_slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500?{{ $row->c_name }}" class="card-img" alt="{{ $row->c_name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h2 class="card-title flex-fill text-center" style="background-color: rgba(0, 0, 0, 0.5)">
                                {{ $row->c_name }}
                            </h2>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection()