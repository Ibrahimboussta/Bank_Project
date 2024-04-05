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

<body class="flex">

    <div class="bg-[#ffc801] w-64 shadow-2xl">
        <div class=" p-5 flex flex-col justify-between h-screen items-stert  ">
            <div class="flex flex-col gap-4">
                <button class="flex gap-2 items-center p-2 rounded-lg hover:bg-[#00000012]">
                    <i class="fa-solid fa-house"></i>
                    <a href="" class="no-underline">Home</a>
                </button>
                <button class="flex gap-2 items-center p-2 rounded-lg hover:bg-[#00000012]">
                    <i class="fa-solid fa-credit-card"></i>
                    <a href="" class="no-underline">My cards</a>
                </button>
                <button class="flex gap-2 items-center p-2 rounded-lg hover:bg-[#00000012]"><i
                        class="fa-solid fa-right-left"></i><a href="" class="no-underline">Transfer</a></button>
                <button class="flex gap-2 items-center p-2 rounded-lg hover:bg-[#00000012]"><i
                        class="fa-solid fa-file-invoice-dollar"></i><a href="" class="no-underline">Pay
                        services</a></button>
                <button class="flex gap-2 items-center p-2 rounded-lg hover:bg-[#00000012]"><i
                        class="fa-solid fa-hand-holding-dollar"></i><a href=""
                        class="no-underline">Loan</a></button>
                <button class="flex gap-2 items-center p-2 rounded-lg hover:bg-[#00000012]">
                    <i class="fa-solid fa-money-bill-trend-up"></i>
                    <a href="" class="no-underline">Investment</a>
                </button>
                <button class="flex gap-2 items-center p-2 rounded-lg hover:bg-[#00000012]">
                    <i class="fa-brands fa-bitcoin"></i>
                    <a href="" class="no-underline">Coin Market</a>
                </button>
                <button class="flex gap-2 items-center p-2 rounded-lg hover:bg-[#00000012]">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <a href="" class="no-underline">History</a>
                </button>
            </div>
            <div class="flex flex-col gap-4">
                <button class="flex gap-2 items-center p-2 rounded-lg hover:bg-[#00000012]">
                    <i class="fa-solid fa-gear"></i>
                    <a href="{{ route('settings.show') }}" class="no-underline">Settings</a>
                </button>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="flex gap-2 items-center p-2 rounded-lg hover:bg-[#00000012]">
                        <i class="fa-solid fa-arrow-right-from-bracket "></i>
                        <a href="" class="no-underline text-lg px-3 py-1 rounded-md  ">Log out</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.flash')
    <div class="w-full">
        <div class="bg-[#ffc801] py-2 flex justify-end ">
            <div
                class="border-2 flex items-center gap-3 mr-5 py-2 border-[#000] text-white bg-black w-fit px-3 rounded-lg">
                <i class="fa-solid fa-wallet "></i>
                    <h1>{{ Auth::user()->wallet()}} dh</h1>
            </div>
        </div>
        @yield('content')
    </div>


</body>

</html>
