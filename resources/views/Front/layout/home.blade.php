@php
    $imagenesDesktop = [
        asset('Front/img/slide/desktop/2.jpg'),
        asset('Front/img/slide/desktop/1.jpg'),
        asset('Front/img/slide/desktop/3.jpg'),
        asset('Front/img/slide/desktop/4.jpg'),
    ];
    //shuffle($imagenesDesktop);

    $imagenesMobile = [
        asset('Front/img/slide/mobile/1.jpeg'),
        asset('Front/img/slide/mobile/2.jpeg')
    ];
    shuffle($imagenesMobile);
@endphp




<section class="hero">
<!-- Slider para ESCRITORIO -->
    <div class="hero-slider hero-slider-s1 d-none d-md-block">
        @foreach ($imagenesDesktop as $imagen)
            <div class="slide-item">
                <img src="{{ $imagen }}" alt class="slider-bg">
            </div>
        @endforeach
    </div>

    <!-- Slider para MÓVILES -->
    <div class="hero-slider hero-slider-s1 d-block d-md-none">
        @foreach ($imagenesMobile as $imagen)
            <div class="slide-item">
                <img src="{{ $imagen }}" alt class="slider-bg">
            </div>
        @endforeach
    </div>
    <div class="wedding-announcement">
        <div class="couple-name-merried-text">
            <h2 class="wow slideInUp d-none d-md-block" data-wow-duration="1s" style="margin-top:400px;">Melissa &amp; Cristian</h2>
            <h2 class="wow slideInUp d-block d-md-none" data-wow-duration="1s" style="margin-top:200px;">Melissa &amp; Cristian</h2>
            {{-- <h2 class="wow slideInUp" data-wow-duration="1s" style="margin-top:400px;">Melissa &amp; Cristian</h2> --}}
            <div class="married-text wow fadeIn" data-wow-delay="1s">
                <h4 class="">
                <span class=" wow fadeInUp" data-wow-delay="1.05s">N</span>
                <span class=" wow fadeInUp" data-wow-delay="1.11s">o</span>
                <span class=" wow fadeInUp" data-wow-delay="1.17s">s</span>
                <span>&nbsp;</span>
                <span class=" wow fadeInUp" data-wow-delay="1.23s">c</span>
                <span class=" wow fadeInUp" data-wow-delay="1.29s">a</span>
                <span class=" wow fadeInUp" data-wow-delay="1.35s">s</span>
                <span class=" wow fadeInUp" data-wow-delay="1.41s">a</span>
                <span class=" wow fadeInUp" data-wow-delay="1.47s">m</span>
                <span class=" wow fadeInUp" data-wow-delay="1.53s">o</span>
                <span class=" wow fadeInUp" data-wow-delay="1.59s">s</span>

                </h4>
            </div>
            <!-- <i class="fa fa-heart"></i> -->
        </div>

        <div class="save-the-date">
            <h4>Save the date</h4>
            <span class="date">09 MAY 2025</span>
        </div>
    </div>
</section>
