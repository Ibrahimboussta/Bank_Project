@extends('layouts.index')

@section('content')
    <section class="w-[80vw] h-[70vh] me-2  rounded-3xl  flex justify-center items-center  ">

        <div class="image w-[40vw] pt-7">
            <img src="{{ asset('img/transferImage.png') }}" alt="Transfer Image">
        </div>

        <form method="POST" action="{{ route('transfer.store') }}">
            @csrf

            <div class=" p-20  ">
                <div class="flex w-72 flex-col gap-6">

                    <div class="relative h-10 w-full min-w-[200px]">

                        <select name="rib" id="rib"
                            class=" border-t-0 peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-yellow-400 focus:border-t-transparent focus:outline-0 focus:ring-0 disabled:border-0 disabled:bg-blue-gray-50">
                            <option selected disabled value="">Transfer Destination</option>
                            @foreach ($users as $user)
                            @foreach ($user->cards as $card)
                                <option value="{{ $card->rib }}">{{ $card->rib }}</option>         
                                @endforeach
                            @endforeach
                        </select>

                        <label
                            class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-yellow-400 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-yellow-400 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Bank Card :
                        </label>
                    </div>

                    <div class="relative h-10 w-full min-w-[200px]">

                        <select name="card_number" id="card_number"
                            class=" border-t-0  peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-yellow-400 focus:border-t-transparent focus:outline-0 focus:ring-0 disabled:border-0 disabled:bg-blue-gray-50">
                            <option selected disabled value="">Which card do you transfer with :</option>
                            @foreach (Auth::user()->cards as $card)
                                <option value="{{ $card->card_number }}">{{ $card->card_number }}</option>
                            @endforeach
                        </select>

                        <label
                            class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-yellow-400 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-yellow-400 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Bank Card :
                        </label>
                    </div>
                    <div class="relative h-10 w-full min-w-[200px]">
                        <input type="number" id="amount" name="amount"
                            class=" focus:ring-0 peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-yellow-400 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                            placeholder=" " />
                        <label
                            class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-yellow-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-yellow-400 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-yellow-400 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Amount (DH)
                        </label>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex items-center border-[#ffc801] border-2 bg-black text-white gap-1 px-4 py-2 cursor-pointer  font-semibold tracking-widest rounded-md hover:bg-yellow-300 duration-300 hover:gap-2 hover:translate-x-3">
                            Send
                            <svg class="w-5 h-5" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
                                    stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                        </button>



                    </div>
                </div>
            </div>
        </form>



    </section>
@endsection
