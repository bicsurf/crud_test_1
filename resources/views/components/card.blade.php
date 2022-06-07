<div class="card">
    {{-- con Storage::url($article->img) indichiamo il percorso da dove deve andare a pescare l'immagine dell'articolo --}}
    <img src="{{  Storage::url($article->img) }}" class="card-img-top" alt="{{ $article->title }}">
    <div class="card-body">
        <h5 class="card-title my-4">{{ $article->title }}</h5>
        <p class="card-text my-4">{{ $article->body }}</p>
        <a href="#" class="btn btn-primary">Guarda l'annuncio</a>
    </div>
</div>
