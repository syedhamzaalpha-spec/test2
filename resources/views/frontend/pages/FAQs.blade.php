@extends('components.layouts.web.master')
@section('main-content')
<section class="bg-teal-100 md:bg-[url(/assets/img/faqs/faq-bg.jpg)] bg-no-repeat bg-center bg-cover h-[calc(100dvh-140px)]">
    <div class="container flex items-center">
        <div class="w-full lg:w-7/12">
        <div class="pt-10"> 
            <h3 class="text-black md:text-white">Your <br class="hidden lg:block">
           <span class="text-secondary bg-white"> Frequently Asked Questions</span></h3>
           <p class="text-black md:text-white ">Find clear answers to common questions and feel confident as you navigate your trademark journey with Trademark Legit.</p>
        </div>
        </div>
        <div class="hidden lg:block lg:w-5/12">
        <img src="{{ asset('assets/img/faqs/faq-banner.png') }}" alt="faqs-banner" class="absolute bottom-0 w-[47vw] right-3">
        </div>
    </div>
</section>
<x-layouts.web.marqueeslider />
    <x-layouts.web.faqs />
    <x-layouts.web.feedback />
    <x-layouts.web.helpsection />
    @endsection