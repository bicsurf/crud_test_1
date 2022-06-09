<x-layout>
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="font-monospace text-warning">{{ $article->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6">
                <p>{{ $article->body }}</p>
                <img src="{{ Storage::url($article->img) }}" alt="immagine articolo nel dettaglio" class="w-75">
            </div>
        </div>
    </div>
</x-layout>