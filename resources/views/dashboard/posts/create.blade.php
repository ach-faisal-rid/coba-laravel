@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>create new Posts</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">slug</label>
                <input type="text" name="slug" class="form-control" id="slug" disabled readonly>
            </div>
            <button type="submit" class="btn btn-primary">create post</button>
        </form>
    </div>

    <script>
        const title = document.getElementById('title');
        const slug = document.getElementById('slug');

        title.addEventListener('change', async function() {
            const res = await fetch(`/dashboard/posts/slug?${
                new URLSearchParams({title: this.value})
                    .toString()
            }`);
            const data = await res.json();
            slug.value = data.slug;
            });
    </script>

@endsection
