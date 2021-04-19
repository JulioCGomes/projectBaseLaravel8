<a href="{{ route('post.create') }}">Novo Posto</a>

<hr>

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<h1>Post</h1>

@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
    <a href="{{ route('post.show', ['id' => $post->id]) }}">
        ver post
    </a>
    <hr>
@endforeach