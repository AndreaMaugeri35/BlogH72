<x-layout layout="Aggiungi il tuo gioco" header="Aggiungi il tuo gioco" icon="https://www.pinclipart.com/picdir/big/564-5647199_transparent-home-icon-clipart-circle-transparent-home-icon.png">
    
    <div class="container my-5">
        <div class="row justify-content-center">
            {{-- <h2 class="text-white display-1 text-center mb-5">Lorem Ipsum</h2> --}}
                <p class="text-white display-5 my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, ipsam? Aut error incidunt magnam assumenda quisquam id.</p>
            <div class="col-12 col-md-8">

                <form method="POST" action="{{route('game.store')}}" class="shadow p-5 bg-white" enctype="multipart/form-data">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Nome del gioco</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                    </div>
                    <div class="mb-3">
                        <label for="producer" class="form-label">Produttore</label>
                        <input type="text" name="producer" class="form-control" id="producer" value="{{old('producer')}}">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno di uscita</label>
                        <input type="number" name="year" class="form-control" id="year" value="{{old('year')}}">
                    </div>
                    <div class="mb-3">
                        <label for="review" class="form-label">Recensione</label>
                        <textarea name="review" id="descpription" cols="30" rows="7" class="form-control">{{old('review')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Inserisci immagine</label>
                        <input type="file" name="cover" class="form-control" id="cover">
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Inserisci Gioco</button>
                  </form>

            </div>
        </div>
    </div>

</x-layout>