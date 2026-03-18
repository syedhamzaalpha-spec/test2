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
            <div class="flex md:flex-row ">
                <div class=" border-3 border-secondary rounded-lg py-5 flex flex-col h-full px-3">
                    <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="blog-1" class="rounded-xl">
                    <h5 class="text-[clamp(16px,2vw,20px)] py-5"> The Ultimate Guide to Choosing and Protecting Your
                        Trademark Business Name</h5>
                    <p class="text-[clamp(12px,2vw,14px)]">Starting a business is exciting, but choosing the right name is
                        one of the most important decisions you will make.</p>
                    <button
                        class="px-5 py-4 mt-3 bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
                <div class=" border-3 border-secondary rounded-lg py-5 px-3">
                    <img src="{{ asset('assets/img/blog/2.jpg') }}" alt="blog-1" class="rounded-xl ">
                    <h5 class="text-[clamp(16px,2vw,20px)] py-5 "> Top Reasons Why Every Startup Should Trademark Their
                        Business Name</h5>
                    <p class="text-[clamp(12px,2vw,14px)] flex-grow">Launching a startup is an exciting journey filled with ambition,
                        creativity, and endless possibilities..</p>
                    <button
                        class="px-5 py-4  mt-9 bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
                <div class=" border-3 border-secondary rounded-lg py-5 px-3">
                    <img src="{{ asset('assets/img/blog/3.jpg') }}" alt="blog-1" class="rounded-xl">
                    <h5 class="text-[clamp(16px,2vw,20px)] py-5"> International Trademark Registration: Protecting Your
                        Brand Across Borders</h5>
                    <p class="text-[clamp(12px,2vw,14px)]">In today’s interconnected world, businesses are no longer
                        confined to local markets.</p>
                    <button
                        class="px-5 py-4 mt-9 bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
                <div class="border-3 border-secondary rounded-lg flex flex-col h-full py-5 px-3">
                    <img src="{{ asset('assets/img/blog/4.jpg') }}" alt="blog-1" class="rounded-xl">
                    <h5 class="text-[clamp(16px,2vw,20px)] py-5"> Trademark Monitoring: Protecting Your Brand From
                        Infringement In 2025</h5>
                    <p class="text-[clamp(12px,2vw,14px)] flex-grow">In a business landscape that is constantly evolving, your
                        trademark brand name is one of your most valuable assets.</p>
                    <button
                        class="px-5 py-4 mt-3 bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
                <div class="border-3 border-secondary rounded-lg flex flex-col h-full py-5 px-3">
                    <img src="{{ asset('assets/img/blog/5.jpg') }}" alt="blog-1" class="rounded-xl">
                    <h5 class="text-[clamp(16px,2vw,20px)] py-5"> Amazon Brand Registry: Safeguarding Your Brand On The
                        World's Largest Marketplace</h5>
                    <p class="text-[clamp(12px,2vw,14px)] flex-grow">Selling on Amazon provides businesses with unparalleled access to
                        a global audience, but it also comes with unique challenges.</p>
                    <button
                        class="px-5 py-4 mt-3 bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
                <div class="border-3 border-secondary rounded-lg py-5 h-full px-3">
                    <img src="{{ asset('assets/img/blog/5.jpg') }}" alt="blog-1"  class="rounded-xl ">
                    <h5 class="text-[clamp(16px,2vw,20px)] py-5"> Trademarking And Legal Consultation On Partnerships & LLPs: Safeguarding Your Business Identity</h5>
                    <p class="text-[clamp(12px,2vw,14px)]  flex-grow">In today's competitive business environment, your brand is more than just a logo or a name—it represents your reputation,</p>
                    <button
                        class="px-5 py-4  bg-black text-white font-bold w-full rounded-lg hover:bg-secondary duration-300">Read
                        More</button>
                </div>
            </div>
        </div>
    </section>
    {{-- card-secton-end --}}
@endsection
