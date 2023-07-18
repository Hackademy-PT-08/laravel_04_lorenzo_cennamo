<x-layout>
    <x-slot name="titolo">Dettaglio</x-slot>
   

    
    <div class="container min-vh-100 my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$tech['brand']}} {{$tech['name']}}</h5>
                        <p class="card-text">Prezzo: {{$tech['price']}}</p>
                        <a href="{{ route('products') }}" class="btn btn-primary">Torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</x-layout>