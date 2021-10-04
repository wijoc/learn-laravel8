@extends('layouts.main')

@section('content')

    <h2>Categories</h2>
    <ul>
        @if(count($ctgrData) > 0)
            @foreach($ctgrData as $row)
                <li>
                    <a href="/category/{{ $row->c_slug }}">{{ $row->c_name }}</a>
                </li>
            @endforeach
        @else
                <h4 class="alert alert-warning"> Data tidak tersedia</h4>
        @endif
    </ul>

@endsection()