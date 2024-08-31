<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- icon feather --}}
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- boostrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
       
    </style>
  </head>
  <body>
    <div class="main-hero">
            <div class="container pt-2 bg-transparent navbar-navbar" style="position: relative">
                <nav class="navbar navbar-expand-lg pb-5">
                    <div class="container-fluid">
                        <div class="content">
                         <div class="row d-flex justify-content-between">
                            <div class="col-lg-5 d-flex left">
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
                                  <div class="col-lg-6 d-flex justify-content-between text-white fw-semibold">
                                      <span class="hover-nav-1 hover-nav">Fitur</span>
                                      <span class="hover-nav-2 hover-nav">Trading</span>
                                      <span class="hover-nav-3 hover-nav">Edukasi</span>
                                      <span class="hover-nav-4 hover-nav">Lainya</span>


                                    <div class="content-1 p-3 bg-white shadow rounded">
                                        <div class="row">
                                          <span class="h6 fw-lighter fw-semibold text-secondary">FITUR</span>
                                        </div>{{-- end row --}}
                                        <div class="row mb-3 align-items-stretch ">
                                          <div class="col-md-12 content-element">
                                              <div class=" h-100">
                                                  <div class="row g-0 h-100">
                                                      <div class="col-2 d-flex align-items-center justify-content-center  h-100">
                                                          <img src="{{ asset('img/n.png') }}" alt="" class="img-fluid" width="20px">
                                                      </div>
                                                      <div class="col-10 pt-2 d-flex align-items-center h-100 flex-column">
                                                          <span class="h5 d-flex justify-content-start w-100">PTU staking</span>
                                                          <p class="fw-normal">Skate PTU token dan nikmati berbagai benefitnya.</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div> {{-- end col 12 --}}
                                      </div>{{-- end row --}}

                                      <div class="row mb-3 align-items-stretch">
                                          <div class="col-md-12 content-element">
                                              <div class=" h-100">
                                                  <div class="row g-0 h-100">
                                                      <div class="col-2 d-flex align-items-center justify-content-center  h-100">
                                                          <img src="{{ asset('img/n.png') }}" alt="" class="img-fluid" width="20px">
                                                      </div>
                                                      <div class="col-10 pt-2 d-flex align-items-center h-100 flex-column">
                                                        <span class="h5 d-flex justify-content-start w-100">Earn</span>
                                                        <p class="fw-normal">Jangan hanya HOLD, dapatkan bonus tiap jam dengan Earn</p>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                        <span class="h6 fw-lighter fw-semibold text-secondary">LAYANAN</span>
                                      </div>{{-- end row --}}
                                      <div class="row mb-3 align-items-stretch">
                                        <div class="col-md-12 content-element">
                                            <div class=" h-100">
                                                <div class="row g-0 h-100">
                                                    <div class="col-2 d-flex align-items-center justify-content-center  h-100">
                                                        <i data-feather="user" style="color: grey;" class="btn-flags"></i>    
                                                    </div>
                                                    <div class="col-10 pt-2 d-flex align-items-center h-100 flex-column">
                                                        <span class="h5 d-flex justify-content-start w-100">Pintu OTC</span>
                                                        <p class="fw-normal">Trading dengan jumlah besar dengan harga terbaik dengan transaksi instan.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> {{-- end col 12 --}}
                                    </div>{{-- end row --}}
                                    </div>


                                <div class="content-2  p-3 bg-white shadow rounded">
                                       <div class="row">
                                          <span class="h6 fw-lighter fw-semibold text-secondary">Harga</span>
                                        </div>{{-- end row --}}
                                        <div class="row mb-3 align-items-stretch">
                                          <div class="col-md-12 content-element">
                                              <div class=" h-100">
                                                  <div class="row g-0 h-100">
                                                      <div class="col-2 d-flex align-items-center justify-content-center  h-100">
                                                        <i class="bi bi-graph-up-arrow" style="color: black"></i>
                                                    </div>
                                                      <div class="col-10 pt-2 d-flex align-items-center h-100 flex-column">
                                                          <span class="h5 d-flex justify-content-start w-100">Harga Cryptocurrency</span>
                                                          <p class="fw-normal">Lihat harga crypto dan top movers secara real-time.</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div> {{-- end col 12 --}}
                                    </div>{{-- end row --}}
                                    <div class="row">
                                        <span class="h6 fw-lighter fw-semibold text-secondary">BIAYA&LIMIT</span>
                                      </div>{{-- end row --}}
                                      <div class="row mb-3 align-items-stretch">
                                          <div class="col-md-12 content-element">
                                              <div class=" h-100">
                                                  <div class="row g-0 h-100">
                                                      <div class="col-2 d-flex align-items-center justify-content-center  h-100">
                                                        <i class="bi bi-tag-fill" style="color: black"></i>                                                      </div>
                                                      <div class="col-10 pt-2 d-flex align-items-center h-100 flex-column">
                                                        <span class="h5 d-flex justify-content-start w-100">Biaya Transaksi</span>
                                                        <p class="fw-normal">Informasi biaya trading, penarikan, dan kirim crypto.</p>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row mb-3 align-items-stretch">
                                        <div class="col-md-12 content-element">
                                            <div class=" h-100">
                                                <div class="row g-0 h-100">
                                                    <div class="col-2 d-flex align-items-center justify-content-center  h-100">
                                                        <i class="bi bi-tag-fill" style="color: black" class="img-fluid" width="20px"></i>
                                                    </div>
                                                    <div class="col-10 pt-2 d-flex align-items-center h-100 flex-column">
                                                        <span class="h5 d-flex justify-content-start w-100">Limit Trading</span>
                                                        <p class="fw-normal">Ketahui jumlah beli/jual minimum dan maksimum di Pintu.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> {{-- end col 12 --}}
                                    </div>{{-- end row --}}
                                </div>
                                <div class="content-4  p-3 bg-white shadow rounded">
                                    <div class="row">
                                       <span class="h6 fw-lighter fw-semibold text-secondary">Harga</span>
                                     </div>{{-- end row --}}
                                     <div class="row mb-3 align-items-stretch">
                                       <div class="col-md-12 content-element">
                                           <div class=" h-100">
                                               <div class="row g-0 h-100">
                                                   <div class="col-2 d-flex align-items-center justify-content-center  h-100">
                                                     <i class="bi bi-graph-up-arrow" style="color: black"></i>
                                                 </div>
                                                   <div class="col-10 pt-2 d-flex align-items-center h-100 flex-column">
                                                       <span class="h5 d-flex justify-content-start w-100">Harga Cryptocurrency</span>
                                                       <p class="fw-normal">Lihat harga crypto dan top movers secara real-time.</p>
                                                   </div>
                                               </div>
                                           </div>
                                       </div> {{-- end col 12 --}}
                                 </div>{{-- end row --}}
                                 <div class="row">
                                     <span class="h6 fw-lighter fw-semibold text-secondary">BIAYA&LIMIT</span>
                                   </div>{{-- end row --}}
                                   <div class="row mb-3 align-items-stretch">
                                       <div class="col-md-12 content-element">
                                           <div class=" h-100">
                                               <div class="row g-0 h-100">
                                                   <div class="col-2 d-flex align-items-center justify-content-center  h-100">
                                                     <i class="bi bi-tag-fill" style="color: black"></i>                                                      </div>
                                                   <div class="col-10 pt-2 d-flex align-items-center h-100 flex-column">
                                                     <span class="h5 d-flex justify-content-start w-100">Biaya Transaksi</span>
                                                     <p class="fw-normal">Informasi biaya trading, penarikan, dan kirim crypto.</p>
                                                 </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row mb-3 align-items-stretch">
                                     <div class="col-md-12 content-element">
                                         <div class=" h-100">
                                             <div class="row g-0 h-100">
                                                 <div class="col-2 d-flex align-items-center justify-content-center  h-100">
                                                     <i class="bi bi-tag-fill" style="color: black" class="img-fluid" width="20px"></i>
                                                 </div>
                                                 <div class="col-10 pt-2 d-flex align-items-center h-100 flex-column">
                                                     <span class="h5 d-flex justify-content-start w-100">Limit Trading</span>
                                                     <p class="fw-normal">Ketahui jumlah beli/jual minimum dan maksimum di Pintu.</p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div> {{-- end col 12 --}}
                                 </div>{{-- end row --}}
                             </div>

                             
                             
                                
                                </div> {{-- end col --}}
                                <div class="col-lg-4">
                                        <div class="download  border-pill">
                                            <span class="text-white fw-bolder border p-2 rounded-pill">Download App</span>
                                        </div> 
                                  </div>{{-- end col-4 --}}
                                <div class="col-lg-2">
                                        <div class="bendera d-flex flex-row">
                                          <img src="{{ asset('img/bendera.png') }}" alt="" width="20px" height="15px" class="rounded">
                                          <i data-feather="chevron-down" style="color: white;" class="btn-flags"></i>
                                        </div>
                                        <div class="card chooise-flag" width="200px">
                                            <div class="">
                                                <div class="row mx-auto">
                                                    <div class="col-lg-12 fw-bolder text-secondary p-3">BAHASA</div>
                                                    <div class="col-lg-12 d-flex">
                                                        <div class="img p-2">
                                                            <img src="{{ asset('img/bendera.png') }}" alt="" width="20px">
                                                        </div>
                                                        <div class="text p-3">
                                                            <span class="fw-bolder text-primary">INDONESIA</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 d-flex">
                                                        <div class="img p-2">
                                                            <img src="{{ asset('img/inggris.png') }}" alt="" width="20px">
                                                        </div>
                                                        <div class="text p-3">
                                                            <span class="fw-bolder text-white">ENGLISH</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>{{-- end col-4 --}}    
                            </div>
                          </div>
                      </div> {{-- end row --}}
                    </div>
                 </div>
                </nav>
                
                <div class="main-header">

                </div>
                <div class="content-3  p-3 bg-white shadow rounded">
                    <div class="main">
                        <div class="row">
                            <div class="col-lg-6">
                               
                                  <div class="row mb-3 align-items-stretch">
                                    <div class="col-md-12 content-element">
                                        <div class=" h-100">
                                            <div class="row g-0 h-100">
                                                <div class="col-2 d-flex  align-items-center justify-content-center  h-100">
                                                    <i class="bi bi-newspaper" style="color: black"></i>
                                                </div>
                                                <div class="col-10 pt-2 d-flex content-element align-items-center h-100 flex-column">
                                                    <span class="h5 d-flex justify-content-start w-100">News</span>
                                                    <p class="fw-normal">Ketahui berita terbaru tentang crypto, blockchain, dan NFT.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> {{-- end col 12 --}}
                              </div>{{-- end row --}}
                              <div class="row mb-3 align-items-stretch ">
                                    <div class="col-md-12 content-element">
                                        <div class=" h-100">
                                            <div class="row g-0 h-100">
                                                <div class="col-2 d-flex align-items-center justify-content-center  h-100">
                                                    <i class="bi bi-lightbulb" style="color: black"></i>
                                                </div>
                                                <div class="col-10 pt-2 d-flex align-items-center h-100 flex-column">
                                                  <span class="h5 d-flex justify-content-start w-100">Academy</span>
                                                  <p class="fw-normal">Pelajari semua tentang crypto. Dari pemula sampai ahli, mulai di sini!</p>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                              
                                <div class="row mb-3 align-items-stretch">
                                  <div class="col-md-12 content-element">
                                      <div class=" h-100">
                                          <div class="row g-0 h-100">
                                              <div class="col-2 d-flex align-items-center justify-content-center  h-100">
                                                <i class="bi bi-card-heading" style="color: black"></i>
                                            </div>
                                              <div class="col-10 pt-2 d-flex align-items-center h-100 flex-column">
                                                  <span class="h5 d-flex justify-content-start w-100">Blog</span>
                                                  <p class="fw-normal">Temukan insight, tips & trik investasi, serta informasi seputar Pintu.</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div> {{-- end col 12 --}}
                              </div>{{-- end row --}}
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <span class="text-secondary fw-bolder">BANTUAN</span>
                                </div>
                                <div class="row">
                                    <div class="card border-0">
                                        <img src="{{ asset('img/lainya.png') }}" alt="" height="150px">
                                    </div>
                                </div>
                                <div class="row">
                                    <h5 class="pt-3">Masih Baru dalam Crypto?</h5>
                                </div>
                                <div class="row">
                                    <span>
                                        Kami siap membantu! Pahami crypto secara bertahap dengan Kelas.
                                    </span>
                                </div>
                                <div class="row">
                                    <h5 class="text-primary pt-3">Lihat Kelas Academy -></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- BATAS NAVBAR SUDAH SELESAI --}}
                {{-- <div class="container main-content" style="margin-top: 5.2%">
                    <div class="main-content mx-auto">
                        <div class="row">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-text">
                                        <div class="row">
                                            <div class="col-lg-12 main-h1">
                                                <h1>
                                                    Crypto App  <br>All in One
                                                </h1>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="text ">
                                                    <span class="text-white">Jual beli crypto simpel, mulai dari Rp 11.000.</span>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 mt-4">
                                                <div class="download p-2 bg-white rounded-pill">
                                                    <span class="text-primary fw-bolder">Download Sekarang</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
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
                                <div class="col-lg-6" style="margin-top: -9%">
                                    <div class="main-img">
                                        <img src="{{ asset('img/mainPhone.png') }}" alt="" width="97%">
                                    </div>
                                </div>      
                            </div>
                        </div>
                    </div>
                </div>
                --}}
            
    </div>{{-- end-main-hero --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        feather.replace();
    </script>
    <script>
        $(document).ready(function () {
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
