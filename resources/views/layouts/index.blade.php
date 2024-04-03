<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

        <div class="bg-slate-100 w-64 h-screen shadow-2xl">
            <div class="text-2xl p-4 flex flex-col justify-around items-stert ml-8 h-screen">
                <h1><a href="" class="no-underline hover:underline ">My card</a></h1>
                <h1><a href="" class="no-underline hover:underline ">Transfer</a></h1>
                <h1><a href="" class="no-underline hover:underline ">Pay services</a></h1>
                <h1><a href="" class="no-underline hover:underline ">Facture</a></h1>
                <h1><a href="" class="no-underline hover:underline ">Investement</a></h1>
                <h1><a href="" class="no-underline hover:underline ">Coin Market</a></h1>
                <h1><a href="" class="no-underline hover:underline ">History</a></h1>
                <h1><a href="" class="no-underline hover:underline ">Settings</a></h1>
                <h1 ><a href="" class="no-underline text-lg border border-black px-3 py-1 rounded-md hover:underline ">Log out</a></h1>
            </div>
        </div>

        @include('layouts.flash')
        @yield('content')

    </div>
    @yield('content')
    
</body>
</html>