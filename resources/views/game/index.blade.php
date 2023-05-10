<x-layout header="I nostri Giochi" layout="Lista giochi" icon="https://www.pinclipart.com/picdir/big/564-5647199_transparent-home-icon-clipart-circle-transparent-home-icon.png">

    <div class="container my-5">
        <div class="row justift-content-center">
            @foreach ($games as $game)
            <div 
            @if (($game->id)%2==1)
                data-aos="flip-left"      
                @else
                data-aos="flip-right"
                @endif       
                data-aos-delay="{{(int)$game->id*200}}" 
                class="col-12 col-md-4 my-3 mx-auto">
                        <div class="card">
                            <img src="{{Storage::url($game->cover)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title fs-4">{{$game->title}}</h5>
                            <h6 class="fst-italic fs-4">{{$game->producer}}</h6>
                            <p class="card-text fs-4 fw-bold">{{$game->year}}</p>
                            <p class="card-text fs-4">{{$game->review}}</p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>

</x-layout>