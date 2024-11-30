<div class="card" style="width: 18rem;">
  <img src="{{Storage::url($prodotto->cover)}}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">{{$prodotto->title}}</h5>
    <h5 class="card-title">{{$prodotto->dev}}</h5>
    <h5 class="card-title">{{$prodotto->publisher}}</h5>
    <h5 class="card-title">{{$prodotto->year}}</h5>
    <h5 class="card-title">{{$prodotto->price}}</h5>
    <a href="{{route('prodotti.show', $prodotto)}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>