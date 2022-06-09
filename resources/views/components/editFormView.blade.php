{{-- Form di modifica annuncio --}}
<form method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" value="{{ $article->title }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Testo dell'annuncio</label>
        <textarea name="body" class="form-control" cols="30" rows="5">{{ $article->body }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Immagine</label>
        <input type="file" class="form-control" name="img">
        <img src="{{ Storage::url($article->img) }}" alt="immagine articolo da modificare" class="w-25">
    </div>
    <button type="submit" class="btn btn-primary">Invia!</button>
</form>
