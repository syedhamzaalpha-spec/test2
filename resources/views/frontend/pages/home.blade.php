@extends('components.layouts.web.master')
@section('main-content')
    <section
        class="ralative bg-cover bg-center lg:h-[calc(100dvh-90px)]  bg-no-repeat bg-[#cbe3e1] md:bg-[url(/assets/img/hero.jpg)]">
        <div class="container ">
            <div class="row ">
                {{-- col-1 --}}
                <div class="w-full lg:w-7/12 ">
                    <h3 class=" text-black md:text-white font-RussoOne text-[clamp(20px,3vw,32px)]">Your <span class="text-teal-600 bg-white">
                            Trusted
                        </span>Trademark & <br>Legal <span class="text-teal-600 bg-white">Advisory</span> Office</h3>
                    <h5 class=" h-lh  text-black md:text-white font-RussoOne">Protecting Your Brand. Supporting Your
                        Business.
                    </h5>
                    <p class=" text-black md:text-white md:wrap-normal pt-2">Welcome to Trademark Legit, where experience
                        meets
                        precision. We provide
                        end-to-end trademark registration services and a full spectrum of legal counsel tailored for
                        businesses, entrepreneurs, and creatives.</p>
                    <h6 class=" h-lh  text-black md:text-white ">Our Attorneys Guide You Through:</h6>
                    <div>
                        <ul class="grid md:grid-cols-2  justify-start gap-2">
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
                    <div class="flex justify-start gap-5 mt-5 items-center">
                        <div>
                            <butto
                                class="bg-teal-600 hover:bg-white hover:text-teal-600  duration-400 py-3 px-10 rounded-full text-white font-bold">
                                Get Start</button>
                        </div>
                        <div>
                            <button
                                class="bg-black text-white border-2 border-black duration-500  hover:border-teal-900 py-2 px-7 rounded-full font-semibold">Live
                                Chat</button>
                        </div>
                    </div>
                </div>



                {{-- col-2 --}}
                <div class=" lg:max-w-4/12">
                    <img src="{{ asset('assets/img/hero-img.png') }}" alt=""
                        class=" absolute bottom-0 hidden lg:block lg:right-3 md:right-0 w-[42vw]  h-auto">
                </div>
            </div>
        </div>

    </section>
    <section class="relative">

        <img src="{{ asset('assets/img/about-man-ChOHwkn-.png') }}" alt=""
            class=" absolute  bg-no-repeat  bottom-0 -left-28 
            w-[42vw] -z-10 hidden xl:block">
        <div class=" container flex ">
            <div class="lg:w-8/12 w-full lg:pl-32">
                <div>
                    <h2 class="text-black font-RussoOne">Your Intellectual Property, <span class="text-teal-600">
                            <lg:br>Our Priority
                        </span></h2>

                    <p><span class="text-teal-600"> Trademark Legit </span>is your one-stop solution for all intellectual
                        property needs. Whether you're safeguarding a groundbreaking idea, a distinctive brand identity, or
                        original creative work, we've got you covered. With a proven track record of thousands of successful
                        trademark registrations with the USPTO, we've transformed countless concepts into protected assets.
                        Let us be your partner in turning innovation into ownership.</p>
                </div>
                <div class="flex gap-5 items-center flex-col sm:flex-row">
                    <button
                        class="font-bold hover:text-white hover:bg-black  bg-teal-600 text-white rounded-full py-3 px-10">Get
                        Start</button>
                    <a href="#" class="hover:text-teal-600 font-bold text-2xl flex gap-2">
                        <img src="{{ asset('assets/img/phone.png') }}" alt="phoneIcon"
                            class="invert h-auto w-8 object-contain">
                        (773) 636-2167</a>


                </div>
            </div>
            <div class="lg:w-5/12  lg:block hidden">
                <div class="flex justify-center">
                    <img src="{{ asset('assets/img/about.png') }}" alt="#" width="400">
                </div>
            </div>

        </div>
    </section>
    {{-- card background image --}}
    <section class="bg-[url('assets/img/process-bg.png')]  text-center  bg-no-repeat bg-cover pb-[13rem]">

        <div class="container">
            <div>
                <h3 class=" text-[clamp(30px,3vw,40px)] text-white pt-2 lg:pt-5 font-RussoOne">Our Simple Trademark
                    Registration Process
                </h3>
                <p class=" text-white"> We help you file your trademark registration process in 3 simple steps.
                </p>
            </div>
        </div>
    </section>

    {{-- card-section-start --}}
    <section class="-mt-[15rem]">
        <div class="container">
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-3 lg:px-[5rem]">
                <div class="bg-[url(/assets/img/card.png)] bg-no-repeat bg-cover bg-center py-10 px-5 ">
                    <div class="flex lg:flex-col space-y-8 justify-start items-center sm:items-start gap-3">
                        <img src="{{ asset('assets/img/Process-1.png') }}" alt="process-1" class="w-15">
                        <h4 class="text-[clamp(22px,3vw,16px)]  text-white">Fill Our Simple Online Questionnaire</h4>
                    </div>
                    <p class="pt-3">Fill up all the important information in our online questionnaire to get your
                        trademark registration
                        process started.</p>

                </div>
                <div class="bg-[url(/assets/img/card.png)] bg-no-repeat bg-cover bg-center py-10 px-5 ">
                    <div class="flex lg:flex-col space-y-8  gap-3 justify-start items-center sm:items-start gap-3">
                        <img src="{{ asset('assets/img/Process-1.png') }}" alt="process-1" class="w-15">
                        <h4 class="text-[clamp(22px,3vw,16px)]  text-white">Search for Available Trademark</h4>
                    </div>
                    <p class="pt-3">Our team scans trademark databases with a comprehensive trademark search to check if
                        your trademark is entirely new and original.</p>

                </div>
                <div class="bg-[url(/assets/img/card.png)] bg-no-repeat bg-cover bg-center py-10 px-5 ">
                    <div class="flex lg:flex-col space-y-8  gap-3 justify-start items-center sm:items-start gap-3">
                        <img src="{{ asset('assets/img/Process-1.png') }}" alt="process-1" class="w-15">
                        <h4 class="text-[clamp(22px,3vw,16px)] text-white">A Detailed Trademark Report</h4>
                    </div>
                    <p class="pt-3">After researching federal and international trademark databases, our team provides a
                        detailed report with all the matches and similarities with your trademark.</p>

                </div>
            </div>
        </div>
    </section>
    {{-- card-section-stop --}}


    <section>
        <div class="container mx-auto flex flex-col lg:flex-row">
            <div class=" lg:w-6/12 w-full px-2 py-5">
                <span class="text-3xl pt-10 ">Explore Our Services</span>
                <img src="{{ asset('assets/img/logo-black.png') }}" alt="" width="200px" class="pt-5">
                <p class="text-teal-600 font-bold">Secure your brand and protect your intellectual assets with reliable
                    trademark
                    registration and legal support services.</p>
                <p>Our expert legal services guide you through every step of the process, from filing to enforcement,
                    ensuring your</p>
                <div>
                    <ul class="grid md:grid-cols-2 grid-cols-1 gap-3">
                        <li class="flex gap-2 text-black font-semibold"><img
                                src="{{ asset('assets/img/chevron-right-black.svg') }}" alt=""
                                width="12">Official USPTO Filing</li>
                        <li class="flex gap-2 text-black font-semibold"><img
                                src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="" width="12">U.S.
                            Licensed Attorneys</li>
                        <li class="flex gap-2 text-black font-semibold"><img
                                src="{{ asset('assets/img/chevron-right-black.svg') }}" alt=""
                                width="12">Experienced Specialists</li>
                        <li class="flex gap-2 text-black font-semibold"><img
                                src="{{ asset('assets/img/chevron-right-black.svg') }}" alt=""
                                width="12">Same-Day Filing Service</li>
                    </ul>
                </div>
                <div class="flex flex-wrap  gap-5 items-center mt-4 ">
                    <button
                        class="font-bold hover:text-white hover:bg-black  bg-teal-600 text-white rounded-full rounded py-3 px-10">Get
                        Start</button>
                    <a href="#" class="hover:text-teal-600 font-bold text-2xl flex gap-2">
                        <img src="{{ asset('assets/img/phone.png') }}" alt="phoneIcon"
                            class="invert w-8 h-auto object-contain">
                        (773) 636-2167</a>


                </div>
            </div>



            <div class="lg:w-6/12   w-full h-auto">
                <div class="swiper mySwiper Trademark">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ">
                            <div class=" border-1 border-teal-500 rounded-md  flex flex-col items-start  py-10 px-5">
                                <h4 class="text-[clamp(14px,3vw,18px)] text-teal-600 ">Trademark Registration</h4>
                                <p class="text-[clamp(12px,3vw,14px)] pt-2"> Safeguard yo business identity with our expert
                                    Trademark Registration services. Fast, reliable and tailored for businesses of all
                                    sizes. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" border-1 border-teal-500 rounded-md  flex flex-col items-start  py-10 px-5">
                                <h4 class="text-[clamp(14px,3vw,18px)] text-teal-600 ">Trademark Registration</h4>
                                <p class="text-[clamp(12px,3vw,14px)] pt-2"> Safeguard yo business identity with our expert
                                    Trademark Registration services. Fast, reliable and tailored for businesses of all
                                    sizes. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" border-1 border-teal-500 rounded-md  flex flex-col items-start py-10 px-5">
                                <h4 class="text-[clamp(14px,3vw,18px)] text-teal-600 ">Trademark Registration</h4>
                                <p class="text-[clamp(12px,3vw,14px)] pt-2"> Safeguard yo business identity with our expert
                                    Trademark Registration services. Fast, reliable and tailored for businesses of all
                                    sizes. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" border-1 border-teal-500 rounded-md  flex flex-col items-start  py-10 px-5">
                                <h4 class="text-[clamp(14px,3vw,18px)] text-teal-600 ">Trademark Registration</h4>
                                <p class="text-[clamp(12px,3vw,14px)] pt-2"> Safeguard yo business identity with our expert
                                    Trademark Registration services. Fast, reliable and tailored for businesses of all
                                    sizes. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" border-1 border-teal-500 rounded-md  flex flex-col items-start  py-10 px-5">
                                <h4 class="text-[clamp(14px,3vw,18px)] text-teal-600 ">Trademark Registration</h4>
                                <p class="text-[clamp(12px,3vw,14px)] pt-2"> Safeguard yo business identity with our expert
                                    Trademark Registration services. Fast, reliable and tailored for businesses of all
                                    sizes. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" border-1 border-teal-500 rounded-md  flex flex-col items-start  py-10 px-5">
                                <h4 class="text-[clamp(14px,3vw,18px)] text-teal-600 ">Trademark Registration</h4>
                                <p class="text-[clamp(12px,3vw,14px)] pt-2"> Safeguard yo business identity with our expert
                                    Trademark Registration services. Fast, reliable and tailored for businesses of all
                                    sizes. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" border-1 border-teal-500 rounded-md  flex flex-col items-start  py-10 px-5">
                                <h4 class="text-[clamp(14px,3vw,18px)] text-teal-600 ">Trademark Registration</h4>
                                <p class="text-[clamp(12px,3vw,14px)] pt-2"> Safeguard yo business identity with our expert
                                    Trademark Registration services. Fast, reliable and tailored for businesses of all
                                    sizes. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" border-1 border-teal-500 rounded-md  flex flex-col items-start  py-10 px-5">
                                <h4 class="text-[clamp(14px,3vw,18px)] text-teal-600 ">Trademark Registration</h4>
                                <p class="text-[clamp(12px,3vw,14px)] pt-2"> Safeguard yo business identity with our expert
                                    Trademark Registration services. Fast, reliable and tailored for businesses of all
                                    sizes. </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- about-slider-end-->
        </div>
    </section>

    <section class="bg-[url('assets/img/cta.png')] bg-no-repeat bg-cover bg-center">
        <div class="container flex md:flex-col lg:flex-row">
            {{-- left-side --}}
            <div class="w-full lg:w-6/12">
                <div class="flex  items-center gap-3">
                    <span class="font-RussoOne text-7xl sm:text-8xl text-white">$38</span>
                    <span class="font-RussoOne text-3xl text-white">To Own Your <br> Brand's Future.</span>
                </div>
                <p class="text-white ">Complete Your <span class="font-bold">Trademark Registration </span> in Just 3
                    Simple Steps.</p>
                <button
                    class="py-3 px-5 bg-black rounded-full text-white font-bold hover:bg-white hover:text-teal-600 transition duration-300">Secure
                    Your Rights Today</button>
            </div>

            {{-- Right-side --}}
            <div class="lg:w-6/12 md:w-full md:block hidden ">
                <img src="{{ asset('assets/img/Cta-img.png') }}" alt="">
            </div>


        </div>
    </section>




    <!-- price-section -->
    <section class="bg-[#cbe3e1] text-center">
        <div class="container">
            <div>
                <h2 class="text-black "> Choose A Suitable Plan</h2>
                <p class=" text-[clamp(16px,2vw,22px)] ">Choose from our tailored plans to fit your needs. From basic to
                    premium, find the option that works for you and let us handle the rest!</p>
            </div>
        </div>

        <!-- cards  -->
        <div
            class="mx-3 space-y-3 lg:mx-10 grid lg:grid-cols-4 md:grid-cols-2  grid-cols-1  gap-3 [&_img]:invert-0 [&_img]:group-hover:invert">


            <div
                class="group  relative  bg-white rounded-xl border-1 border-teal-600  justify-start hover:bg-teal-600 transition    duration-300  group-hover:bg-teal-600 h-fit">
                <div class="px-5  pt-10">
                    <span
                        class="group-hover:border-0 group-hover:text-black  text-teal-600 font-RussoOne border-1  px-4 rounded-md absolute top-[-13] left-[15] bg-white  border-teal-700">Basic</span>
                    <div class="flex justify-start items-center">


                        <span class="font-RussoOne text-8xl text-teal-600 group-hover:text-white ">$38</span>
                        <span class="group-hover:text-white">+Govt. <br> Fee</span>
                    </div>
                    <div class="text-left  pb-5 py-3   border-b-1  group-hover:border-white border-teal-700 ">
                        <p class="group-hover:text-white">Get Your Trademark Registration Serial Number in<span
                                class="text-black font-bold"> (Competitors takes 2-4 weeks)</span> </p>
                    </div>
                    <div>
                        <ul class="text-start ">
                            <li class="text-[15px] font-semibold text-black py-2 flex gap-3  group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Full Case Review & Filing by IP professionals</li>
                            <li class="text-[15px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Trademark Alerts for potential conflicts</li>
                            <li class="text-[15px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">100% Satisfaction Guarantee</li>
                            <li class="text-[15px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Affordable Pricing for startups</li>
                            <li class="text-[15px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px group-hover:text-white">Expert Support via email/chat (Competitors charge
                                extra)</li>

                            <li class="text-[15px] font-semibold text-black py-2 flex gap-3  group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px ">Transparent Pricing – No hidden fees</li>
                        </ul>
                        <button
                            class="bg-teal-600 font-semibold rounded-full py-3 px-6 mt-10 text-xl text-white group-hover:bg-black  ">Get
                            Stared</button>
                    </div>
                </div>

                <div
                    class="w-auto group-hover:bg-white group-hover:text-black bg-teal-600 flex py-4 mt-8  rounded-b-xl gap-3 px-3">
                    <img src="{{ asset('assets/img/phone.svg') }}" alt="phone-svg" width="60px">
                    <div>
                        <p
                            class="text-black  group-hover:text-teal-600 font-RussoOne flex text-start justify-start text-[16px] mb-0">
                            Schedule A Consultation Today.</p>
                        <span
                            class="font-RussoOne text-xl flex text-start justify-start text-white group-hover:text-black">(773)
                            636-2167</span>
                    </div>
                </div>
            </div>

            {{-- second card --}}

            <div
                class="group  relative  bg-white rounded-xl border-1 border-teal-600  justify-start hover:bg-teal-600 transition    duration-300  group-hover:bg-teal-600 h-fit">
                <div class="px-5  pt-10">
                    <span
                        class="group-hover:border-0 group-hover:text-black  text-teal-600 font-RussoOne border-1  px-4 rounded-md absolute top-[-13] left-[15] bg-white  border-teal-700">Deluxe</span>
                    <div class="flex justify-start items-center">


                        <span class="font-RussoOne text-8xl text-teal-600 group-hover:text-white ">$149</span>
                        <span class="group-hover:text-white">+Govt. <br> Fee</span>
                    </div>
                    <div class="text-left  pb-10 py-3 border-b-1  group-hover:border-white border-teal-700 ">
                        <p class="group-hover:text-white">Get Your Trademark Registration Serial Number in <span
                                class="text-black font-bold"> Just 3-5 Days!</span> </p>
                    </div>
                    <div>
                        <ul class=" text-start p-3 ">
                            <li class="text-[15px] font-semibold text-black py-2 flex gap-3  group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Everything in Basic, plus</li>
                            <li class="text-[15px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Trademark Monitoring (Competitors charge $200+/year)</li>
                            <li class="text-[15px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Full Trademark Documentation</li>
                            <li class="text-[15px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Free 30-minute consultation with an attorney</li>
                            <li class="text-[15px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px group-hover:text-white">Exclusive Client Portal for easy management</li>
                            <li class="text-[15px] font-semibold text-black py-2 flex gap-3  group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px ">Priority Support for faster response times</li>
                        </ul>
                        <button
                            class="bg-teal-600 font-semibold rounded-full py-3 px-6 mt-10 text-xl text-white group-hover:bg-black ">Get
                            Stared</button>
                    </div>
                </div>

                <div
                    class=" group-hover:bg-white group-hover:text-black bg-teal-600 flex py-4 mt-8  rounded-b-xl gap-3 px-3">
                    <img src="{{ asset('assets/img/phone.svg') }}" alt="phone-svg" width="60px">
                    <div>
                        <p
                            class="text-black  group-hover:text-teal-600 font-RussoOne flex text-start justify-start text-[16px] mb-0">
                            Schedule A Consultation Today.</p>
                        <span
                            class="font-RussoOne text-xl flex text-start justify-start text-white group-hover:text-black">(773)
                            636-2167</span>
                    </div>
                </div>
            </div>

            <div
                class="group  relative   bg-white rounded-xl border-1 border-teal-600  justify-start hover:bg-teal-600 transition    duration-300  group-hover:bg-teal-600 h-fit">
                <div class="px-5 pt-8">
                    <span
                        class="group-hover:border-0 group-hover:text-black  text-teal-600 font-RussoOne border-1  px-4 rounded-md absolute top-[-13] left-[15] bg-white  border-teal-700">Premium</span>
                    <div class="flex justify-start items-center">


                        <span class="font-RussoOne text-8xl text-teal-600 group-hover:text-white ">$249</span>
                        <span class="group-hover:text-white">+Govt. <br> Fee</span>
                    </div>
                    <div class="text-left  pb-5 py-3  border-b-1  group-hover:border-white border-teal-700 ">
                        <p class="group-hover:text-white">Get Your Trademark Serial Number on the <span
                                class="text-black font-bold"> Same Day!</span> (Competitors takes up to 2 weeks)</p>
                    </div>
                    <div>
                        <ul class=" text-start p-3">
                            <li
                                class="text-[14px] font-semibold text-black py-2 flex gap-3 justify-center items-center group-hover:text-white">
                                <img src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Full Case Review & Filing by IP professionals
                            </li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Everything in Deluxe, plus:</li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Dedicated Case Manager for personalized service</li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">100% Approval Guarantee – No extra fees for resubmissions</li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px group-hover:text-white">Global Trademark Search (Competitors charge $500+)
                            </li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3  group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px ">Lifetime Trademark Monitoring</li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3  group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px ">Expedited Legal Support – Priority access to attorneys</li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3  group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px ">60-min IP Strategy Consultation to protect your brand long-term</li>
                        </ul>
                        <button
                            class="bg-teal-600 font-semibold rounded-full py-3 px-6 text-xl text-white group-hover:bg-black ">Get
                            Stared</button>
                    </div>
                </div>

                <div
                    class=" group-hover:bg-white group-hover:text-black bg-teal-600 flex py-4 mt-7   rounded-b-xl gap-3 px-3">
                    <img src="{{ asset('assets/img/phone.svg') }}" alt="phone-svg" width="60px">
                    <div>
                        <p
                            class="text-black  group-hover:text-teal-600 font-RussoOne flex text-start justify-start text-[16px] mb-0">
                            Schedule A Consultation Today.</p>
                        <span
                            class="font-RussoOne text-xl flex text-start justify-start text-white group-hover:text-black">(773)
                            636-2167</span>
                    </div>
                </div>
            </div>

            <div
                class="group  relative  bg-white rounded-xl border-1 border-teal-600  justify-start hover:bg-teal-600 transition    duration-300  group-hover:bg-teal-600 h-fit">
                <div class="px-5 pt-8">
                    <span
                        class="group-hover:border-0 group-hover:text-black  text-teal-600 font-RussoOne text-[14px] border-1  px-4 rounded-md absolute top-[-13] left-[22] bg-white  border-teal-700">Elite
                        (Global Trademark Filing)</span>
                    <div class="flex justify-start items-center pt-2">


                        <span class=" text-4xl pt-6 font-bold text-teal-600 group-hover:text-white">Get A Quote</span>

                    </div>
                    <div class="text-left  pb-6 py-3  border-b-1  group-hover:border-white border-teal-700 ">
                        <p class="group-hover:text-white pt-4">Get priority attention for International Trademark filing with
                            <span class="text-black font-bold"> the fastest possible processing time.
                        </p>
                    </div>
                    <div>
                        <ul class=" text-start p-3 ">
                            <li
                                class="text-[14px] font-semibold text-black py-2 flex gap-3 justify-center items-center group-hover:text-white">
                                <img src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Comprehensive Global trademark search across target countries
                            </li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Proper goods and services classification under the Nice Classification
                                System</li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Application draft preparation and filing in targeted international
                                jurisdictions</li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px">Country-specific filing strategy and compliance review before submission
                            </li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3 group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px group-hover:text-white">Official government fee calculation and cost
                                breakdown</li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3  group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px ">Handling of office actions and provisional refusals</li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3  group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px ">Progress tracking and document management</li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3  group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px ">International registration certificate coordinationPriority Application
                                Processing</li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3  group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px ">Renewal Management (10-Year Renewal Processing)</li>
                            <li class="text-[14px] font-semibold text-black py-2 flex gap-3  group-hover:text-white"><img
                                    src="{{ asset('assets/img/chevron-right-black.svg') }}" alt="chevron"
                                    width="10px ">Application Success Guaranteed</li>

                        </ul>
                        <button
                            class="bg-teal-600 font-semibold rounded-full py-3 px-6 text-xl text-white group-hover:bg-black ">Get
                            Stared</button>
                    </div>
                </div>

                <div
                    class=" group-hover:bg-white group-hover:text-black bg-teal-600 flex py-4 mt-3   rounded-b-xl gap-3 px-3">
                    <img src="{{ asset('assets/img/phone.svg') }}" alt="phone-svg" width="60px">
                    <div>
                        <p
                            class="text-black  group-hover:text-teal-600 font-RussoOne flex text-start justify-start text-[16px] mb-0">
                            Schedule A Consultation Today.</p>
                        <span
                            class="font-RussoOne text-xl flex text-start justify-start text-white group-hover:text-black">(773)
                            636-2167</span>
                    </div>
                </div>
            </div>


        </div>
    </section>

    {{-- amazon-brand section --}}
    <section class="container">
        <div class="row">
            <div class=" lg:w-7/12 w-full">
                <div class="leading-tight">
                    <h2 class="text-[clamp(24px,3vw,36px)] font-RussoOne leading-tight">Amazon <span
                            class="text-teal-600">Brand</span><span class="text-teal-600 pr-2"><br>Registry</span>Service
                        In Just <span class=" text-teal-600 text-6xl">$399</span></h2>

                </div>
                <div>
                    <p class="text-black"> Protect your brand and enhance your presence on Amazon with the Amazon Brand
                        Registry. Gain access to powerful tools that help you manage and protect your brand, ensuring
                        accurate representation and increasing customer trust. Join now to unlock advanced features designed
                        to help you grow your business and stand out in the marketplace.</p>
                </div>
                <div class="flex gap-6 items-start sm:items-center flex-col lg:flex-row">
                    <div>
                        <button
                            class="bg-teal-600 rounded-full px-8 py-3 text-white font-bold text-xl hover:bg-black transition duration-400  ">Get
                            Started</button>
                    </div>
                    <div>
                        <a href="#"class="text-black font-bold text-[24px] hover:text-teal-600 transition duration-300 flex gap-2"> <img src="{{ asset('assets/img/phone.png') }}" alt="phone-img" class="invert w-6 h-auto object-contain">(773)
                            636-2167</a>
                    </div>
                </div>
            </div>
            {{-- second container div --}}
            <div class=" lg:w-5/12 w-full hidden lg:block">
                <img src="{{ asset('assets/img/Amazon-brand-img.png') }}" alt="amazon-img">
            </div>

        </div>
    </section>

    <section class="bg-[url(/assets/img/cta-2.png)] bg-cover bg-no-repeat bg-center">
        <div class="container">

            <div class="flex flex-col lg:flex-row  lg:justify-between justify-center">
                <div>
                    <h3 class="text-white [clamp(16px,3vw,18px)]">Disputes Are Inevitable <br class="md:block"> <span
                                class="text-black">Protect Your Brand Before They Strike.</span></h3>
                    <p class="text-white">Complete Your <span class="font-bold">Trademark Registration </span> in Just 3
                        Straightforward Steps.</p>
                </div>
                <div class="btn flex flex-col justify-center items-center">
                    <button
                        class=" btn bg-black py-3 px-7 text-white font-bold rounded-full hover:bg-white hover:text-teal-600 transition duration-300 [clamp(14px,3vw,18px)]">Secure
                        Your Rights In Just $38</button>
                    <div class="flex justify-center items-center mt-3"> <a href="#"
                            class=" font-bold text-[24px] text-white hover:text-black transition duration-300 flex gap-3">
                            <img src="{{ asset('assets/img/phone.png') }}" alt="phone" 
                                class="object-contain w-7  ">(773) 636-2167</a></div>

                </div>
            </div>
        </div>
    </section>
    {{-- client experience section --}}
    <section>
        <div class="container">
            <div>
                <div class="text-center">
                    <h2 class="text-[clamp(26px,3vw,26px)] ">Client Experiences That Speak for Themselves</h2>
                    <p class="text-black [clamp(18px,3vw,20px)]">Our simplified process increases the success rate of
                        trademark applications — trusted by over <span class="text-teal-600 text-xl font-semibold"> 8,000
                            SatisfiedBusiness Owners</span> who've shared their positive experiences.</p>
                </div>

                {{-- slider div started here --}}

                <div class="swiper testimonialSwiper">
                    <div class="swiper-wrapper h-fit!">
                        <div class="swiper-slide h-fit!">

                            <div class="testimonial-card  p-5 text-center px-3  py-5">
                                <img src="{{ asset('assets/img/quote.png') }}" alt="double-quote" width="50px"
                                    class="mx-auto">
                                <p class="py-3">Trademark Legit keeps me informed every step of the way—from
                                    filing receipt and publication to final registration. Despite my trademark taking 10
                                    months, I always knew where things stood.</p>

                                <div class="mt-4">
                                    <span class="block  font-bold">Kieran C.</span>
                                    <span class=" ">CEO at Collins Digital Solutions</span>
                                </div>
                            </div>



                        </div>
                        <div class="swiper-slide h-fit!">

                            <div class="testimonial-card  p-5 text-center px-3  py-5">
                                <img src="{{ asset('assets/img/quote.png') }}" alt="double-quote" width="50px"
                                    class="mx-auto">
                                <p class="py-3">Trademark Legit keeps me informed every step of the way—from
                                    filing receipt and publication to final registration. Despite my trademark taking 10
                                    months, I always knew where things stood.</p>

                                <div class="mt-4">
                                    <span class="block  font-bold">Kieran C.</span>
                                    <span class=" ">CEO at Collins Digital Solutions</span>
                                </div>
                            </div>



                        </div>
                        <div class="swiper-slide h-fit!">

                            <div class="testimonial-card   text-center px-3  py-8">
                                <img src="{{ asset('assets/img/quote.png') }}" alt="double-quote" width="50px"
                                    class="mx-auto">
                                <p class="py-3">Trademark Legit keeps me informed every step of the way—from
                                    filing receipt and publication to final registration. Despite my trademark taking 10
                                    months, I always knew where things stood.</p>

                                <div class="mt-4">
                                    <span class="block  font-bold">Kieran C.</span>
                                    <span class=" ">CEO at Collins Digital Solutions</span>
                                </div>
                            </div>



                        </div>
                        <div class="swiper-slide h-fit!">

                            <div class="testimonial-card  p-5 text-center px-3  py-8">
                                <img src="{{ asset('assets/img/quote.png') }}" alt="double-quote" width="50px"
                                    class="mx-auto">
                                <p class="py-3">Trademark Legit keeps me informed every step of the way—from
                                    filing receipt and publication to final registration. Despite my trademark taking 10
                                    months, I always knew where things stood.</p>

                                <div class="mt-4">
                                    <span class="block  font-bold">Kieran C.</span>
                                    <span class="">CEO at Collins Digital Solutions</span>
                                </div>
                            </div>



                        </div>
                        <div class="swiper-slide h-fit!">

                            <div class="testimonial-card  p-5 text-center px-3  py-8">
                                <img src="{{ asset('assets/img/quote.png') }}" alt="double-quote" width="50px"
                                    class="mx-auto">
                                <p class="py-3">Trademark Legit keeps me informed every step of the way—from
                                    filing receipt and publication to final registration. Despite my trademark taking 10
                                    months, I always knew where things stood.</p>

                                <div class="mt-4">
                                    <span class="block  font-bold">Kieran C.</span>
                                    <span class="">CEO at Collins Digital Solutions</span>
                                </div>
                            </div>



                        </div>
                        <div class="swiper-slide h-fit!">

                            <div class="testimonial-card  p-5 text-center px-3  py-8">
                                <img src="{{ asset('assets/img/quote.png') }}" alt="double-quote" width="50px"
                                    class="mx-auto">
                                <p class="py-3">Trademark Legit keeps me informed every step of the way—from
                                    filing receipt and publication to final registration. Despite my trademark taking 10
                                    months, I always knew where things stood.</p>

                                <div class="mt-4">
                                    <span class="block  font-bold">Kieran C.</span>
                                    <span class="">CEO at Collins Digital Solutions</span>
                                </div>
                            </div>



                        </div>
                        <div class="swiper-slide h-fit!">

                            <div class="testimonial-card  p-5 text-center px-3  py-8">
                                <img src="{{ asset('assets/img/quote.png') }}" alt="double-quote" width="50px"
                                    class="mx-auto">
                                <p class="py-3">Trademark Legit keeps me informed every step of the way—from
                                    filing receipt and publication to final registration. Despite my trademark taking 10
                                    months, I always knew where things stood.</p>

                                <div class="mt-4">
                                    <span class="block  font-bold">Kieran C.</span>
                                    <span class="">CEO at Collins Digital Solutions</span>
                                </div>
                            </div>


                        </div>
                        <div class="swiper-slide h-fit!">

                            <div class="testimonial-card  p-5 text-center px-3  py-8">
                                <img src="{{ asset('assets/img/quote.png') }}" alt="double-quote" width="50px"
                                    class="mx-auto">
                                <p class="">Trademark Legit keeps me informed every step of the way—from
                                    filing receipt and publication to final registration. Despite my trademark taking 10
                                    months, I always knew where things stood.</p>

                                <div class="mt-4">
                                    <span class="block  font-bold">Kieran C.</span>
                                    <span class="">CEO at Collins Digital Solutions</span>
                                </div>
                            </div>



                        </div>
                        <div class="swiper-slide h-fit!">

                            <div class="testimonial-card  p-5 text-center px-3  py-8">
                                <img src="{{ asset('assets/img/quote.png') }}" alt="double-quote" width="50px"
                                    class="mx-auto">
                                <p class="">Trademark Legit keeps me informed every step of the way—from
                                    filing receipt and publication to final registration. Despite my trademark taking 10
                                    months, I always knew where things stood.</p>

                                <div class="mt-4">
                                    <span class="block  font-bold">Kieran C.</span>
                                    <span class="">CEO at Collins Digital Solutions</span>
                                </div>
                            </div>



                        </div>
                    </div>
                    {{-- <div class="swiper-pagination"></div> --}}
                </div>
                {{-- slider div started here --}}
            </div>

        </div>
    </section>


    <section class="bg-[#cbe3e1]  ">
        <div class="container flex flex-col lg:flex-row ">
            {{-- left-side-form --}}
            <div class="w-full lg:w-6/12">
                <h4 class="font-RussoOne text-4xl">FAQs</h4>
                <div id="accordionExample">

                    <div class=" rounded-lg   bg-transparent ">
                        <p class="mb-0" id="headingOne">
                            <button
                                class=" group relative flex w-full items-center rounded-lg border-1 border-teal-500 focus:bg-teal-600 bg-white  px-7 py-3  text-left text-black focus:text-white  transition [overflow-anchor:none] hover:z-[2] focus:z-[3] "
                                type="button" data-twe-collapse-init data-twe-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                What is a Comprehensive Trademark Search?
                                <span class="absolute right-5">

                                    <img src="{{ asset('assets/img/link.svg') }}" alt="linkImg" width="25px"
                                        class=" group-focus:invert-100  group-focus:brightness-0">
                                </span>
                            </button>
                        </p>
                        <div id="collapseOne" class="!visible" data-twe-collapse-item data-twe-collapse-show
                            aria-labelledby="headingOne" data-twe-parent="#accordionExample">
                            <div class="px-5 py-4">

                                A comprehensive trademark search checks existing trademarks across federal, state, and
                                common law databases to identify potential conflicts before filing your application.

                            </div>
                        </div>
                    </div>
                    <div class="my-2 rounded-lg bg-transparent ">
                        <p class="mb-0" id="headingtwo">
                            <button
                                class=" group relative flex w-full items-center rounded-lg border-1 border-teal-600 focus:bg-teal-600 bg-white  px-7 py-3  text-left text-black focus:text-white  transition [overflow-anchor:none] hover:z-[2] focus:z-[3] "
                                type="button" data-twe-collapse-init data-twe-collapse-collapsed
                                data-twe-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Why should I conduct a comprehensive search before filing?

                                <span class="absolute right-5">

                                    <img src="{{ asset('assets/img/link.svg') }}" alt="linkImg" width="25px"
                                        class=" group-focus:invert-100  group-focus:brightness-0">
                                </span>
                            </button>
                        </p>
                        <div id="collapseTwo" class="!visible hidden" data-twe-collapse-item aria-labelledby="headingtwo"
                            data-twe-parent="#accordionExample">
                            <div class="px-5 py-4">
                                It helps you avoid costly legal disputes and rejection by ensuring your desired trademark
                                isn't already in use or too similar to existing marks.
                            </div>
                        </div>
                    </div>
                    <div class=" my-2 rounded-lg bg-transparent ">
                        <p class="mb-0" id="headingThree">
                            <button
                                class=" group relative flex w-full items-center rounded-lg border-1 border-teal-600 focus:bg-teal-600 bg-white  px-7 py-3  text-left text-black focus:text-white  transition [overflow-anchor:none] hover:z-[2] focus:z-[3] "
                                type="button" data-twe-collapse-init data-twe-collapse-collapsed
                                data-twe-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What databases are included in the search?

                                <span class="absolute right-5">

                                    <img src="{{ asset('assets/img/link.svg') }}" alt="linkImg" width="25px"
                                        class=" group-focus:invert-100  group-focus:brightness-0">
                                </span>
                            </button>
                        </p>
                        <div id="collapseThree" class="!visible hidden" data-twe-collapse-item
                            aria-labelledby="headingThree" data-twe-parent="#accordionExample">
                            <div class="px-5 py-4">
                                Our search covers USPTO records, state trademark databases, common law sources, business
                                directories, and domain name registries.
                            </div>
                        </div>
                    </div>
                    <div class="my-2 rounded-lg bg-transparent ">
                        <p class="accordion-header mb-0" id="headingFour">
                            <button
                                class=" group relative flex w-full items-center rounded-lg border-1 border-teal-600 focus:bg-teal-600 bg-white  px-7 py-3  text-left text-black focus:text-white  transition [overflow-anchor:none] hover:z-[2] focus:z-[3] "
                                type="button" data-twe-collapse-init data-twe-collapse-collapsed
                                data-twe-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Is a comprehensive search necessary if I already searched the USPTO database?
                                <span class="absolute right-5">

                                    <img src="{{ asset('assets/img/link.svg') }}" alt="linkImg" width="25px"
                                        class=" group-focus:invert-100  group-focus:brightness-0">
                                </span>
                            </button>
                        </p>
                        <div id="collapseFour" class="!visible hidden" data-twe-collapse-item
                            aria-labelledby="headingFour" data-twe-parent="#accordionExample">
                            <div class="px-5 py-4">
                                Yes, because the USPTO database doesn't cover unregistered trademarks or common law usage,
                                which can still pose legal risks.
                            </div>
                        </div>
                    </div>
                    <div class="my-2 rounded-lg bg-transparent ">
                        <p class="accordion-header mb-0" id="headingFive">
                            <button
                                class=" group relative flex w-full items-center rounded-lg border-1 border-teal-600 focus:bg-teal-600 bg-white  px-7 py-3  text-left text-black focus:text-white  transition [overflow-anchor:none] hover:z-[2] focus:z-[3] "
                                type="button" data-twe-collapse-init data-twe-collapse-collapsed
                                data-twe-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How long does the trademark search take?
                                <span class="absolute right-5">

                                    <img src="{{ asset('assets/img/link.svg') }}" alt="linkImg" width="25px"
                                        class="group-focus:brightness-0 group-focus:invert-100">
                                </span>
                            </button>
                        </p>
                        <div id="collapseFive" class="!visible hidden" data-twe-collapse-item
                            aria-labelledby="headingFive" data-twe-parent="#accordionExample">
                            <div class="px-5 py-4">
                                Typically, we deliver a detailed trademark search report within 2–3 business days.
                            </div>
                        </div>
                    </div>
                    <div class="my-2 rounded-lg bg-transparent   ">
                        <p class="accordion-header mb-0" id="headingSix">
                            <button
                                class=" group relative flex w-full items-center rounded-lg border-1 border-teal-600 focus:bg-teal-600 bg-white  px-7 py-3  text-left text-black focus:text-white  transition [overflow-anchor:none] hover:z-[2] focus:z-[3] "
                                type="button" data-twe-collapse-init data-twe-collapse-collapsed
                                data-twe-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Will you provide a legal opinion with the search results?
                                <span class="absolute right-5">

                                    <img src="{{ asset('assets/img/link.svg') }}" alt="linkImg" width="25px"
                                        class=" group-focus:invert-100  group-focus:brightness-0">
                                </span>
                            </button>
                        </p>
                        <div id="collapseSix" class="!visible hidden" data-twe-collapse-item aria-labelledby="headingSix"
                            data-twe-parent="#accordionExample">
                            <div class="px-5 py-4">
                                While we are not a law firm, we provide expert analysis and risk assessment based on the
                                search findings to help you make an informed decision.
                            </div>
                        </div>
                    </div>
                    <div class="my-2 rounded-lg bg-transparent   ">
                        <p class="accordion-header mb-0" id="headingSeven">
                            <button
                                class=" group relative flex w-full items-center rounded-lg border-1 border-teal-600 focus:bg-teal-600 bg-white  px-7 py-3  text-left text-black focus:text-white  transition [overflow-anchor:none] hover:z-[2] focus:z-[3] "
                                type="button" data-twe-collapse-init data-twe-collapse-collapsed
                                data-twe-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Will you provide a legal opinion with the search results?
                                <span class="absolute right-5">

                                    <img src="{{ asset('assets/img/link.svg') }}" alt="linkImg" width="25px"
                                        class=" group-focus:invert-100  group-focus:brightness-0">
                                </span>
                            </button>
                        </p>
                        <div id="collapseSeven" class="!visible hidden" data-twe-collapse-item
                            aria-labelledby="headingSeven" data-twe-parent="#accordionExample">
                            <div class="px-5 py-4">
                                While we are not a law firm, we provide expert analysis and risk assessment based on the
                                search findings to help you make an informed decision.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- right-side-img --}}
            <div class="w-full lg:w-6/12 lg:block hidden ">
                <img src="{{ asset('assets/img/faq.png') }}" alt="faqs-img "
                    class=" w-[27vw] absolute bottom-0 right-22 ">
            </div>
        </div>
    </section>

    {{-- form-section --}}
    <section class="bg-[url('assets/img/form-bg.png')] bg-no-repeat bg-cover bg-center">

        <div class="container flex">
            {{-- left-side-form-section --}}
            <div class="w-full xl:w-7/12">
                <div>
                    <h2 class="text-white">Get Expert Help Today!</h2>
                    <p class="text-white">Reach out to our skilled attorneys for personalized guidance and complete support
                        for your trademark needs. Let us handle the details while you focus on scaling your business.</p>
                </div>
                <div>
                    <form>
                        <input type="text" placeholder="Enter Your Full Name" name="UserName"
                            class="w-full outline-0 border   py-3 px-3 rounded-lg bg-white" required>
                        <input type="email" placeholder="Enter Your Email Address" name="email"
                            class="w-full outline-0 border   py-3 px-3 rounded-lg bg-white  my-3" required>
                        <input type="tel" placeholder="Enter Your Phone Number" name="phone"
                            class="phone w-full! outline-0 border   py-3 px-3 rounded-lg bg-white  mt-3"required>


                        <select class="w-full outline-0 border   py-3 px-3 rounded-lg bg-white required mt-3"">
                            <option value="Trademark Or legal Inquiry">Trademark Or legal Inquiry</option>
                            <option value="Trademark Monitoring">Trademark Monitoring</option>
                            <option value="Ownership Transfer">Ownership Transfer</option>
                            <option value="IPO Representation">IPO Representation</option>
                            <option value="Comprehensive Trademark Search">Comprehensive Trademark Search</option>
                        </select>
                        <button
                            class="bg-black py-3 px-3 w-full rounded-lg text-white  mt-3 font-semibold text-2xl ">SUBMIT</button>
                    </form>

                </div>
            </div>
            {{-- right-side-form-section --}}
            <div class="w-full xl:w-6/12 lg:block hidden ">

                <img src="{{ asset('assets/img/contact.png') }}" alt="contact-sec-img"
                    class="   bottom-0 absolute right-18 w-[30vw]">

            </div>
        </div>
    </section>
@endsection
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
