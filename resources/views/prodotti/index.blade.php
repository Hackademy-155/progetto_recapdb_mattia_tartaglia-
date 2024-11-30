<x-layout>
    <div class="container-fluid my-5">
        <div class="row text-center justify-content-center">
            <div class="col-12 col-md-6">
                <h1>Index</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row">
            @if (count($prodotti )>0)
            @foreach ($prodotti as $prodotto)
            <div class="col-12 col-md-6">
                <x-card :prodotto="$prodotto" />
            </div>
            @endforeach
            @else
            <h3>Niente da vedere. Inserisci qualcosa</h3>
            @endif
            
        </div>
    </div>
</x-layout>