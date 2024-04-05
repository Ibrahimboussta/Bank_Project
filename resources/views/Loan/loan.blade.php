@extends('layouts.index')
@section('content')
    <div class="flex justify-center items-center py-3">
        <form action="{{ route('loan.store') }}" method="post" class="bg-[#ffc801] flex flex-col gap-3 w-[30%] p-5 rounded-lg">
            @csrf
            <h1 class="text-center text-2xl font-bold">Loan</h1>
            <label for="">Card</label>
            <input class="rounded" type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <select name="card_id" id="">
                <option selected disabled> Choose you card </option>
                @foreach (Auth::user()->cards as $card)
                    <option value="{{ $card->id }}">{{ $card->rib }}</option>
                @endforeach
            </select>
            <label for="">Loan Amount</label>
            <input class="rounded" type="number" name="amount" placeholder="amount">
            <x-primary-button class="w-fit ">{{ __('Save ') }}</x-primary-button>
        </form>
        {{-- <form action={{ route('loan') }} method="post">
            @csrf
            <button>loan</button>
        </form> --}}
    </div>
@endsection