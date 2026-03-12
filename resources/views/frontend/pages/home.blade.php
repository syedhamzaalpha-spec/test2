@extends('components.layouts.web.master')
@section('main-content')
    <section
        class="ralative bg-cover bg-center lg:h-[calc(100dvh-80px)]  bg-no-repeat bg-[#cbe3e1] md:bg-[url(/assets/img/hero.jpg)]">
        <div class="container ">
            <div class="row ">
                {{-- col-1 --}}
                <div class="w-full lg:w-7/12 ">
                    <h3 class=" text-black md:text-white font-RussoOne">Your <span class="text-teal-600 bg-white">
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
                <div class=" lg:max-w-5/12">
                    <img src="{{ asset('assets/img/hero-img.png') }}" alt=""
                        class=" absolute bottom-0 hidden lg:block lg:right-3 md:right-0 w-[clamp(480px,35vw,550px)]  h-auto">
                </div>
            </div>
        </div>

    </section>
    <section
        class="mx-auto lg:bg-[url('../../public/assets/img/about-man-ChOHwkn-.png')]  bg-no-repeat relative bg-contain  ">

        <div class=" container flex">
            <div class="lg:w-7/12 w-full">
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
                <div class="flex gap-3 items-center ">
                    <button
                        class="font-bold hover:text-white hover:bg-black  bg-teal-600 text-white rounded-full py-3 px-10">Get
                        Start</button>
                    <a href="#" class="hover:text-teal-600 font-bold text-2xl ">(773) 636-2167</a>


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
    <section class="bg-[url('assets/img/process-bg.png')]  text-center  bg-no-repeat bg-cover ">

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
    <!-- card-section -->
    <!-- <section class="h-100">
                                                        <div class="container">
                                                            <div class="card-section w-full grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 absolute m-auto">
                                                                <div class=" bg-[url(assets/img/card.png)] bg-no-repeat bg-center bg-cover  pt-10 py-10 px-5 box-border">
                                                                    <img src="{{ asset('assets/img/Process-1.png') }}" alt="card-icon" width="40px">
                                                                    <h5 class="pt-3">Fill Our Simple Online Questionnaire</h5>
                                                                    <p class="py-5 ">Fill up all the important information in our online questionnaire to get your trademark registration process started.</p>
                                                                </div>
                                                                   <div class=" bg-[url(assets/img/card.png)] bg-no-repeat bg-cover  pt-10 py-10 px-5 box-border">
                                                                    <img src="{{ asset('assets/img/Process-1.png') }}" alt="card-icon" width="40px">
                                                                    <h5 class="pt-3">Fill Our Simple Online Questionnaire</h5>
                                                                    <p class="py-5 ">Fill up all the important information in our online questionnaire to get your trademark registration process started.</p>
                                                                </div>
                                                                   <div class=" bg-[url(assets/img/card.png)] bg-no-repeat bg-cover  pt-10 py-10 px-5 box-border">
                                                                    <img src="{{ asset('assets/img/Process-1.png') }}" alt="card-icon" width="40px">
                                                                    <h5 class="pt-3">Fill Our Simple Online Questionnaire</h5>
                                                                    <p class="py-5 ">Fill up all the important information in our online questionnaire to get your trademark registration process started.</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                     </section> -->

    <!-- <section class="">
                                                        
                                                            <div class="container absolute  top-0">
                                                                <div class="grid  card lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 justify-items-center  sm:gap-2  text-wrap">
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
                                                                        <p class=" pt-5 mt-4  mb-0 text-[clamp(14px,2vw,20px)] leading-relaxed ">Fill up all the important
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
                                                    </section> -->
    <section>
        <div class="container flex ">
            <div class="w-full lg:w-6/12 px-2">
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
                                src="{{ asset('assets/img/chevron-right-black.svg') }}" alt=""
                                width="12">U.S. Licensed Attorneys</li>
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
                    <a href="#" class="hover:text-teal-600 font-bold text-2xl flex gap-2">(773) 636-2167</a>


                </div>
            </div>

            {{-- twin-slide  --}}

            <div class="  lg:w-6/12 ">



                {{-- slider-copy --}}
                <div class="swiper  OurServices ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ">
                            <div class="border border-teal-500 py-10  px-2 rounded-lg">
                                <h5 class="text-[clamp(14px,3vw,18px)] text-teal-600">1) Amazon Brand Registry</h5>
                                <p class="text-[clamp(14px,3vw,17px)] pt-3"> Protect and grow your products on Amazon
                                    with
                                    Brand
                                    Registry,
                                    securing your trademarks and enhancing visibility, credibility, and control. </p>
                            </div>
                        </div>
                        <div class="swiper-slide h-auto!">
                            <div class="border border-teal-500 py-10  px-2 rounded-lg">
                                <h5 class="text-[clamp(14px,3vw,18px)] text-teal-600"> 3) Amazon Brand Registry</h5>
                                <p class="text-[clamp(14px,3vw,17px)] pt-3"> Protect and grow your products on Amazon
                                    with
                                    Brand
                                    Registry,
                                    securing your trademarks and enhancing visibility, credibility, and control. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border border-teal-500 py-10  px-2 rounded-lg">
                                <h5 class="text-[clamp(14px,3vw,18px)] text-teal-600"> 4) Amazon Brand Registry</h5>
                                <p class="text-[clamp(14px,3vw,17px)] pt-3"> Protect and grow your products on Amazon
                                    with
                                    Brand
                                    Registry,
                                    securing your trademarks and enhancing visibility, credibility, and control. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border border-teal-500 py-10  px-2 rounded-lg">
                                <h5 class="text-[clamp(14px,3vw,18px)] text-teal-600"> 5) Amazon Brand Registry</h5>
                                <p class="text-[clamp(14px,3vw,17px)] pt-3"> Protect and grow your products on Amazon
                                    with
                                    Brand
                                    Registry,
                                    securing your trademarks and enhancing visibility, credibility, and control. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border border-teal-500 py-10  px-2 rounded-lg">
                                <h5 class="text-[clamp(14px,3vw,18px)] text-teal-600"> 6) Amazon Brand Registry</h5>
                                <p class="text-[clamp(14px,3vw,17px)] pt-3"> Protect and grow your products on Amazon
                                    with
                                    Brand
                                    Registry,
                                    securing your trademarks and enhancing visibility, credibility, and control. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border border-teal-500 py-10  px-2 rounded-lg">
                                <h5 class="text-[clamp(14px,3vw,18px)] text-teal-600"> 7) Amazon Brand Registry</h5>
                                <p class="text-[clamp(14px,3vw,17px)] pt-3"> Protect and grow your products on Amazon
                                    with
                                    Brand
                                    Registry,
                                    securing your trademarks and enhancing visibility, credibility, and control. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border border-teal-500 py-10  px-2 rounded-lg">
                                <h5 class="text-[clamp(14px,3vw,18px)] text-teal-600"> 8) Amazon Brand Registry</h5>
                                <p class="text-[clamp(14px,3vw,17px)] pt-3"> Protect and grow your products on Amazon
                                    with
                                    Brand
                                    Registry,
                                    securing your trademarks and enhancing visibility, credibility, and control. </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border border-teal-500 py-10  px-2 rounded-lg">
                                <h5 class="text-[clamp(14px,3vw,18px)] text-teal-600"> 9)Amazon Brand Registry</h5>
                                <p class="text-[clamp(14px,3vw,17px)] pt-3"> Protect and grow your products on Amazon
                                    with
                                    Brand
                                    Registry,
                                    securing your trademarks and enhancing visibility, credibility, and control. </p>
                            </div>

                        </div>

                    </div>

                </div>



            </div>
        </div>
    </section>




    <!-- price-section -->
    <section class="bg-teal-100 text-center">
        <div class="container">
            <div>
                <h3 class="text-black"> Choose A Suitable Plan</h3>
                <p class=" text-[clamp(14px,2vw,22px)] ">Choose from our tailored plans to fit your needs. From basic to
                    premium, find the option that works for you and let us handle the rest!</p>
            </div>
        </div>

        <!-- cards  -->
        <div
            class=" mx-10 grid lg:grid-cols-4 md:grid-cols-2  grid-cols-1  gap-5 [&_img]:invert-0 [&_img]:group-hover:invert">


            <div
                class="group  relative  bg-white rounded-xl border-1 border-teal-600  justify-start hover:bg-teal-600 transition    duration-300  group-hover:bg-teal-600 h-fit">
                <div class="px-5  pt-10">
                    <span
                        class= "group-hover:border-0 group-hover:text-black  text-teal-600 font-RussoOne border-1  px-4 rounded-md absolute top-[-13] left-[15] bg-white  border-teal-700">Basic</span>
                    <div class="flex justify-start items-center">


                        <span class="font-RussoOne text-8xl text-teal-600 group-hover:text-white ">$38</span>
                        <span class="group-hover:text-white">+Govt. <br> Fee</span>
                    </div>
                    <div class="text-left py-3 pb-3 py-3 border-b-1  group-hover:border-white border-teal-700 ">
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
                            class="bg-teal-600 font-semibold rounded-full py-3 px-6 mt-10 text-xl text-white group-hover:bg-black ">Get
                            Stared</button>
                    </div>
                </div>

                <div
                    class="w-auto group-hover:bg-white group-hover:text-black bg-teal-600 flex py-4 mt-8  rounded-b-xl gap-3 px-3">
                    <img src="{{ asset('assets/img/phone.svg') }}" alt="phone-svg" width="80px">
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
                        class= "group-hover:border-0 group-hover:text-black  text-teal-600 font-RussoOne border-1  px-4 rounded-md absolute top-[-13] left-[15] bg-white  border-teal-700">Deluxe</span>
                    <div class="flex justify-start items-center">


                        <span class="font-RussoOne text-8xl text-teal-600 group-hover:text-white ">$149</span>
                        <span class="group-hover:text-white">+Govt. <br> Fee</span>
                    </div>
                    <div class="text-left py-3 pb-3 py-3 border-b-1  group-hover:border-white border-teal-700 ">
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
                    <img src="{{ asset('assets/img/phone.svg') }}" alt="phone-svg" width="80px">
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
                <div class="px-5 pt-5">
                    <span
                        class= "group-hover:border-0 group-hover:text-black  text-teal-600 font-RussoOne border-1  px-4 rounded-md absolute top-[-13] left-[15] bg-white  border-teal-700">Premium</span>
                    <div class="flex justify-start items-center">


                        <span class="font-RussoOne text-7xl text-teal-600 group-hover:text-white ">$249</span>
                        <span class="group-hover:text-white">+Govt. <br> Fee</span>
                    </div>
                    <div class="text-left py-3 border-b-1  group-hover:border-white border-teal-700 ">
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
                    <img src="{{ asset('assets/img/phone.svg') }}" alt="phone-svg" width="80px">
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
                <div class="px-5 pt-5">
                    <span
                        class= "group-hover:border-0 group-hover:text-black  text-teal-600 font-RussoOne text-[14px] border-1  px-4 rounded-md absolute top-[-13] left-[22] bg-white  border-teal-700">Elite
                        (Global Trademark Filing)</span>
                    <div class="flex justify-start items-center">


                        <span class=" text-4xl font-bold text-teal-600 group-hover:text-white">Get A Quote</span>

                    </div>
                    <div class="text-left py-3 border-b-1  group-hover:border-white border-teal-700 ">
                        <p class="group-hover:text-white">Get priority attention for International Trademark filing with
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
                    <img src="{{ asset('assets/img/phone.svg') }}" alt="phone-svg" width="80px">
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

    {{-- amazon section --}}
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
                <div class="flex gap-4  items-center">
                    <div>
                        <button
                            class="bg-teal-600 rounded-full px-8 py-3 text-white font-bold text-xl hover:bg-black transition duration-400  ">Get
                            Started</button>
                    </div>
                    <div>
                        <a href="#"
                            class="text-black font-bold text-[24px] hover:text-teal-600 transition duration-300"> <img
                                src="{{ asset('assets/img/phone.png') }}" alt="phone-img">(773)
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
                    <h3 class="text-white [clamp(16px,3vw,18px)]">Disputes Are Inevitable <md:br> <span
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
                            <img src="{{ asset('assets/img/phone.png') }}" alt="phone" width="40px" height="40px"
                                class="object-contain w-auto">(773) 636-2167</a></div>

                </div>
            </div>
        </div>
    </section>
    {{-- client experience section --}}
    <section>
        <div class="container">
            <div>
                <div class="text-center">
                    <h2 class="text-[clamp(18px,vw,26px)] ">Client Experiences That Speak for Themselves</h2>
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
                                <p>Trademark Legit keeps me informed every step of the way—from
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
                                <p class="">Trademark Legit keeps me informed every step of the way—from
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
                                <p class="">Trademark Legit keeps me informed every step of the way—from
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

                            <div class="testimonial-card  p-5 text-center px-3  py-5">
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

                            <div class="testimonial-card  p-5 text-center px-3  py-5">
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

                            <div class="testimonial-card  p-5 text-center px-3  py-5">
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

                            <div class="testimonial-card  p-5 text-center px-3  py-5">
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

                            <div class="testimonial-card  p-5 text-center px-3  py-5">
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
@endsection
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
