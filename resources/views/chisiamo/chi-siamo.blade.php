<x-layout layout="BlogH72-Chi siamo?" header="Blog H72: Chi siamo?" icon="https://th.bing.com/th/id/R.4022af7001c4ccb6a78330bd3142c18f?rik=LAmrJaQFSaW8ZA&riu=http%3a%2f%2fwww.freeiconspng.com%2fuploads%2fabout-us-icon-15.jpg&ehk=GS0%2fdN89lBfNgz54LL7jsLiva9YxQMIyU7YtgjC9kb0%3d&risl=&pid=ImgRaw&r=0">


    <div class="container my-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="text-white display-1 text-center mb-5">Lorem Ipsum</h2>
                <p class="text-white display-6 my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, ipsam? Aut error incidunt magnam assumenda quisquam id, provident pariatur officiis ab odio exercitationem tempora praesentium possimus iusto modi rem harum?</p>
            </div>  
        @foreach($persone as $persona)
            <div class="col-12 col-md-3 my-3 ">
                <div data-aos="fade-down" data-aos-delay="{{ $persona['delay'] }}" class="card cardchisiamo ">
                    <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $persona['name'] }}</h5>
                        <a href="{{ route('dettagli', ['id' => $persona['id']] ) }}" class="btn btn-primary">Maggiori dettagli</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>

</x-layout>