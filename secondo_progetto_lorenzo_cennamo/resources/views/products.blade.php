<x-layout>
    <x-slot name="titolo">Elenco prodotti</x-slot>
    
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            @foreach($tech as $tech)
                <div class="col-12 col-md-3">
                    <x-card
                    id="{{$tech['id']}}"
                    name="{{$tech['name']}}"
                    brand="{{$tech['brand']}}"
                    price="{{$tech['price']}}"
                    route="products"
                    />
                </div>
            @endforeach
        </div>
    </div>

</x-layout>