@extends('layouts.website.main')
@section('content')

<style>
    .page-section {
        padding: 40px 0;
    }

    .section-one {
        margin-top: 60px;
    }

    .section-divider {
        border: none;
        border-top: 1px solid #ccc;
        margin: 40px 0;
    }

    .section-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .section-title {
        font-size: clamp(24px, 2vw, 36px);
        color: black;
        margin-bottom: 20px;
        text-align: center;
        font-weight: 600;
    }

    .section-text {
        font-size: clamp(15px, 1vw, 17px);
        line-height: 1.7;
        color: #333;
        text-align: justify;
    }

</style>
<section class="page-section section-one" id="one">
    <h1 class="section-title">Privacy</h1>
    <div class="section-container">
        <p class="section-text">{!! $term->privacy ?? 'No privacy policy available.' !!}</p>
    </div>
</section>

<hr class="section-divider">
<section class="page-section" id="two">
    <h1 class="section-title">Equality</h1>
    <div class="section-container">
        <p class="section-text">{!! $term->equality ?? 'No equality available.' !!}</p>
    </div>
</section>

<hr class="section-divider">
<section class="page-section" id="three">
    <h1 class="section-title">Cookie Policy</h1>
    <div class="section-container">
        <p class="section-text">{!! $term->cookie ?? 'No cookie available.' !!}</p>
    </div>
</section>

<hr class="section-divider">
<section class="page-section" id="four">
    <h1 class="section-title">Terms of Use</h1>
    <div class="section-container">
        <p class="section-text">{!! $term->terms ?? 'No terms available.' !!}</p>
    </div>
</section>

<script>
window.onload = function() {
    if (window.location.hash) {
        const element = document.getElementById(window.location.hash.substring(1));
        if (element) {
            element.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
};
</script>

@endsection
