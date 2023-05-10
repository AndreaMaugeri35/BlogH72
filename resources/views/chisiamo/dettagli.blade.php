<x-layout layout="Chi siamo?-{{ $persona['name'] }} " header="{{ $persona['name'] }}" icon="https://th.bing.com/th/id/R.4022af7001c4ccb6a78330bd3142c18f?rik=LAmrJaQFSaW8ZA&riu=http%3a%2f%2fwww.freeiconspng.com%2fuploads%2fabout-us-icon-15.jpg&ehk=GS0%2fdN89lBfNgz54LL7jsLiva9YxQMIyU7YtgjC9kb0%3d&risl=&pid=ImgRaw&r=0">

    <div class="container my-5 sec1" data-aos="flip-left">
        <div class="row  justify-content-center">            
            
            <div class="col-12 col-md-6">               
                <div class="card">
                    <img src="https://picsum.photos/600" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $persona['name'] }}</h5>
                        <p class="card-title">{{ $persona['descrizione'] }}</p>
                        <a href="{{ route('chi-siamo') }}" class="btn btn-primary">Torna indietro</a>
                    </div>
                </div>           
            </div>    
    
        </div>
    </div>


</x-layout>