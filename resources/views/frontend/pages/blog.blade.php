@extends('components.layouts.web.master')
@section('main-content')
    <section class="bg-[url(/assets/img/blog/blog-bg.jpg)] bg-cover bg-no-repeat bg-center h-[calc(100dvh-150px)]">
        <div class="container flex ">
            <div class="w-full lg:w-7/12">
                <div class="pt-10">
                    <h3 class="text-white">Our <br class="hidden lg:block "><span class="text-secondary bg-white">blogs &
                            Insights</span></h3>
                    <p class="text-white">Explore expert tips, industry updates, and helpful guides to stay informed and
                        empowered on your trademark and brand protection journey.</p>
                </div>
            </div>
            <div class="w-full lg:w-5/12">
                <img src="{{ asset('assets/img/blog/blog-banner.png') }}" alt="blog-banner"
                    class="w-[40vw] absolute bottom-0 right-3">
            </div>
        </div>
    </section>
    <x-layouts.web.marqueeslider />
    {{-- card-secton-start --}}
    <section>
        <div class="container">
            <div class="grid w-full sm:grid-cols-2 lg:grid-cols-3  gap-5">
                <div class=" border-3 border-secondary rounded-xl py-5 flex flex-col  justify-between px-3">
                    <div>
                        <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="blog-1"
                            class="rounded-xl h-[250px] w-100  mx-auto">
                        <h5 class="text-[clamp(16px,2vw,20px)] py-5"> The Ultimate Guide to Choosing and Protecting Your
                            Trademark Business Name</h5>
                        <p class="text-[clamp(12px,2vw,14px)]">Starting a business is exciting, but choosing the right name
                            is
                            one of the most important decisions you will make.</p>
                    </div>
                    <button
                        class="px-5 py-4 mt-3 bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
                <div class=" border-3 border-secondary rounded-xl py-5 px-3 flex flex-col  justify-between">
                    <div>
                        <img src="{{ asset('assets/img/blog/2.jpg') }}" alt="blog-1"
                            class="rounded-xl  h-[250px] w-100 mx-auto">
                        <h5 class="text-[clamp(16px,2vw,20px)] py-5 "> Top Reasons Why Every Startup Should Trademark Their
                            Business Name</h5>
                        <p class="text-[clamp(12px,2vw,14px)] ">Launching a startup is an exciting journey filled with
                            ambition,
                            creativity, and endless possibilities..</p>
                    </div>
                    <button
                        class="px-5 py-4  mt-9 bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
                <div class=" border-3 border-secondary rounded-xl py-5 px-3 flex flex-col  justify-between">
                    <div>
                        <img src="{{ asset('assets/img/blog/3.jpg') }}" alt="blog-1"
                            class="rounded-xl h-[250px] w-100 mx-auto">
                        <h5 class="text-[clamp(16px,2vw,20px)] py-5"> International Trademark Registration: Protecting Your
                            Brand Across Borders</h5>
                        <p class="text-[clamp(12px,2vw,14px)]">In today’s interconnected world, businesses are no longer
                            confined to local markets.</p>
                    </div>
                    <button
                        class="px-5 py-4 mt-9 bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
                <div class="border-3 border-secondary rounded-xl flex flex-col h-full py-5 px-3  justify-between">
                    <div>
                        <img src="{{ asset('assets/img/blog/4.jpg') }}" alt="blog-1"
                            class="rounded-xl h-[250px] w-100 mx-auto">
                        <h5 class="text-[clamp(16px,2vw,20px)] py-5"> Trademark Monitoring: Protecting Your Brand From
                            Infringement In 2025</h5>
                        <p class="text-[clamp(12px,2vw,14px)] ">In a business landscape that is constantly evolving, your
                            trademark brand name is one of your most valuable assets.</p>
                    </div>
                    <button
                        class="px-5 py-4 mt-3 bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
                <div class="border-3 border-secondary rounded-xl flex flex-col h-full py-5 px-3   justify-between">
                    <div>
                        <img src="{{ asset('assets/img/blog/5.jpg') }}" alt="blog-1"
                            class="rounded-xl h-[250px] w-100 mx-auto">
                        <h5 class="text-[clamp(16px,2vw,20px)] py-5"> Amazon Brand Registry: Safeguarding Your Brand On The
                            World's Largest Marketplace</h5>
                        <p class="text-[clamp(12px,2vw,14px)] ">Selling on Amazon provides businesses with unparalleled
                            access to
                            a global audience, but it also comes with unique challenges.</p>
                    </div>
                    <button
                        class="px-5 py-4 mt-3 bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
                <div class="border-3 border-secondary rounded-xl py-5 h-full px-3 flex flex-col  justify-between">
                    <div> <img src="{{ asset('assets/img/blog/5.jpg') }}" alt="blog-1"
                            class="rounded-xl h-[250px] w-100 mx-auto">
                        <h5 class="text-[clamp(16px,2vw,20px)] py-5"> Trademarking And Legal Consultation On Partnerships &
                            LLPs: Safeguarding Your Business Identity</h5>
                        <p class="text-[clamp(12px,2vw,14px)]  ">In today's competitive business environment, your brand is
                            more than just a logo or a name—it represents your reputation,</p>
                    </div>

                    <button
                        class="px-5 py-4  bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
                <div class="border-3 border-secondary rounded-xl py-5 h-full px-3 flex flex-col  justify-between">
                    <div> <img src="{{ asset('assets/img/blog/10.jpg') }}" alt="blog-1"
                            class="rounded-xl h-[250px] w-100 mx-auto">
                        <h5 class="text-[clamp(16px,2vw,20px)] py-5"> How Legal Monitoring Preserves Long-Term Value Of Your
                            Trademark Brand Name</h5>
                        <p class="text-[clamp(12px,2vw,14px)] ">Building a recognizable brand requires years of dedication,
                            creativity, and consistent customer engagement.</p>
                    </div>

                    <button
                        class="px-5 py-4  bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
                <div class="border-3 border-secondary rounded-xl py-5 h-full px-3 flex flex-col  justify-between">
                    <div> <img src="{{ asset('assets/img/blog/11.jpg') }}" alt="blog-1"
                            class="rounded-xl h-[250px] w-100 mx-auto">
                        <h5 class="text-[clamp(16px,2vw,20px)] py-5"> Why IT And Commercial Law Matters For Trademark Brand Name Security</h5>
                        <p class="text-[clamp(12px,2vw,14px)] ">In today's digitally driven economy, a business name is no longer protected simply by creativity or early use.</p>
                    </div>

                    <button
                        class="px-5 py-4  bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
            </div>
        </div>
    </section>
    {{-- card-secton-end --}}
@endsection
