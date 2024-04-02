<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRYPTO</title>
</head>
<body>
    <h1>
        @foreach ($cryptos as $crypto)
        <div class="ligne">

            <img src="https://s2.coinmarketcap.com/static/img/coins/64x64/{{ $crypto["id"] }}.png"  alt="">
            <h1>{{ $crypto['name'] }}</h1>
            <h1>{{ $crypto['num_market_pairs'] }}</h1>
            <h1>{{ $crypto['total_supply'] }}</h1>
        </div>
        @endforeach
    </h1>

</body>
</html>