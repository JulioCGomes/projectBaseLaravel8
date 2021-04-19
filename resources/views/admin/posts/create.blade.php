<h1>Cadastra novo post</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
        @endforeach
    </ul>    
@endif

<form action="{{ route('post.store') }}" method="post">
    @csrf
    <input type="text" name="title" id="title" placeholder="Nome do post:" value="{{ old('title')}}">
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo">{{ old('content') }}</textarea>
    <button type="submit">Cadastrar Post</button>
</form>