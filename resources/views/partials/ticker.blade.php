@php
$items = [
    ['BTC',   '+2.34%', 'green'], ['ETH',   '-1.56%', 'red'],
    ['BNB',   '+3.45%', 'green'], ['SOL',   '-0.87%', 'red'],
    ['ADA',   '+1.89%', 'green'], ['DOT',   '-2.12%', 'red'],
    ['MATIC', '+0.78%', 'green'], ['AVAX',  '-1.23%', 'red'],
    ['LINK',  '+4.56%', 'green'], ['UNI',   '-0.99%', 'red'],
    ['DOGE',  '+3.21%', 'green'], ['SHIB',  '-2.34%', 'red'],
    ['XRP',   '+1.45%', 'green'], ['LTC',   '-0.65%', 'red'],
    ['ATOM',  '+2.89%', 'green'], ['NEAR',  '-1.78%', 'red'],
    ['FTM',   '+3.67%', 'green'], ['OP',    '-2.11%', 'red'],
    ['ARB',   '+1.34%', 'green'], ['SAND',  '-0.56%', 'red'],
];
@endphp

<div class="ticker-wrapper">
    <div class="ticker-track">
        {{-- Items duplicated for seamless infinite loop --}}
        @foreach([$items, $items] as $set)
            @foreach($set as $item)
                <div class="ticker-item {{ $item[2] }}">
                    <span class="ticker-symbol">{{ $item[0] }}</span>
                    <span class="ticker-change">{{ $item[1] }}</span>
                </div>
            @endforeach
        @endforeach
    </div>
</div>
