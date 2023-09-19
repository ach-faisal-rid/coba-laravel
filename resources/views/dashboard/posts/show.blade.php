@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-secondary">
                    <span data-feather="arrow-left"></span>
                    back to all my post</a>
                <a href="" class="btn btn-warning">
                    <span data-feather="edit"></span>
                    edit</a>
                <a href="" class="btn btn-danger">
                    <span data-feather="x-circle"></span>
                    delete</a>

                <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="card-img-top img-fluid" alt="{{$post->category->name}}">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/blog" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
