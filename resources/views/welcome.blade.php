<x-layout>
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="font-monospace text-warning">Tutti gli articoli online</h1>
            </div>
        </div>
    </div>

    {{-- Sezione dedicata al componente card che cicla tutti gli annunci creati --}}
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                {{-- con :nome-nome della variabile- gli passiamo tutto l'articolo anziché specificare ogni singolo campo --}}
                <x-card :article="$article" />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>