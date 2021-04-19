<h1>Detalhes do Post </h1>

<ul>
    <li><strong>Título:</strong> {{ $post->title }}</li>
    <li><strong>Conteúdo:</strong> {{ $post->content }}</li>
</ul>

<form action="{{ route('post.destroy', $post->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o post</button>
</form>