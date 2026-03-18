@extends('components.layouts.web.master')
@section('main-content')
    {{-- about-hero-section-start --}}

    <section class="bg-[url(/assets/img/about/about-bg.jpg)] bg-no-repeat bg-cover bg-center lg:h-[calc(100dvh-140px)]">
        <div class="container flex ">
            <div class="w-full  lg:w-7/12">
                <article class="py-10">
                    <h2 class="text-white">About <br class="hidden lg:block">
                        <span class=" bg-white text-secondary ">Trademark Legit</span>
                    </h2>
                    <p class="text-white">Gain complete insight into Trademark Legit and feel confident knowing your case is
                        in safe hands.</p>
                </article>
            </div>
            <figure class="lg:w-5/12 lg:block hidden">
                <img src="{{ asset('assets/img/about/about-banner.png') }}" alt="about-banner"
                    class=" absolute bottom-0 w-[40vw]">
            </figure>
        </div>
    </section>
    <x-layouts.web.marqueeslider />
    {{-- about-hero-section-end --}}
    <section>
        <div class="container flex flex-col lg:flex-row">
            <div class="w-full lg:w-6/12">
                <figure class="mx-5">
                    <img src="{{ asset('assets/img/about/About-Trademark-Legit.png') }} "alt="about-trademark-lagit"
                        class="object-contain">
                </figure>
            </div>
            <div class="w-full lg:w-6/12">
                <article class="pt-5 lg:pt-0">
                    <p>About <span class="text-secondary"> Trademark Legit</span></p>
                    <h3>
                        Discover How Trademark Legit Simplifies Brand <span class="text-secondary">Protection For
                            Businesses</span> Of All Sizes.
                    </h3>
                    <h6>At Trademark Legit, we believe brand protection should be accessible to everyone, not just those
                        with big budgets.</h6>
                    <p>Founded with the vision of making trademark registration simple, affordable, and effective, Trademark
                        Legit serves businesses of all sizes, from solo entrepreneurs to growing corporations. We understand
                        that while large companies can easily afford high legal fees, small business owners often face
                        financial barriers that leave their brands vulnerable to infringement.</p>
                    <p>Without a registered trademark, proving ownership becomes nearly impossible, and your original ideas
                        can be claimed by someone else. That's where Trademark Legit steps in — to level the playing field
                        and ensure that no business, regardless of size, is left unprotected.</p>
                </article>
            </div>
        </div>

    </section>
    

    {{-- out-expertice --}}

    <section class="bg-[url(/assets/img/about/our-mission-And-expertises.jpg)] bg-no-repeat bg-cover bg-center">
        <div class="container">
            <div class="w-full lg:w-7/12">
                <h2 class="text-white">our mission And expertises</h2>
                <p class="text-white">At Trademark Legit, our mission is to make brand protection simple, affordable, and
                    accessible for every business — from independent startups to established enterprises. We believe that
                    every entrepreneur deserves the right to secure their brand identity without facing legal or financial
                    hurdles.</p>
                <p class="text-white">Our team is composed of highly trained trademark specialists who bring years of
                    focused experience to every case. Through a rigorous training program and a commitment to staying
                    up-to-date with trademark laws, we ensure that our clients receive expert guidance and dependable
                    service every step of the way.</p>
            </div>
        </div>
    </section>
    {{-- out-expertice-end --}}

    {{-- start Why Choose Trademark Legit? --}}
    <section>
        <div class="container ">
            <div class="text-center  py-5">
                <h2>Why Choose <span class="text-secondary">Trademark Legit?</span></h2>
                <p>Choosing Trademark Legit Means Choosing Peace Of Mind. We Combine Affordability, Accuracy, And
                    Personalized Support To Help You Protect Your Brand With Confidence. Our Streamlined Process Eliminates
                    The Guesswork From Trademark Registration, While Our Expert Team Ensures Every Detail Is Handled With
                    Precision.</p>
            </div>
            
            <figure class="flex lg:flex-row flex:col justify-between  gap-2">
                <div class="space-y-10 md:w-4/12 w-6/12">
                    <div class="border-2 border-secondary px-3 py-5 ">
                    <h5 class="text-secondary">Top-Notch Expertise</h5>
                    <p>Our Team Brings In-Depth Legal Knowledge And Procedures To Ensure Your Issues Are Adequately Addressed.</p>
                    </div>
                    <div class="border-2 border-secondary px-3 py-5 ">
                    <h5 class="text-secondary">Insight-Backed Solutions</h5>
                    <p>We Utilize Comprehensive Research And Data-Driven Insights To Strengthen Your Trademark Applications And Strategies.</p>
                    </div>
                    <div class="border-2 border-secondary px-3 py-5 ">
                    <h5 class="text-secondary">Affordable & Transparent</h5>
                    <p>We Offer Competitive Pricing Without Hidden Fees, Making Professional Trademark Services Accessible To All.</p>
                    </div>
                </div>
                <div class=" w-full hidden md:block  md:w-4/12">
                  <div class="flex justify-center items-center p-8">
                    <img src="{{ asset('assets/img/about/circle-img (1).png') }}" alt="circal-img" class="w-[20vw]  border-4 border-secondary rounded-full p-2 shadow-secondary">
                  </div>
                </div>
                <div class="space-y-10 md:w-4/12 w-6/12">
                    <div class="border-2 border-secondary px-3 py-5 ">
                    <h5 class="text-secondary">Driven by Results</h5>
                    <p>We Deliver The Best Results, Successful Registrations, Strong Brand Protection, And Long-Term Client Satisfaction.</p>
                    </div>
                    <div class="border-2 border-secondary px-3 py-5 ">
                    <h5 class="text-secondary">Strategic Brand Protection</h5>
                    <p>Every Case Is Guided By A Personalized Approach To Ensure Your Brand Is Safeguarded With Full Precision.</p>
                    </div>
                    <div class="border-2 border-secondary px-3 py-5 ">
                    <h5 class="text-secondary">Simple, Stress-Free Process</h5>
                    <p>Our Unique Platform And Dedicated Support Make It Easy To Navigate Every Step Of The Process With Confidence.</p>
                    </div>
                </div>
            </figure>
        </div>
    </section>
    <x-cta2 />
    <x-layouts.web.clintexperinec />
     <x-layouts.web.faqs />
    
    {{-- end Why Choose Trademark Legit? --}}
@endsection
