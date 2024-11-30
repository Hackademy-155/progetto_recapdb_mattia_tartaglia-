<x-layout>
    <div class="container-fluid my-5">
        <div class="row text-center justify-content-center">
            <div class="col-12 col-md-6">
                <h1>Create</h1>
            </div>
        </div>
    </div>
    <div class="container my-5 p-5 shadow">
        <div class="row text-center justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('prodotti.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="dev" class="form-label">Sviluppatore</label>
                        <input type="text" name="dev" class="form-control" id="dev">
                    </div>
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Publisher</label>
                        <input type="text" name="publisher" class="form-control" id="publisher">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno di uscita</label>
                        <input type="number" name="year" class="form-control" id="year">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" name="price" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Copertina</label>
                        <input type="file" name="cover" class="form-control" id="cover">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>            
</x-layout>