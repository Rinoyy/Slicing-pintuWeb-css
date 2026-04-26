@extends('layouts.app')

@section('content')

{{-- Hero section (gradient background) --}}
<div class="super-container main-hero">
    @include('partials.navbar')
    @include('partials.hero')
</div>

{{-- White sections --}}
<div class="sponsor">
    @include('partials.sponsor-bar')
    @include('partials.feature-cards')
    @include('partials.ticker')
</div>

@include('partials.crypto-assets')
@include('partials.satu-aplikasi')
@include('partials.investasi')

@endsection

@push('scripts')
<script>
$(document).ready(function () {

    // ── Investment calculator ──────────────────────────────────────
    const fmt = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 });

    function updateValue(value) {
        $('#rangeValue').text(fmt.format(value));
    }

    window.updateValue = updateValue;

    $('#range2').hide();

    $('#pilih').on('change', function () {
        const val = $(this).val();
        if (val == 2) {
            $('#range1').hide();
            $('#range2').show();
        } else {
            $('#range2').hide();
            $('#range1').show();
        }
    });

    const tahunBtns = ['#1_btn', '#2_btn', '#3_btn', '#4_btn'];
    $.each(tahunBtns, function (_, id) {
        $(id).on('click', function (e) {
            e.preventDefault();
            $.each(tahunBtns, function (_, b) { $(b).removeClass('btn_investasi'); });
            $(id).addClass('btn_investasi');
        });
    });

    // ── App switcher tabs ─────────────────────────────────────────
    $('.btn-navbar').on('click', function () {
        $('.btn-navbar').removeClass('active');
        $(this).addClass('active');
    });

    // ── Navbar dropdown hover (Fitur / Trading / Edukasi / Lainnya) ──
    function setupHover(navSel, contentSel, styles) {
        $(contentSel).hide();

        $(navSel).hover(
            function () { $(contentSel).css(styles).stop(true, true).fadeIn(100); },
            function () {
                setTimeout(function () {
                    if (!$(contentSel).is(':hover') && !$(navSel).is(':hover')) {
                        $(contentSel).fadeOut(100);
                    }
                }, 200);
            }
        );

        $(contentSel).hover(
            function () { $(this).stop(true, true).fadeIn(100); },
            function () {
                setTimeout(function () {
                    if (!$(navSel).is(':hover')) { $(contentSel).fadeOut(100); }
                }, 200);
            }
        );
    }

    setupHover('.hover-nav-1', '.content-1', { background:'white', width:'400px', position:'absolute', 'margin-top':'4.5%', color:'black' });
    setupHover('.hover-nav-2', '.content-2', { background:'white', width:'400px', position:'absolute', 'margin-top':'4.5%', color:'black' });
    setupHover('.hover-nav-3', '.content-3', { background:'white', width:'800px', position:'absolute', 'margin-top':'3%',   color:'black', 'margin-left':'25%' });
    setupHover('.hover-nav-4', '.content-4', { background:'white', width:'400px', position:'absolute', 'margin-top':'3%',   color:'black', 'margin-left':'5%' });

    // Flag dropdown ditangani Bootstrap dropdown bawaan

});
</script>
@endpush
