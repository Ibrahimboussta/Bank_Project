@extends('layouts.index')
@section('content')
    <!-- component -->

    <form action="{{ route('facture.store') }}" method="post">
        @csrf
        <button>creat</button>
    </form>
    <div class="flex flex-wrap w-full justify-center gap-5 bg-yellow-300">
        @foreach (Auth::user()->factures as $facture)
            <div class="flex justify-center ">
                <div class="w-80 mt-24 m-auto lg:mt-16 max-w-sm">
                    <img src="https://image.freepik.com/free-vector/app-development-illustration_52683-47931.jpg"
                        alt="" class="rounded-t-2xl shadow-2xl lg:w-full 2xl:w-full 2xl:h-44 object-cover" />
                    <div class="bg-white shadow-2xl rounded-b-3xl">
                        <h2 class="text-center text-gray-800 text-2xl font-bold pt-6">{{ $facture->type }}</h2>
                        <h2 class="text-center text-gray-800 text-2xl font-bold pt-6"></h2>

                        <div class="w-5/6 m-auto">
                            <p class="text-center text-gray-500 pt-5">Your facure is
                                !</p>
                        </div>
                        <form action="{{ route('facture.store') }}" method="post">
                            @csrf
                            <div class="grid grid-cols-4 w-72 lg:w-5/6 m-auto bg-indigo-50 mt-5 p-4 lg:p-4 rounded-2xl">
                                <div class="col-span-1">

                                </div>
                                <div class="col-span-2 pt-1">

                                    <p class="text-gray-500 text-center text-sm"> {{ $facture->amount }} DH</p>
                                    <input type="hidden" name="facture" value=" {{ $facture->amount }}">
                                </div>

                            </div>
                            <div
                                class="bg-yellow-500 w-72 lg:w-5/6 m-auto mt-6 p-2 hover:bg-indigo-500 rounded-2xl  text-white text-center shadow-xl shadow-bg-blue-700">
                                <button classs="lg:text-sm text-lg font-bold">Paid</button>
                            </div>
                        </form>
                        <div class="text-center m-auto mt-6 w-full h-16">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
