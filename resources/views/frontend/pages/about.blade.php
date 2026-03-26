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
    <section class="block xl:hidden">
        <div class="container">

            <div class="flex flex-col justify-center items-center">
                <h2>Why Choose <span class="text-secondary">Trademark Legit?</span></h2>
                <p class="text-center [clamp(14px,2vw,16px)]">Choosing Trademark Legit Means Choosing Peace Of Mind. We
                    Combine Affordability, Accuracy, And Personalized Support To Help You Protect Your Brand With
                    Confidence. Our Streamlined Process Eliminates The Guesswork From Trademark Registration, While Our
                    Expert Team Ensures Every Detail Is Handled With Precision.</p>
                <img src="{{ asset('assets/img/about/circle-img.png') }}" alt="circal-img"
                    class="w-[20vw] border-4 rounded-full border-secondary p-1">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2  mt-5 gap-2">
                <div class="group ">
                    <div
                        class= "group-hover:bg-secondary group-hover:scale-105 border-2 duration-300 border-secondary py-5 px-5 flex flex-col     justify-between min-h-24 h-full">
                        <div>
                            <h3 class="text-secondary group-hover:text-white text-[clamp(16px,3vw,26px)]">Top-Notch
                                Expertise</h3>
                        </div>
                        <div>
                            <p class="group-hover:text-white">Our Team Brings In-Depth Legal Knowledge And Procedures To
                                Ensure Your Issues Are Adequately Addressed.</p>
                        </div>

                    </div>
                </div>
                <div class="group  ">
                    <div
                        class= "group-hover:bg-secondary group-hover:scale-105 border-2 duration-300 border-secondary py-5 px-5 flex flex-col     justify-between min-h-24 h-full">
                        <div>
                            <h3 class="text-secondary group-hover:text-white text-[clamp(16px,3vw,26px)]">Affordable &
                                Transparent</h3>
                        </div>
                        <div>
                            <p class="group-hover:text-white">We Offer Competitive Pricing Without Hidden Fees, Making
                                Professional Trademark Services Accessible To All.</p>
                        </div>

                    </div>
                </div>
                <div class="group  ">
                    <div
                        class= " group-hover:bg-secondary group-hover:scale-105 border-2 duration-300 border-secondary py-5 px-5 flex flex-col     justify-between min-h-24 h-full">
                        <div>
                            <h3 class="text-secondary group-hover:text-white text-[clamp(14px,3vw,26px)]">Insight-Backed
                                Solutions</h3>
                        </div>
                        <div>
                            <p class="group-hover:text-white ">We Utilize Comprehensive Research And Data-Driven Insights To
                                Strengthen Your Trademark Applications And Strategies.</p>
                        </div>

                    </div>
                </div>
                <div class="group  ">
                    <div
                        class= "group-hover:bg-secondary group-hover:scale-105 border-2 duration-300 border-secondary py-5 px-5 flex flex-col     justify-between min-h-24 h-full">
                        <div>
                            <h3 class="text-secondary group-hover:text-white text-[clamp(16px,3vw,26px)]">Affordable &
                                Transparent</h3>
                        </div>
                        <div>
                            <p class="group-hover:text-white">We Offer Competitive Pricing Without Hidden Fees, Making
                                Professional Trademark Services Accessible To All.</p>
                        </div>

                    </div>
                </div>
                <div class="group  ">
                    <div
                        class= "group-hover:bg-secondary group-hover:scale-105 border-2 duration-300 border-secondary py-5 px-5 flex flex-col     justify-between min-h-24 h-full">
                        <div>
                            <h3 class="text-secondary group-hover:text-white text-[clamp(16px,3vw,26px)]">Driven by Results
                            </h3>
                        </div>
                        <div>
                            <p class="group-hover:text-white">We Deliver The Best Results, Successful Registrations, Strong
                                Brand Protection, And Long-Term Client Satisfaction.</p>
                        </div>

                    </div>
                </div>
                <div class="group  ">
                    <div
                        class= "group-hover:bg-secondary group-hover:scale-105 border-2 duration-300 border-secondary py-5 px-5 flex flex-col     justify-between min-h-24 h-full">
                        <div>
                            <h3 class="text-secondary group-hover:text-white text-[clamp(16px,3vw,26px)]">Strategic Brand
                                Protection</h3>
                        </div>
                        <div>
                            <p class="group-hover:text-white">Every Case Is Guided By A Personalized Approach To Ensure Your
                                Brand Is Safeguarded With Full Precision.</p>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <section class="hidden xl:block">
        <div class="container">

            <div class="text-center  py-5">
                <h2>Why Choose <span class="text-secondary">Trademark Legit?</span></h2>
                <p>Choosing Trademark Legit Means Choosing Peace Of Mind. We Combine Affordability, Accuracy, And
                    Personalized Support To Help You Protect Your Brand With Confidence. Our Streamlined Process
                    Eliminates
                    The Guesswork From Trademark Registration, While Our Expert Team Ensures Every Detail Is Handled
                    With
                    Precision.</p>
            </div>
            <div class="absolute inset-0 left-1/2 top-1/2 -translate-y-35 -translate-x-1/2  w-[59vw] ">
                <svg width="100%" height="100%" viewBox="0 0 1200 700" preserveAspectRatio="xMidYMid meet"
                    class="  object-contain">

                    <ellipse cx="600" cy="350" rx="250" ry="220" fill="rgb(204 251 241 / 0.4)"
                        transform="rotate(-15 600 350)"></ellipse>

                    <line x1="290" y1="110" x2="560" y2="290" stroke="#0d9488" stroke-width="4">
                    </line>
                    <line x1="290" y1="350" x2="540" y2="350" stroke="#0d9488" stroke-width="4">
                    </line>
                    <line x1="290" y1="590" x2="560" y2="410" stroke="#0d9488" stroke-width="4">
                    </line>
                    <line x1="910" y1="110" x2="640" y2="290" stroke="#0d9488" stroke-width="4">
                    </line>
                    <line x1="910" y1="350" x2="660" y2="350" stroke="#0d9488"
                        stroke-width="4">
                    </line>
                    <line x1="910" y1="590" x2="640" y2="410" stroke="#0d9488"
                        stroke-width="4">
                    </line>
                </svg>
            </div>
            <div class="relative flex  justify-between  gap-2">
                <div class="space-y-10 xl:w-4/12 sm:w-6/12 w-full">
                    <div class="border-2 border-secondary px-3 py-5 flex flex-col hover:bg-secondary hover:scale-110">
                        <h5 class="text-secondary hover:text-white text-[clamp(12px,2vw,22px)]">Top-Notch Expertise</h5>
                        <p class="hover:text-white">Our Team Brings In-Depth Legal Knowledge And Procedures To Ensure
                            Your Issues Are Adequately
                            Addressed.</p>
                    </div>
                    <div class="border-2 border-secondary px-3 py-5 flex flex-col">
                        <h5 class="text-secondary  text-[clamp(12px,2vw,22px)]">Insight-Backed Solutions</h5>
                        <p>We Utilize Comprehensive Research And Data-Driven Insights To Strengthen Your Trademark
                            Applications And Strategies.</p>
                    </div>
                    <div class="border-2 border-secondary px-3 py-5 flex flex-col">
                        <h5 class="text-secondary  text-[clamp(12px,2vw,22px)]">Affordable & Transparent</h5>
                        <p>We Offer Competitive Pricing Without Hidden Fees, Making Professional Trademark Services
                            Accessible To All.</p>
                    </div>
                </div>

                <div class=" w-0 hidden xl:block   xl:w-4/12">
                    <div class="flex justify-center items-center p-8">
                        <img src="{{ asset('assets/img/about/circle-img (1).png') }}" alt="circal-img"
                            class="object-contain w-60  border-4 border-secondary rounded-full p-2 shadow-secondary absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                    </div>
                </div>
                <div class="space-y-10 xl:w-4/12 sm:w-6/12 w-full">
                    <div class="border-2 border-secondary px-3 py-5 flex flex-col">
                        <h5 class="text-secondary  text-[clamp(12px,2vw,22px)]">Driven by Results</h5>
                        <p>We Deliver The Best Results, Successful Registrations, Strong Brand Protection, And Long-Term
                            Client Satisfaction.</p>
                    </div>
                    <div class="border-2 border-secondary px-3 py-5 flex flex-col">
                        <h5 class="text-secondary  text-[clamp(12px,2vw,22px)]">Strategic Brand Protection</h5>
                        <p>Every Case Is Guided By A Personalized Approach To Ensure Your Brand Is Safeguarded With Full
                            Precision.</p>
                    </div>
                    <div class="border-2 border-secondary px-3 py-5 flex flex-col">
                        <h5 class="text-secondary  text-[clamp(12px,2vw,22px)]">Strategic Brand Protection</h5>
                        <p>Every Case Is Guided By A Personalized Approach To Ensure Your Brand Is Safeguarded With Full
                            Precision.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <x-cta2 />
    <x-layouts.web.feedback />
    <x-layouts.web.faqs />
    <x-layouts.web.helpsection />

    {{-- end Why Choose Trademark Legit? --}}
@endsection
