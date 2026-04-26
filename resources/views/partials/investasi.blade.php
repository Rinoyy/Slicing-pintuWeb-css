<section class="investasi-section">
    <div class="container">

        <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
            <h3 class="mb-0">Jika kamu investasi</h3>
            <select class="form-select d-inline-block w-auto fw-bolder text-primary" id="pilih" style="font-size:20px;">
                <option value="1" selected>Bitcoin</option>
                <option value="2">Ethereum</option>
                <option value="3">Tether</option>
                <option value="4">Solana</option>
                <option value="5">Ripple</option>
            </select>
        </div>

        <div class="investasi-box">
            <div class="row g-5 align-items-center">

                {{-- Left: Inputs --}}
                <div class="col-lg-6">

                    <p class="range-label">Dengan modal awal</p>
                    <div id="range1" class="mb-4">
                        <input type="range" id="rangeInput1"
                               min="64000" max="60000000" step="1000" value="64000"
                               oninput="updateValue(this.value)">
                        <div class="text-muted mt-1" style="font-size:13px;">Rp 64.000 — Rp 60.000.000</div>
                    </div>

                    <div id="range2" class="mb-4" style="display:none;">
                        <input type="range" id="rangeInput2"
                               min="10000" max="40000000" step="1000" value="10000"
                               oninput="updateValue(this.value)">
                        <div class="text-muted mt-1" style="font-size:13px;">Rp 10.000 — Rp 40.000.000</div>
                    </div>

                    <p class="range-label mt-2">Selama</p>
                    <div class="d-flex flex-wrap gap-2 mt-2">
                        <button id="1_btn" class="btn btn-tahun">1 Tahun</button>
                        <button id="2_btn" class="btn btn-tahun">2 Tahun</button>
                        <button id="3_btn" class="btn btn-tahun">3 Tahun</button>
                        <button id="4_btn" class="btn btn-tahun">4 Tahun</button>
                    </div>

                </div>

                {{-- Right: Result --}}
                <div class="col-lg-6 text-center">
                    <p class="text-muted mb-2">Estimasi hasil investasi</p>
                    <div id="rangeValue" class="range-value-display">Rp 64.000</div>
                    <p class="text-muted mt-2" style="font-size:13px;">*Berdasarkan historis performa aset</p>
                </div>

            </div>
        </div>

    </div>
</section>
