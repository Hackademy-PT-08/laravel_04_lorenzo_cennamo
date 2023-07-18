<div class="card" style="width: 18rem;">
    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-user"></i>{{$brand}} {{$name}}</h5>
        {{--@if (Route::currentRouteName() == 'products') @endif--}}
        <a href="{{ route('product-detail', ['id' => $id]) }}" class="btn btn-primary">Dettaglio prodotto</a>
    </div>
</div>