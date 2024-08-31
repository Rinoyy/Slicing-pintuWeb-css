<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- icon feather --}}
    {{-- <script src="https://unpkg.com/feather-icons"></script> --}}
    {{-- boostrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
       
    </style>
  </head>
  <body>

  <div class="super-container main-hero">
            <div class="container-fluid pt-2 bg-transparent navbar-navbar " style="position: relative">
                <nav class="navbar navbar-expand-lg pb-5">
                        <div class="content">
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-6 d-flex left">
                                    <div class="row flex-grow-1" >
                                        <div class="col-lg-4" style="width: 100px">
                                            <div class="left">
                                                <div class="logo">
                                                    <img src="{{ asset('img/original.png') }}" alt="" width="80px" style="margin-top: -5px">
                                                </div>
                                            </div> {{-- end row left --}}
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="d-none d-lg-flex flex-grow-1">
                                            <div class="btn-buttons gap-0">
                                                <div class="btn-button border me-0">
                                                    <button class="border-0 bg-transparent btn-navbar active text-white">Pintu</button>
                                                    <button class="border-0 bg-transparent btn-navbar text-white">Pro</button>
                                                    <button class="border-0 bg-transparent btn-navbar text-white">Web3</button>
                                                </div>
                                              </div>
                                           </div>
                                        </div> {{-- end row right --}}
                                    </div>
                                </div>
                                  
                               <div class="col-lg-6 right d-flex justify-content-end">
                                <div class="row d-flex flex-row justify-content-between w-100">
                                    <div class="col-lg-12 d-flex justify-content-end">
                                        <!-- Burger Button for Mobile -->
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                    </div>

                    <!-- Navbar Content -->
                    <div class="container-fluid hamburger text-primary" style="color: black">
                        <div class="collapse navbar-collapse" id="navbarContent">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 d-flex flex-column flex-lg-row justify-content-between text-white fw-semibold">
                                        <span class="hover-nav-1 hover-nav">Fitur</span>
                                        <span class="hover-nav-2 hover-nav">Trading</span>
                                        <span class="hover-nav-3 hover-nav">Edukasi</span>
                                        <span class="hover-nav-4 hover-nav">Lainnya</span>
                                    </div>
                                    <div class="col-lg-4 d-flex justify-content-center align-items-center mt-3 mt-lg-0">
                                        <div class="download border-pill">
                                            <span class="text-white fw-bolder border p-2 rounded-pill">Download App</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-flex flex-column align-items-end mt-3 mt-lg-0">
                                        <div class="bendera d-flex flex-row align-items-center">
                                            <img src="{{ asset('img/bendera.png') }}" alt="" width="20px" height="15px" class="rounded me-2">
                                            <i data-feather="chevron-down" style="color: white;" class="btn-flags"></i>
                                        </div>
                                        <div class="card chooise-flag mt-2">
                                            <div class="p-3">
                                                <div class="row">
                                                    <div class="col-12 fw-bolder text-secondary mb-2">BAHASA</div>
                                                    <div class="col-12 d-flex align-items-center mb-2">
                                                        <div class="img me-2">
                                                            <img src="{{ asset('img/bendera.png') }}" alt="" width="20px">
                                                        </div>
                                                        <div class="text">
                                                            <span class="fw-bolder text-primary">INDONESIA</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex align-items-center">
                                                        <div class="img me-2">
                                                            <img src="{{ asset('img/inggris.png') }}" alt="" width="20px">
                                                        </div>
                                                        <div class="text">
                                                            <span class="fw-bolder text-white">ENGLISH</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End Row -->
                            </div> <!-- End Container -->
                        </div>
                    </div>

                  </div>
                </div>
            </div>
        </div> {{-- end row --}}
    </div>



    
</nav>
</div> {{-- INI END CONTAINER --}}

            {{-- INI MULAI KONTENT --}}
            <div class="container ">
                    <div class="main-content mx-auto">
                        <div class="row">

                            <div class="row">
                                <div class="col-lg-6 pt-5">
                                    <div class="main-text">
                                        <div class="row col-responsif">
                                            <div class="col-lg-12 main-h1">
                                                <h1>
                                                    Crypto App All in One
                                                </h1>
                                            </div>
                                            <div class="col-lg-12 jaulbeli">
                                                <div class="text">
                                                    <span class="text-white">Jual beli crypto simpel, mulai dari Rp 11.000.</span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 mt-4 download-sekarang">
                                                <div class="download p-2 bg-white rounded-pill">
                                                    <span class="text-primary fw-bolder">Download Sekarang</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 rating">
                                                    <div class="row fw-bold text-white p-2 rounded">
                                                        <div class="col-lg-8 d-flex flex-row p-2 rounded mt-5 justify-content-between" style="background-color: rgba(229,231,235,0.3)">
                                                            <div class="stars">
                                                                <i class="bi bi-star-fill" style="color: #ffffff;"></i>
                                                                <i class="bi bi-star-fill" style="color: #ffffff;"></i>
                                                                <i class="bi bi-star-fill" style="color: #ffffff;"></i>
                                                                <i class="bi bi-star-fill" style="color: #ffffff;"></i>
                                                                <i class="bi bi-star-half" style="color: #ffffff;"></i>
                                                            </div>
                                                            <div class="rating">
                                                                4.7 Rating
                                                            </div>
                                                            <div class=" download">
                                                                7M+ download
                                                            </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6" >
                                    <div class="main-img">
                                        <img src="{{ asset('img/mainPhone.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
            </div>
            {{-- INI BATAS KONTENT NAVBAR --}}
    </div> {{-- INI ADALAH SUPER CONTAINER --}}
    

    <div class="sponsor">
        <div class="main-sponsor" >
            <div class="container">
                <div class="row justify-content-start align-items-center mx-auto" >
                    <div class="col-lg-3 col-md-4  text-end">
                        <span class="fw-normal" style="font-size: 20px;">Terdaftar dan diawasi oleh</span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12 text-center logo d-flex justify-content-start align-items-center">
                        <img src="{{ asset('img/kemendag.png') }}" alt="Kemendag" class="img-fluid" style="max-width: 180px; height: auto;">
                        <img src="{{ asset('img/kominfo.png') }}" alt="Kominfo" class="img-fluid mt-2" style="max-width: 60px; height: auto;">
                        <img src="{{ asset('img/kominfo.png') }}" alt="Kominfo" class="img-fluid mt-2" style="max-width: 60px; height: auto;">
                        <img src="{{ asset('img/kominfo.png') }}" alt="Kominfo" class="img-fluid mt-2" style="max-width: 60px; height: auto;">
                    </div>
                </div>
            </div>
        </div>


        <div class="card-sponsor " style="margin-top: 12%">
            <div class="main-content">
                <div class="container">
                    <div class="row mt-5 ">
                        <div class="col-lg-5">
                            <div class="card d-flex flex-row justify-content-between p-1" style="height: 230px; background-color:#f4f0f0">
                                <div class="right mt-3 mx-auto p-3 w-100 z-5">
                                    <span  class="h4 fw-bolder ">Trading 300+ koin dengan Rupiah</span>
                                </div>
                                <div class="left d-flex align-items-center flex-row-reverse">
                                    <img src="{{ asset('img/coins.png') }}" alt="" style="width: 110%; height: auto;">
                                </div>
                                <i class="bi bi-arrow-right p-2 bg-white border" style="color: #bd2525; position: absolute; bottom: 0; right: 0; font-size:20px; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"></i>
                            </div>
                        </div>
                        <div class="col-lg-7" >
                            <div class="card d-flex flex-row justify-content-between" style="background: rgb(237, 244, 254); height:300px%;">
                                <div class="row d-flex flex-column p-5">
                                    <div class="col-lg-6 h3 w-100">Nabung di Earn, dapat bonus hingga</div>
                                    <div class="col-lg-6 h1 text-primary w-100">14.1%APY</div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 justify-content-end">
                                        <img src="{{ asset('img/earn.png') }}" alt="" width="140%" class="pt-3">
                                    </div>
                                </div>
                                <i class="bi bi-arrow-right p-2 bg-white border" style="color: #bd2525; position: absolute; bottom: 0; right: 0; font-size:20px; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"></i>

                            </div>
                        </div>
                    </div>

                    {{--  --}}
                    <div class="row mt-5 ">
                        <div class="col-lg-7" >
                            <div class="card d-flex flex-row justify-content-between" style="background: rgb(235, 246, 238); height:230px;">
                                <div class="row d-flex flex-column p-5">
                                    <div class="col-lg-6 h3 w-100">Deposit dan penarikan kapan pun</div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 justify-content-end">
                                        <img src="{{ asset('img/money.png') }}" alt="" width="160%" class="pt-3">
                                    </div>
                                </div>
                                <i class="bi bi-arrow-right p-2 bg-white border" style="color: #bd2525; position: absolute; bottom: 0; right: 0; font-size:20px; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"></i>

                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card d-flex flex-row justify-content-between p-1" style="height: 230px; background-color:#f4f0f0">
                                <div class="right mt-3 mx-auto p-3 w-100 z-5">
                                    <span  class="h4 fw-bolder ">Selalu update dengan berita crypto</span>
                                </div>
                                <div class="left d-flex align-items-center flex-row-reverse">
                                    <img src="{{ asset('img/pesan.png') }}" alt="" style="width: 110%; height: auto;">
                                </div>
                                <i class="bi bi-arrow-right p-2 bg-white border" style="color: #bd2525; position: absolute; bottom: 0; right: 0; font-size:20px; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"></i>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

    <div class="ticker-container">
        <div class="ticker-item green">AAPL +2.34%</div>
        <div class="ticker-item red">TSLA -1.56%</div>
        <div class="ticker-item green">AMZN +3.45%</div>
        <div class="ticker-item red">GOOGL -0.87%</div>
        <div class="ticker-item green">MSFT +1.89%</div>
        <div class="ticker-item red">NFLX -2.12%</div>
        <div class="ticker-item green">FB +0.78%</div>
        <div class="ticker-item red">BABA -1.23%</div>
        <div class="ticker-item green">NVDA +4.56%</div>
        <div class="ticker-item red">DIS -0.99%</div>
        <div class="ticker-item green">PYPL +3.21%</div>
        <div class="ticker-item red">UBER -2.34%</div>
        <div class="ticker-item green">TWTR +1.45%</div>
        <div class="ticker-item red">SPOT -0.65%</div>
        <div class="ticker-item green">SQ +2.89%</div>
        <div class="ticker-item red">ZM -1.78%</div>
        <div class="ticker-item green">SHOP +3.67%</div>
        <div class="ticker-item red">CRM -2.11%</div>
        <div class="ticker-item green">INTC +1.34%</div>
        <div class="ticker-item red">AMD -0.56%</div>
        <div class="ticker-item green">ORCL +2.22%</div>
        <div class="ticker-item red">IBM -1.45%</div>
        <div class="ticker-item green">CSCO +0.89%</div>
        <div class="ticker-item red">CRM -2.11%</div>
        <div class="ticker-item green">INTC +1.34%</div>
        <div class="ticker-item red">AMD -0.56%</div>
        <div class="ticker-item green">ORCL +2.22%</div>
        <div class="ticker-item red">IBM -1.45%</div>
        <div class="ticker-item green">CSCO +0.89%</div>
    </div>

    </div>
    
    {{-- 5 Aset Crypto Populer --}}
<div class="limatAset bg-white" style="min-height: 500px; padding-top: 10%;">
    <div class="container">
        <div class="content">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="fw-bolder">5 Aset Crypto Populer</h2>
                </div>
                <div class="col-lg-3 text-center ">
                    <div class="main-bottom p-2 border border-secondary rounded-pill">
                        <span class="fw-bolder">Lihat 80 Aset lainya</span>
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>

            {{--  --}}
            <div class="d-flex gap-5 mx-auto mt-4">
                <!-- Kolom Card -->
                <div class="">
                    <div class="card p-3" style="width: 210px">
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{ asset('img/btc.png') }}" alt="Kemendag" class="img-fluid" style="width:60px;">
                            <span class="fw-semibold h2 ms-3 mb-0">BTC</span>                                
                        </div>
                        <div class="mb-2">
                            <span class="h5 fw-normal">Rp.950.000.000</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-caret-up-fill" style="color: green; font-size: 30px;"></i>
                            <span class="h2 ms-2 mb-0">0.36%</span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card p-3" style="width: 210px">
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{ asset('img/Eth.png') }}" alt="Kemendag" class="img-fluid" style="width:40px;">
                            <span class="fw-semibold h2 ms-3 mb-0">BTC</span>                                
                        </div>
                        <div class="mb-2">
                            <span class="h5 fw-normal">Rp.39.000.000</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-caret-up-fill" style="color: green; font-size: 30px;"></i>
                            <span class="h2 ms-2 mb-0">0.36%</span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card p-3" style="width: 210px">
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{ asset('img/usdt.png') }}" alt="Kemendag" class="img-fluid" style="width:55px;">
                            <span class="fw-semibold h2 ms-3 mb-0">BTC</span>                                
                        </div>
                        <div class="mb-2">
                            <span class="h5 fw-normal">Rp.15.000</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-caret-up-fill" style="color: green; font-size: 30px;"></i>
                            <span class="h2 ms-2 mb-0">0.36%</span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card p-3" style="width: 210px">
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{ asset('img/sol.png') }}" alt="Kemendag" class="img-fluid" style="width:40px;">
                            <span class="fw-semibold h2 ms-3 mb-0">SOL</span>                                
                        </div>
                        <div class="mb-2">
                            <span class="h5 fw-normal">Rp.2.100.000</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-caret-up-fill" style="color: green; font-size: 30px;"></i>
                            <span class="h2 ms-2 mb-0">0.36%</span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card p-3" style="width: 210px">
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{ asset('img/usdc.png') }}" alt="Kemendag" class="img-fluid" style="width:40px;">
                            <span class="fw-semibold h2 ms-3 mb-0">USDT</span>                                
                        </div>
                        <div class="mb-2">
                            <span class="h5 fw-normal">Rp.15.000</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-caret-up-fill" style="color: green; font-size: 30px;"></i>
                            <span class="h2 ms-2 mb-0">0.36%</span>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>

    <div class="satu-aplikasi bg-white" style="min-height: 500px; padding-top: 5%;">
      <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                    <span class="h2 d-flex">Satu Aplikasi, Tiada Batas</span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('img/phone1.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="card-content">
                        <div class="title">
                            <img src="{{ asset('img/originall.png') }}" alt="" width="120px">
                        </div>
                        <div class="deskripsi p-3" style="margin-bottom: 20%">
                            <span class="h3 fw-bolder">Investasi crypto mudah, bahkan untuk pemula.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('img/phone2.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="card-content">
                        <div class="title">
                            <img src="{{ asset('img/originall.png') }}" alt="" width="120px">
                        </div>
                        <div class="deskripsi p-3" style="margin-bottom: 20%">
                            <span class="h3 fw-bolder">Maksimali fitur trading kamu dengan fitur pro.</span>
                        </div>
                    </div>
                    <div class="button-next pl-3">
                        <i class="bi bi-arrow-right p-2 bg-white border" style="color: #bd2525; position: absolute; bottom: 0; right: 0; font-size:20px; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"></i>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('img/phone3.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="card-content">
                        <div class="title">
                            <img src="{{ asset('img/originall.png') }}" alt="" width="120px">
                        </div>
                        <div class="deskripsi p-3" style="margin-bottom: 20%">
                            <span class="h3 fw-bolder">Trading, staking dan hunting airdrop di Web3.</span>
                        </div>
                    </div>
                    <i class="bi bi-arrow-right p-2 bg-white border" style="color: #bd2525; position: absolute; bottom: 0; right: 0; font-size:20px; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"></i>
                </div>
            </div>
        </div>
      </div>  
    </div>

    
    <div class="inveveratasi py-5 bg-white">
        <div class="container">
            <div class="row w-100 d-flex align-items-center mb-4">
                <div class="col-lg-3 col-md-4 text-md-end text-center mb-2 mb-md-0">
                    <span class="h3">Jika kamu investasi</span>
                </div>
                <div class="col-lg-2 col-md-4 col-8 mx-auto mx-md-0">
                    <select class="form-select border-0" id="pilih" style="font-size: 20px;">
                        <option value="1" selected>Bitcoin</option>
                        <option value="2">Etherium</option>
                        <option value="3">Tether</option>
                        <option value="4">Solana</option>
                        <option value="5">Ripple</option>
                    </select>
                </div>
            </div>
    
            <div class="row p-4" style="border: 2px solid rgba(2, 2, 3, 0.2); border-radius: 12px;">
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex flex-column gap-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <span>Dengan modal awal Rp 11.000</span>

                        </div>
                        <div class="col-lg-12">
                            <div class="inveveratasi bg-white mt-3">
                                <div class="range1 mb-3" id="range1">
                                    <label for="rangeInput1">Pilih nilai:</label>
                                    <input type="range" id="rangeInput1" min="64000" max="60000000" step="1000" value="64000" oninput="updateValue(this.value, 'rangeInput1')" style="width:80%; color:#f4f0f0;">
                                </div>
                                <div class="range2" id="range2">
                                    <label for="rangeInput2">Pilih nilai:</label>
                                    <input type="range" id="rangeInput2" min="10000" max="40000000" step="1000" value="10000" oninput="updateValue(this.value, 'rangeInput2')" style="width:80%; color:#f4f0f0;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <span>Selama</span>

                    </div>
                  <div class="col-lg-12">
                        <button id="1_btn" class="btn  p-3 border rounded-pill fw-bolder">1 Tahun</button>
                        <button id="2_btn" class="btn  p-3 border rounded-pill fw-bolder">2 Tahun</button>
                        <button id="3_btn" class="btn  p-3 border rounded-pill fw-bolder">3 Tahun</button>
                        <button id="4_btn" class="btn  p-3 border rounded-pill fw-bolder">4 Tahun</button>
                  </div>
                </div>
    
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <span id="rangeValue" class="range-value">Rp. 64.000</span>

                </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    {{-- <script>
        feather.replace();
    </script> --}}
    <script>



function updateValue(value) {
            const formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            });

            document.getElementById('rangeValue').textContent = formatter.format(value);
            document.getElementById('rangeValue2').textContent = formatter.format(value);
        }



        $(document).ready(function () {

            $("#1_btn").click(function (e) { 
                e.preventDefault();
                $("#1_btn").addClass('btn_investasi')     
                $("#2_btn").removeClass('btn_investasi')     
                $("#3_btn").removeClass('btn_investasi')     
                $("#4_btn").removeClass('btn_investasi')   

           
            });
            $("#2_btn").click(function (e) { 
                e.preventDefault();
                $("#1_btn").removeClass('btn_investasi')
                $("#3_btn").removeClass('btn_investasi')
                $("#4_btn").removeClass('btn_investasi')
                $("#2_btn").addClass('btn_investasi') 
                });
            $("#3_btn").click(function (e) { 
                e.preventDefault();
                $("#1_btn").removeClass('btn_investasi')
                $("#2_btn").removeClass('btn_investasi')
                $("#4_btn").removeClass('btn_investasi')
                $("#3_btn").addClass('btn_investasi')     
            });
            $("#4_btn").click(function (e) { 
                e.preventDefault();
                $("#4_btn").addClass('btn_investasi')     
                $("#1_btn").removeClass('btn_investasi')
                $("#2_btn").removeClass('btn_investasi')
                $("#3_btn").removeClass('btn_investasi')
            });


// ---------------


        $('#range2').hide();

        $("#pilih").on('change', function (e) { 
        e.preventDefault();
        const select = $('#pilih').val();
        $('#nomor1').text(select);

        if(select == 1){
            $('#range2').hide();
            $('#range1').show();
        }else if(select == 2){
            $('#range1').hide();
            $('#range2').show();
        }else{
            return "halo";
        }


        $("#satu").on('change', function () {
            
        });

       
        

   
});





        // ini adalah jquery untuk nav left
        $(".btn-navbar").hover(function (e) { 
                e.preventDefault();
                $(".btn-navbar").removeClass("active");
                $(this).addClass("active");
            });


    // ini kode jquery  untuk  nav hover right
    function setupHover(navClass, contentClass, customStyles) {
        $(contentClass).hide();

        $(navClass).hover(
            function () {
                $(contentClass).css(customStyles).stop(true, true).fadeIn(10);
            },
            function () {
                setTimeout(() => {
                    if (!$(contentClass).is(':hover') && !$(navClass).is(':hover')) {
                        $(contentClass).fadeOut(10);
                    }
                }, 200);
            }
        );


        $(contentClass).hover(
            function () {
                $(this).stop(true, true).fadeIn(10);
            },
            function () {
                setTimeout(() => {
                    if (!$(navClass).is(':hover')) {
                        $(this).fadeOut(10);
                    }
                }, 200);
            }
        );
    }

    setupHover(".hover-nav-1", ".content-1", {
        'background': 'white',
        'width': '400px',
        'position': 'absolute',
        'margin-top': '4.5%',
        'color': 'black'
    });

    setupHover(".hover-nav-2", ".content-2", {
        'background': 'white',
        'width': '400px',
        'position': 'absolute',
        'margin-top': '4.5%',
        'color': 'black'
    });

    setupHover(".hover-nav-3", ".content-3", {
        'background': 'white',
        'width': '800px',
        'position': 'absolute',
        'margin-top': '3%',
        'color': 'black',
        'margin-left' : '25%'
    });

    setupHover(".hover-nav-4", ".content-4", {
        'background': 'white',
        'width': '400px',
        'position': 'absolute',
        'margin-top': '3%',
        'color': 'black',
        'margin-left' : '5%'
    });

    setupHover(".btn-flags", ".chooise-flag", {
        'background': 'black',
        'width': '180px',
        'position': 'absolute',
        'margin-top': '3%',
        'margin-right' : '6%',
        'color': 'white'
    });

});

    </script>
  </body>
</html>
