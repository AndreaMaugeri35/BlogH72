<x-layout layout="Contatti" header="Contattaci" icon="https://www.pinclipart.com/picdir/big/564-5647199_transparent-home-icon-clipart-circle-transparent-home-icon.png">
    <div class="container my-5">
        <div class="row justify-content-center">
            
             <p class="text-white display-5 my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, ipsam? Aut error incidunt magnam assumenda quisquam id.</p>
            <div class="col-12 col-md-8">
                <div class="container">
                    <form method="POST" action="{{ route('contattaci_submit')}}" class="shadow p-5 bg-white">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session('emailError'))
                                    <div class="alert alert-danger text-center">
                                        {{ session('emailError') }}
                                    </div>
                                @endif

                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome e Cognome</label>
                            <input type="text" name="name" class="form-control" id="name">            
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Indirizzo email</label>
                            <input type="email" name="email" class="form-control" id="email">            
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Messaggio</label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Contattaci</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>