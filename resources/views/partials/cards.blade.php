<section class="container">
    <h2>{{ $title }}</h2>
    <div class="cards">
        @foreach ($array as $item)
            <div class="card">
                <img src="{{ $item->src }}" >
                <div class="card-text">
                    <h3>{{ $item->destinazione }}</h3>  
                    <p><i class="fas fa-hotel"></i>{{ $item->struttura }}</p>
                    <p> <i class="fas fa-moon"></i> {{ $item->n_notti }}</p>   
                    <p>{{ $item->prezzo }} {!! "&euro;/ A persona" !!}</p>
                    <p>{{ $item->descrizione }}</p> 
                </div>
            </div>
        @endforeach
    </div>
</section>