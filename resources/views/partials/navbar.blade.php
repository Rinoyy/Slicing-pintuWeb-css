<nav class="navbar navbar-expand-lg pt-3 pb-4">
    {{-- container-fluid sebagai direct child nav agar Bootstrap apply flex treatment --}}
    <div class="container-fluid navbar-inner">

        {{-- Kiri: Logo + App Tabs (selalu tampil) --}}
        <div class="d-flex align-items-center gap-3">
            <img src="{{ asset('img/original.png') }}" alt="Pintu" width="80" style="margin-top:-4px">
            <div class="d-none d-lg-flex">
                <div class="btn-button border">
                    <button class="border-0 bg-transparent btn-navbar active text-white">Pintu</button>
                    <button class="border-0 bg-transparent btn-navbar text-white">Pro</button>
                    <button class="border-0 bg-transparent btn-navbar text-white">Web3</button>
                </div>
            </div>
        </div>

        {{-- Tombol Hamburger (hanya mobile) --}}
        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Kanan: Link Nav + Download + Bendera — collapse di mobile, baris di desktop --}}
        <div class="collapse navbar-collapse" id="navbarContent">
            <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center
                        ms-lg-auto gap-3 gap-lg-4 py-3 py-lg-0 fw-semibold">

                <span class="hover-nav hover-nav-1 text-white">Fitur</span>
                <span class="hover-nav hover-nav-2 text-white">Trading</span>
                <span class="hover-nav hover-nav-3 text-white">Edukasi</span>
                <span class="hover-nav hover-nav-4 text-white">Lainnya</span>

                <div class="download-app-btn border rounded-pill px-3 py-2 text-center">
                    <span class="text-white fw-bolder">Download App</span>
                </div>

                {{-- Pilihan bahasa: collapse ke bawah, tanpa absolute --}}
                <div>
                    <div class="bendera d-flex align-items-center gap-2"
                         data-bs-toggle="collapse" data-bs-target="#langMenu"
                         aria-expanded="false" style="cursor:pointer">
                        <img src="{{ asset('img/bendera.png') }}" alt="ID" width="22" height="16" class="rounded">
                        <i class="bi bi-chevron-down text-white lang-chevron" style="font-size:12px; transition: transform 0.2s;"></i>
                    </div>
                    <div class="collapse" id="langMenu">
                        <div class="pt-2 pb-1">
                            <p class="text-white opacity-50 fw-bold mb-2" style="font-size:11px; letter-spacing:1px;">BAHASA</p>
                            <a href="#" class="d-flex align-items-center gap-2 text-decoration-none mb-2">
                                <img src="{{ asset('img/bendera.png') }}" width="20" class="rounded-1">
                                <span class="fw-bolder text-primary">INDONESIA</span>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-2 text-decoration-none">
                                <img src="{{ asset('img/inggris.png') }}" width="20" class="rounded-1">
                                <span class="fw-bold text-white opacity-75">ENGLISH</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</nav>
