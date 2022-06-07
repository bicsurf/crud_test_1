<x-layout>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6">
                <h1>Crea il tuo Articolo</h1>
                {{-- Form di inserimento annuncio --}}
                <form method="post" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Testo dell'annuncio</label>
                        <textarea name="body" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia!</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
