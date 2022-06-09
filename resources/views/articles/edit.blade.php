<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="font-monospace text-warning text-center">Modifica l'articolo: <span class="text-decoration-underline text-secondary fst-italic">{{ $article->title }}</span></h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <x-editFormView :article="$article" />
            </div>
        </div>
    </div>
</x-layout>
