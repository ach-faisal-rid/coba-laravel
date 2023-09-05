@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post Category</h1>
    @foreach($categories as $category)
    <ul>
        <li>
            <h5><a href="/categories/{{$category->slug}}">{{ $category->name }}</a></h5>
        </li>
    </ul>
    @endforeach
@endsection
