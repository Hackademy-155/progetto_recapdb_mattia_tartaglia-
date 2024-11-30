<x-layout>
    <div class="container-fluid my-5">
        <div class="row text-center justify-content-center">
            <div class="col-12 col-md-6">
                <h1>Show</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($prodotto->cover)}}" alt="">
                <h5>{{$prodotto->title}}</h5>
                <h5>{{$prodotto->dev}}</h5>
                <h5>{{$prodotto->publisher}}</h5>
                <h5>{{$prodotto->year}}</h5>
                <h5>{{$prodotto->price}}</h5>
            </div>
        </div>
    </div>
    
</x-layout>