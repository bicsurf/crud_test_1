<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Testo dell'annuncio</th>
            <th scope="col">Creato:</th>
            <th scope="col">Edita annuncio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->body }}</td>
                <td>{{ $article->created_at->diffForHumans() }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning me-3">Modifica
                            annuncio</a>
                        {{-- form per la cancellazione dal DB di un annuncio --}}
                        <form action="{{ route('articles.delete', $article->id) }}" method="post">
                            @csrf
                            {{-- con 'method' diciamo che vogliamo si fare un form di tipo post ma finalizzato alla cancellazione dell'articolo --}}
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
