@extends('components.layouts.web.master')
@section('main-content')
<section class="bg-[url(/assets/img/about/contact-bg.jpg)] bg-no-repeat bg-cover bg-center h-[calc(100dvh-140px)]">
    <div class="container flex">
        <div class="w-full lg:w-7/12 md:pt-20">
            <h3 class="text-white">Contact <span class="text-secondary bg-white"> <br class="hidden lg:block"> Trademark Legit</span></h3>
            <p class="text-white">Gain complete insight into Trademark Legit and feel confident knowing your case is in safe hands.</p>
        </div>
        <div class="hidden lg:block lg:w-5/12 ">
        <img src="{{ asset('assets/img/about/contact-banner.png') }}" alt="contactbanner" class="absolute bottom-0 w-[40vw]">
        </div>
    </div>
</section>
<x-layouts.web.marqueeslider />
<section class="bg-primary">
    <div class="container">
        <div class="text-center px-10" >
            <span class="text-white text-2xl ">CONTACT US</span>
           <h2 class="text-white pt-5">We're Here <span class="text-secondary">To Help</span></h2>
           <p class="text-[clamp(18px,3vw,22px)] text-white ">Whether You Have Questions, Need Guidance, Or Want To Get Started With Your Trademark Registration, Our Team Is Ready To Assist You.</p>
        </div>

        <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-5">
            <div class="group">
            <div class=" border border-white rounded-lg py-9 px-7 text-center group-hover:bg-white transition-all  group-hover:-translate-y-1">
                <h3 class="text-white text-[clamp(14px,2.5vw,18px)] flex gap-2 justify-center items-center group-hover:text-black"><img src="{{ asset('assets/img/about/phone.svg') }}" alt="" class="group-hover:invert-100 w-5">Contact Number</h3>
                <p class="text-white group-hover:text-black">Reach Us on Call At (773) 636-2167. We Will Assist You in the Best way possible</p>
                <button class=" rounded-lg px-5 py-3 bg-black text-white font-bold mt-3 group-hover:bg-secondary group-hover:text-white hover:px-8 duration-500">Call Now</button>
            </div>
            </div>
             <div class="group">
            <div class=" border border-white rounded-lg py-9 px-3 text-center group-hover:bg-white transition-all  group-hover:-translate-y-1">
                <h3 class="text-white text-[clamp(14px,2.5vw,18px)] flex gap-2 justify-center items-center group-hover:text-black"><img src="{{ asset('assets/img/contact/email.svg') }}" alt="" class="group-hover:invert-100 w-5">Email Address</h3>
                <p class="text-white group-hover:text-black">Reach Us On Email At sales@trademarklegit.com We Look Forward To Assisiting You!</p>
                <button class=" rounded-lg px-5 py-3 bg-black text-white font-bold mt-3 group-hover:bg-secondary group-hover:text-white hover:px-8 duration-500">Call Now</button>
            </div>
            </div>
             <div class="group">
            <div class=" border border-white rounded-lg py-9 px-3 text-center group-hover:bg-white transition-all  group-hover:-translate-y-1">
                <h3 class="text-white text-[clamp(14px,2.5vw,18px)] flex gap-2 justify-center items-center group-hover:text-black"><img src="{{ asset('assets/img/contact/chat.svg') }}" alt="" class="group-hover:invert-100 w-5">Live Chat</h3>
                <p class="text-white group-hover:text-black">Got a Query? Tap the chat button below to connect with us. we are always here to help!</p>
                <button class=" rounded-lg px-5 py-3 bg-black text-white font-bold mt-3 group-hover:bg-secondary group-hover:text-white hover:px-8 duration-500">Call Now</button>
            </div>
            </div>
           
        </div>
    </div>

</section>
{{-- map-section --}}
<section>
    <div class="container">
        <div class="text-center">
        <span class="text-2xl mt-5">VISIT</span>
        <h2>our <span class="text-secondary">office</span></h2>
        <p class="px-20 text-[clamp(14px,2.5,18px)] py-5">Whether you're planning a visit or just curious, our doors are open during business
            hours — and we're always happy to assist.</p>
        </div>
        <div class="w-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3807024474254!2d-87.63066599999999!3d41.884668999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2cba62c2f7e7%3A0x9e0ec3dccd459843!2s161%20N%20Clark%20St%2C%20Chicago%2C%20IL%2060601%2C%20USA!5e0!3m2!1sen!2s!4v1773788129615!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
        </div>
    </div>
</section>
<x-layouts.web.helpsection />
@endsection
