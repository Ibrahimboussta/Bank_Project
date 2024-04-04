<div>
    @foreach (Auth::user()->cards as $card)
    
    <div class="card">
        <div class="card__front card__part">
            <img class="card__front-square card__square"
                src="https://static.vecteezy.com/system/resources/previews/009/400/645/non_2x/sim-card-clipart-design-illustration-free-png.png">
            <img class="card__front-logo card__logo" src="{{ asset('img/logo1.png') }}">
            <p class="card_numer">{{ $card->card_number }}</p>
            <div class="card__space-75">
                <span class="card__label">Card holder</span>
                <p class="card__info">{{ $card->user->name }}</p>
            </div>
            <div class="card__space-25">
                <span class="card__label">Expires</span>
                <p class="card__info">{{ \Carbon\Carbon::parse($card->date_expiration)->format('y/m') }}</p>
            </div>
        </div>
        <div class="card__back card__part">
            <div class="card__black-line"></div>
            <div class="card__back-content">
                <div class="card__secret">
                    <p class="card__secret--last">{{ $card->cvc }}</p>
                </div>
                <img class="card__back-square card__square" src="https://image.ibb.co/cZeFjx/little_square.png">
                <img class="card__back-logo card__logo" src="{{ asset('img/logo1.png') }}">
            </div>
        </div>
    </div>
@endforeach

</div>