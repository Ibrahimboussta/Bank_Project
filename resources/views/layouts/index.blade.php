<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class=" mt-10 flex justify-between items-center">

        <div id="nav-bar">
            <input id="nav-toggle" type="checkbox" />
            <div class="ms-3" id="nav-header"><a id="nav-title"><i class="fab fa-codepen"></i>
                    GEEKBANK</a>
                <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
                <hr />
            </div>

            <div id="nav-content">
                <div class="nav-button"><i class="fas fa-brands fa-cc-visa"></i><a href="/card/show">My Cards</a></div>
                <div class="nav-button"><i class="fas fa-money-bill-transfer"></i></i><a href="/transfer">Transfer</a>
                </div>
                <div class="nav-button"><i class="fas fa-money-check-dollar"></i><a href="/facture">Pay Services</a>
                </div>
                <div class="nav-button"><i class="fas fa-circle-dollar-to-slot"></i><a href="/loan">Loan</a></div>
                <hr />
                <div class="nav-button"><i class="fas fa-heart"></i><a href="/investment">Investement</a></div>
                <div class="nav-button"><i class="fas fa-chart-line"></i><a href="/crypto">Coin Market</a></div>
                <div class="nav-button"><i class="fas fa-gear"></i><a href="/settings">Settings</a></div>
                <hr />
                <div class="nav-button">
                    <i class="fas fa-right-from-bracket"></i>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>

                <div id="nav-content-highlight"></div>
            </div>
            <input id="nav-footer-toggle" type="checkbox" />

        </div>
    </div>
    @include('layouts.flash')
    <div class="w-full">
        <div class="bg-[#ffc801] py-2 flex justify-end ">
            <div
                class="border-2 flex items-center gap-3 mr-5 py-2 border-[#000] text-white bg-black w-fit px-3 rounded-lg">
                <i class="fa-solid fa-wallet "></i>
                    <h1>{{ Auth::user()->wallet()}} dh</h1>

        <div class="w-full flex flex-col justify-center items-end gap-y-3 ">
            <div class=" py-2 flex justify-end w-[100%] ">
                <div
                    class="border-2 flex items-center gap-3 mr-5 py-2 border-[#ffc801] text-white bg-black w-fit px-3 rounded-lg">
                    <i class="fa-solid fa-wallet "></i>
                    @foreach (Auth::user()->cards as $card)
                        <h1>{{ Auth::user()->wallet += $card->money }} dh</h1>
                    @endforeach
                </div>
            </div>
            @yield('content')

            @include('layouts.flash')
        </div>


</body>

</html>
