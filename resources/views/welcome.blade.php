<x-layout layout="BlogH72" header="Benvenuti sul Blog H72" icon="https://www.pinclipart.com/picdir/big/564-5647199_transparent-home-icon-clipart-circle-transparent-home-icon.png">
    @if (session('gameCreated'))
        <div class="alert alert-success text-center">
            {{session('gameCreated')}}
        </div>
    @endif
    @if (session('emailSent'))
        <div class="alert alert-success text-center">
            {{session('emailSent')}}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img class="img-fluid" src="https://pbs.twimg.com/media/FItULTKVEAIe-6X.jpg:large" alt="img">
                <h2 class="text-white display-1 text-center my-5">Lorem Ipsum</h2>
                <p class="text-white display-5 my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, ipsam? Aut error incidunt magnam assumenda quisquam id, provident pariatur officiis ab odio exercitationem tempora praesentium possimus iusto modi rem harum?</p>
            </div>
        </div>
    </div>
</x-layout>