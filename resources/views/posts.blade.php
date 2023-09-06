@extends('layouts.main')
@section('container')
    @foreach($posts as $post)
        <article class="mb-5 border-bottom pb-3">
            <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{$post-> title}}</a></h2>
            <h5>By: faisal in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
            <p>{{$post->excerpt}}</p>
            <a href="/posts/{{$post->slug}}" class="text-decoration-none">Read More..</a>
        </article>

    @endforeach
@endsection
