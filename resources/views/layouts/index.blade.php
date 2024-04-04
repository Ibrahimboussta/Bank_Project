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
    <div class=" h-screen flex justify-between items-center">
        <div class="bg-slate-100 w-64 h-screen shadow-2xl flex items-center ">
            <div class="p-2 bg-white w-60 flex flex-col " id="sideNav">
                <nav>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-yellow-400 hover:to-yellow-100 hover:text-white"
                        href="#">
                        <i class="fas fa-home mr-2"></i>My card
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-yellow-400 hover:to-yellow-100 hover:text-white"
                        href="#">
                        <i class="fas fa-file-alt mr-2"></i>Transfer
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-yellow-400 hover:to-yellow-100 hover:text-white"
                        href="#">
                        <i class="fas fa-users mr-2"></i>Pay services
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-yellow-400 hover:to-yellow-100 hover:text-white"
                        href="#">
                        <i class="fas fa-store mr-2"></i>Facture
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-yellow-400 hover:to-yellow-100 hover:text-white"
                        href="#">
                        <i class="fas fa-exchange-alt mr-2"></i>Investement
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-yellow-400 hover:to-yellow-100 hover:text-white"
                        href="#">
                        <i class="fas fa-exchange-alt mr-2"></i>Coin Market
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-yellow-400 hover:to-yellow-100 hover:text-white"
                        href="#">
                        <i class="fas fa-exchange-alt mr-2"></i>History
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-yellow-400 hover:to-yellow-100 hover:text-white"
                    href="#">
                    <i class="fas fa-exchange-alt mr-2"></i>Settings
                </a>
                </nav>
    
                <!-- Ítem de Cerrar Sesión -->
                <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-yellow-400 hover:to-yellow-100 hover:text-white mt-auto"
                    href="#">
                    <i class="fas fa-sign-out-alt mr-2"></i>Cerrar sesión
                </a>
    
                <!-- Señalador de ubicación -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
    
                <!-- Copyright al final de la navegación lateral -->
                <p class="mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright WCSLAT@2023</p>
    
            </div>
        </div>



        @include('layouts.flash')
        @yield('content')

    </div>


</body>

</html>
