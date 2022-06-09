<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica l'articolo: {{ $article->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <x-editForm :article="$article" />
            </div>
        </div>
    </div>
</x-layout>
