@extends('layouts.main')
@section('container')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <h5>By <a href="/blog?author={{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/blog?category={{$post->category->slug}}">{{ $post->category->name }}</a></h5>
                <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="card-img-top img-fluid" alt="{{$post->category->name}}">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/blog" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>

@endsection
