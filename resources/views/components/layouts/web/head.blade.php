<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ $title ?? 'DBA' }}</title>
<meta name="description" content="{{ $description ?? '' }}">
<meta name="keywords" content="{{ $keywords ?? '' }}">
{{-- <link rel="icon" type="images/jpg" href="{{ asset('assets/img/fav.svg') }}"> --}}
<!-- swiper js link -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" /> -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" /> -->

{{-- Preload Hero Banner Image --}}
{{-- <link rel="preload" as="image" href="{{ asset('images/hero-banner.webp') }}" type="image/webp" fetchpriority="high"> --}}
{{-- Swiper Slider CDN --}}

<link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</noscript>
{{-- font family --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Russo+One&display=swap"
    rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">


{{-- Fancybox CDN --}}

{{-- <link rel="preload" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
</noscript> --}}

@vite('resources/css/app.css')
