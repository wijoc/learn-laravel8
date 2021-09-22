@extends('layouts.main')

@section('content')

    <h2>Categories</h2>
    <ul>
        @foreach($ctgrData as $row)
            <li>
                <a href="/category/{{ $row->c_slug }}">{{ $row->c_name }}</a>
            </li>
        @endforeach
    </ul>

@endsection()