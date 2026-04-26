@php
$cryptos = [
    ['symbol' => 'BTC',  'name' => 'Bitcoin',  'price' => 'Rp 950.000.000', 'change' => '+0.36%', 'up' => true,  'img' => 'btc.png',  'w' => '55px'],
    ['symbol' => 'ETH',  'name' => 'Ethereum', 'price' => 'Rp 39.000.000',  'change' => '+1.12%', 'up' => true,  'img' => 'Eth.png',  'w' => '40px'],
    ['symbol' => 'USDT', 'name' => 'Tether',   'price' => 'Rp 15.900',      'change' => '-0.05%', 'up' => false, 'img' => 'usdt.png', 'w' => '50px'],
    ['symbol' => 'SOL',  'name' => 'Solana',   'price' => 'Rp 2.100.000',   'change' => '+2.45%', 'up' => true,  'img' => 'sol.png',  'w' => '40px'],
    ['symbol' => 'USDC', 'name' => 'USD Coin', 'price' => 'Rp 15.800',      'change' => '-0.02%', 'up' => false, 'img' => 'usdc.png', 'w' => '40px'],
];
@endphp

<section class="limatAset bg-white">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bolder mb-0">5 Aset Crypto Populer</h2>
            <div class="lihat-semua-btn border border-secondary rounded-pill px-4 py-2" style="cursor:pointer">
                <span class="fw-semibold">Lihat 80 Aset lainnya</span>
                <i class="bi bi-arrow-right ms-1"></i>
            </div>
        </div>

        <div class="crypto-scroll-container">
            <div class="crypto-cards-row">
                @foreach($cryptos as $coin)
                <div class="card crypto-card p-3">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('img/' . $coin['img']) }}" alt="{{ $coin['symbol'] }}"
                             style="width:{{ $coin['w'] }}; height:auto;">
                        <div class="ms-3">
                            <div class="fw-bolder fs-5 lh-sm">{{ $coin['symbol'] }}</div>
                            <div class="text-muted" style="font-size:13px;">{{ $coin['name'] }}</div>
                        </div>
                    </div>
                    <div class="fw-semibold mb-2" style="font-size:15px;">{{ $coin['price'] }}</div>
                    <div class="d-flex align-items-center gap-1">
                        <i class="bi bi-caret-{{ $coin['up'] ? 'up' : 'down' }}-fill"
                           style="color:{{ $coin['up'] ? '#1a7a3a' : '#c0392b' }}; font-size:18px;"></i>
                        <span class="fw-bold" style="color:{{ $coin['up'] ? '#1a7a3a' : '#c0392b' }}">
                            {{ $coin['change'] }}
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
