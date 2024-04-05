@extends('layouts.index')
@section('content')
    <div class="border-2 p-10">


        <div class="w-[100%] px-5 py-10">
            <div class="w-[] rounded px-[1vw] flex items-center justify-between bg-yellow-300 py-3">
                {{-- <p class="m-0">Investment</p> --}}
                <p class="m-0">id</p>
                <p class="w-[11vw]">Amount</p>
                <p class="m-0">receiver</p>
                <p class="m-0">time</p>
            </div>
            @foreach($transactions as $transaction)
                <div class="w-[100%] rounded px-[8vw] flex items-center justify-between bg-[#FFC727] py-5 mt-4">
                    <h4 class="m-0">{{ $transaction->id }}</h4>
                    <h4 class="m-0 font-bold">{{ $transaction->amount }}</h4>
                    <h4 class="m-0">{{ $transaction->receiver }}</h4>
                    <h4 class="m-0">{{ $transaction->created_at }}</h4>
                </div>
            @endforeach
        </div>


        {{-- <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">amount</th>
                    <th scope="col">receiver</th>
                    <th scope="col">time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($transactions as $transaction)
                        <th>{{ $transaction->id }}</th>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->receiver }}</td>
                        <td>{{ $transaction->created_at }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table> --}}
    </div>
@endsection
