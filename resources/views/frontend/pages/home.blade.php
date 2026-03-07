@extends('components.layouts.web.master')
@section('main-content')
    <section
        class="ralative bg-cover bg-center lg:h-[calc(100dvh-80px)]  bg-no-repeat bg-[#cbe3e1] md:bg-[url(/assets/img/hero.jpg)]">
        <div class="container ">
            <div class="row ">
                {{-- col-1 --}}
                <div class="w-full lg:w-7/12 w-12">
                    <h3 class=" font-bold text-black md:text-white font-RussoOne">Your <span class="text-teal-600 bg-white">
                            Trusted
                        </span>Trademark & <br>Legal <span class="text-teal-700 bg-white">Advisory</span> Office</h3>
                    <h5 class="font-bold h-lh  text-black md:text-white ">Protecting Your Brand. Supporting Your Business.
                    </h5>
                    <p class=" text-black md:text-white md:wrap-normal">Welcome to Trademark Legit, where experience meets
                        precision. We provide
                        end-to-end trademark registration services and a full spectrum of legal counsel tailored for
                        businesses, entrepreneurs, and creatives.</p>
                    <h6 class="font-bold h-lh  text-black md:text-white ">Our Attorneys Guide You Through:</h6>
                    <div>
                        <ul class="grid md:grid-cols-2  justify-start">
                            <li class=" text-black md:text-white font-semibold flex gap-0.5"><img
                                    src="{{ asset('assets/img/chevron-right.svg') }}" alt="" width="15">
                                Trademark Applications & Renewals</li>
                            <li class="  text-black md:text-white flex font-semibold"><img
                                    src="{{ asset('assets/img/chevron-right.svg') }}" alt=""
                                    width="15">Copyright And IP Protection</li>
                            <li class="  text-black md:text-white flex font-semibold"><img
                                    src="{{ asset('assets/img/chevron-right.svg') }}" alt="" width="15">Office
                                Action Responses</li>
                            <li class="  text-black md:text-white flex font-semibold"><img
                                    src="{{ asset('assets/img/chevron-right.svg') }}" alt=""
                                    width="15">Corporate Legal Matters</li>
                        </ul>

                    </div>
                    <div class="flex justify-start gap-5 lg:mt-10 items-center">
                        <div>
                            <butto
                                class="bg-teal-700 hover:bg-white hover:text-teal-700 duration-3 py-3 px-10 rounded-full text-white font-bold">
                                Get Start</button>
                        </div>
                        <div>
                            <button
                                class="bg-black text-white hover:border-teal-700 py-2 px-7 rounded-full font-semibold">Live
                                Chat</button>
                        </div>
                    </div>
                </div>



                {{-- col-2 --}}
                <div class=" lg:max-w-5/12">
                    <img src="{{ asset('assets/img/hero-img.png') }}" alt=""
                        class="bottom-0 hidden lg:block lg:right-1 w-[clamp(450px,2vw,600px)] h-auto">
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container flex">
            <div class="lg:w-6/12 w-12 w-full">
                <div>
                    <h2 class="text-black font-bold font-[--font-russoOne]">Your Intellectual Property, <span
                            class="text-teal-700">Our Priority</span></h2>
                    <p><span class="text-teal-700"> Trademark Legit </span>is your one-stop solution for all intellectual
                        property needs. Whether you're safeguarding a groundbreaking idea, a distinctive brand identity, or
                        original creative work, we've got you covered. With a proven track record of thousands of successful
                        trademark registrations with the USPTO, we've transformed countless concepts into protected assets.
                        Let us be your partner in turning innovation into ownership.</p>
                </div>
                <div class="flex gap-3 items-center ">
                    <button
                        class="font-bold hover:text-white hover:bg-black  bg-teal-700 text-white rounded-full rounded py-3 px-10">Get
                        Start</button>
                    <a href="#" class="hover:text-teal-700 font-bold text-2xl ">(773) 636-2167</a>


                </div>
            </div>
            <div class="lg:w-6/12  lg:block hidden">
                <div class="flex justify-center">
                    <img src="{{ asset('assets/img/about.png') }}" alt="#" width="400">
                </div>
            </div>

        </div>
    </section>
    {{-- card background image --}}
    <section >
        <div class=" text-center bg-[url('assets/img/process-bg.png')] lg:h-100 relative bg-no-repeat bg-cover">
            <div class="container">
                <div>
                    <h3 class="font-bold text-5xl text-white pt-2 lg:pt-3">Our Simple Trademark Registration Process</h3>
                    <p class="font-bold text-white"> We help you file your trademark registration process in 3 simple steps.
                    </p>
                </div>
            </div>
    </section>
                {{-- card-section --}}
    <section class="">
        
            <div class="container ">
                <div class="grid absolute card lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 justify-items-center  sm:gap-2  text-wrap">
                    <div class="bg-[url('assets/img/bg-card.png')]  bg-no-repeat bg-cover px-8 py-8 pt-10 text-start ">
                        <img src="{{ asset('assets/img/Process-1.png') }}" alt="process-1" width="50" class="pb-2">
                        <span class="text-white text-2xl font-RussoOne ">Fill Our Simple Online
                            Questionnaire</span>
                        <p class=" pt-5 mt-4 mb-0 text-[clamp(14px,2vw,20px)] leading-relaxed">Fill up all the important
                            information in our online questionnaire to get your
                            trademark registration process started.</p>
                    </div>
                    <div class="bg-[url('assets/img/bg-card.png')]  bg-no-repeat bg-cover px-8 py-8 pt-10 text-start ">
                        <img src="{{ asset('assets/img/Process-1.png') }}" alt="process-1" width="50" class="pb-2">
                        <span class="text-white font-RussoOne text-2xl   ">Search for Available
                            Trademark</span>
                        <p class=" pt-5 mt-4 mb-0 text-[clamp(14px,2vw,20px)] leading-relaxed ">Fill up all the important
                            information in our online questionnaire to get your trademark registration process started.</p>
                    </div>


                    <div class="bg-[url('assets/img/bg-card.png')]  bg-no-repeat bg-cover px-8 py-8 pt-10 text-start ">
                        <img src="{{ asset('assets/img/Process-1.png') }}" alt="process-1" width="50" class="pb-2">
                        <span class="text-white font-bold text-2xl font-Montserrat flex ">A Detailed Trademark Report</span>
                        <p class=" pt-5 mt-4 mb-0 text-[clamp(14px,2vw,20px)] leading-relaxed ">Fill up all the important
                            information in our online questionnaire to get your trademark registration process started.</p>
                    </div>


                </div>
            </div>
    </section>
    <section class="pt-20 w-full ">
        <div class="container">
            <div class="w-full  xl:w-6/12 pt-20">
                <span class="text-3xl pt-10">Explore Our Services</span>
                <img src="{{ asset('assets/img/logo-black.png') }}" alt="" width="200px" class="pt-5">
                <p class="text-teal-700">Secure your brand and protect your intellectual assets with reliable trademark
                    registration and legal support services.</p>
                <p>Our expert legal services guide you through every step of the process, from filing to enforcement,
                    ensuring your</p>
                <div>
                    <ul>
                        <li class="flex gap-2"><img src="{{ asset('assets/img/chevron-right-black.svg') }}" alt=""
                                width="12">Official USPTO Filing</li>
                        <li class="flex gap-2"><img src="{{ asset('assets/img/chevron-right-black.svg') }}" alt=""
                                width="12">U.S. Licensed Attorneys</li>
                        <li class="flex gap-2"><img src="{{ asset('assets/img/chevron-right-black.svg') }}" alt=""
                                width="12">Experienced Specialists</li>
                        <li class="flex gap-2"><img src="{{ asset('assets/img/chevron-right-black.svg') }}" alt=""
                                width="12">Same-Day Filing Service</li>
                    </ul>
                </div>
            </div>
            <div class="w-12 xl:w-6/12"></div>
        </div>
    </section>
@endsection
