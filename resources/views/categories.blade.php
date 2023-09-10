@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post Category</h1>

    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4">
                <a href="/categories/{{$category->slug}}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/1200x400?{{$category->name}}" class="card-img-top" alt="{{$category->name}}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-2 fs-5" style="background-color: rgba(255, 59, 70, 0.7)">{{ $category->name }}</h5>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
