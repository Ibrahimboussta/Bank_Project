@extends('layouts.index')
@section('content')
<div class="flex">
    <div class="flex justify-center items-center h-screen rounded-full ">
        <div class="flex-col justify-evenly w-[30%] bg-red-300 p-5 items-center ">
            <div class="p-2">
                <label for="name" id="name">Name</label>
                <input type="text" name="name" placeholder=" Insert name" value="{{ old('name') }}">
            </div>

            <div class="p-2">
                <label for="amount" id="description">Amount</label>
                <input type="amount" name="amount" placeholder=" Insert description" {{ old('amount') }}>
            </div>

            



         

        
        
        
        </div>
</div>
 
@endsection
