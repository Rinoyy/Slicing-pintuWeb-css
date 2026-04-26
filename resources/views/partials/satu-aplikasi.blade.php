@php
$apps = [
    [
        'img'   => 'phone1.png',
        'logo'  => 'originall.png',
        'desc'  => 'Investasi crypto mudah, bahkan untuk pemula.',
        'arrow' => false,
    ],
    [
        'img'   => 'phone2.png',
        'logo'  => 'originall.png',
        'desc'  => 'Maksimalkan fitur trading kamu dengan fitur Pro.',
        'arrow' => true,
    ],
    [
        'img'   => 'phone3.png',
        'logo'  => 'originall.png',
        'desc'  => 'Trading, staking dan hunting airdrop di Web3.',
        'arrow' => true,
    ],
];
@endphp

<section class="satu-aplikasi bg-white">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bolder">Satu Aplikasi, Tiada Batas</h2>
            <p class="text-muted mt-2">Semua kebutuhan crypto kamu ada di sini.</p>
        </div>

        <div class="row g-4">
            @foreach($apps as $app)
            <div class="col-lg-4 col-md-6">
                <div class="card app-card h-100">
                    <div class="card-img-top overflow-hidden" style="max-height:320px;">
                        <img src="{{ asset('img/' . $app['img']) }}" alt="App Screen" class="img-fluid w-100"
                             style="object-fit:cover;">
                    </div>
                    <div class="card-body pb-5">
                        <img src="{{ asset('img/' . $app['logo']) }}" alt="Pintu" width="110" class="mb-3">
                        <p class="h5 fw-bolder lh-sm mb-0">{{ $app['desc'] }}</p>
                    </div>
                    @if($app['arrow'])
                    <div class="arrow-icon">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
