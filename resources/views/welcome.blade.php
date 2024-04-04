<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Geekbank</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->

</head>
<div class="flex items-center justify-center">
    <div>
        <img width="700" src="{{ asset('img/Wallet-pana.png') }}">
    </div>
    <div class="bg-[#ffc801] w-[25%] p-2 rounded-lg">
        <form action="{{ route('register') }}" method="POST" class="flex flex-col gap-2 py-3 px-2">
            @csrf
            <h1 class="text-center font-bold text-xl ">Sign up</h1>
            <div class="flex flex-col gap-1">
                <label for="">name</label>
                <input class="border-none rounded-lg" name="name" type="text" placeholder="name">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="flex flex-col gap-1">
                <label for="">select</label>
                <select class="border-none rounded-lg" name="gender" id="">
                    <option selected disabled>Gender</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>
            <div class="flex flex-col gap-1">
                <label for="">email</label>
                <input class="border-none rounded-lg" name="email" type="email" placeholder="email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="flex flex-col gap-1">
                <label for="">password</label>
                <input class="border-none rounded-lg" name="password" type="password" placeholder="password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="flex justify-end items-center gap-3">
                <a href="{{ route('login') }}" class="underline text-sm text-gray-700">Already have account</a>
                <button class="bg-[#1F2937] text-white px-3 py-2 rounded-lg">signup</button>
            </div>
        </form>
    </div>
</div>

</html>
