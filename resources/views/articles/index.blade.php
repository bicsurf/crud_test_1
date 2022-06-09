<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="font-monospace text-warning text-center">Tutti gli articoli nel DB</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-table :articles="$articles" />
            </div>
        </div>
    </div>
</x-layout>
