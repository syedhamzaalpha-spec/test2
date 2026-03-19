{{-- {{-- <nav class="container bg-[green] ">
    <div><span>(773) 636-2167</span></div>
    <div><span>sales@trademarklegit.com</span></div>
</nav> --}}
<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
{{-- 


</nav> --}}
<div class="bg-teal-700 py-3 lg:block hidden">
    <div class="container">
        <div class="flex justify-between">

            <ul class="flex justify-center items-center gap-4">

                <li class=" flex gap-3 items-center  ">
                    <a href="phone" class="flex  text-white text:sm "><img src="{{ asset('assets/img/phone.png') }}"
                            alt="phone" class="pr-2 flex object-contain"><span
                            class="hidden sm:block">(777)636-2167</span></a>
                </li>
                <li class=" flex gap-3 ">
                    <a href="gmail" class="flex  text-white"><img src="{{ asset('assets/img/email.png') }}"
                            alt="email" class="pr-2 object-contain w-7"><span
                            class="hidden sm:block">sales@trademarklegit.com</span></a>
                </li>

            </ul>
            <div>
                <ul class="flex justify-center items-center gap-4">

                    <li class=" flex gap-3 ">
                        <a href="gmail" class="flex  text-white text:sm "><img
                                src="{{ asset('assets/img/linkedin.svg') }}" alt="phone" width="30"
                                height="30" class="pr-2 flex invert "><span class="hidden sm:block"></a>
                    </li>
                    <li class=" flex gap-3 ">
                        <a href="gmail" class="flex  text-white"><img src="{{ asset('assets/img/facebook.svg') }}"
                                alt="email" width="30" height="22" class="pr-2 invert"><span
                                class="hidden sm:block"></a>
                    </li>
                    <li class=" flex gap-3 ">
                        <a href="gmail" class="flex  text-white"><img src="{{ asset('assets/img/instagram.svg') }}"
                                alt="email" width="30" height="22" class="pr-2 invert"><span
                                class="hidden sm:block "></a>
                    </li>

                </ul>

            </div>
        </div>

    </div>


</div>
<nav class="bg-[#102322] py-2 z-[1000] w-full sticky top-0 ">
    <div class="container mx-auto">

        <div class="lg:flex justify-between items-center">
            <!-- Top Row -->
            <div class="flex lg:block justify-between items-center">

                <!-- Logo -->
                <img src="{{ asset('assets/img/logo-white.png') }}" alt="logo" width="150">

                <!-- Hamburger -->
                <button class="lg:hidden hamburger">
                    <img src="{{ asset('assets/img/menu.svg') }}" width="22">
                </button>
            </div>

            <!-- Menu -->
            <div
                class=" menu hidden flex-col mt-4 space-y-4 md:mt-0 lg:flex md:flex-row md:items-center md:justify-between justify-center text-center md:space-y-0 ">

                <div class="flex flex-col md:flex-row md:gap-6 text-lg items-center">

                    <a href="/" class="text-white active:text-secondary hover:text-secondary text-[clamp(14px,2vw,18px)]">Home</a>
                    <a href="about" class="text-white hover:text-secondary text-[clamp(14px,2vw,18px)]">About</a>
                    {{-- <a href="#" class="text-white hover:text-secondary">Trademark Services</a> --}}
                    {{-- dropdownButtonStart --}}
                    <div class="relative group " data-twe-dropdown-ref>
                        <a class=" flex items-center  px-6 pb-2 pt-2.5 text-sm font-lg uppercase leading-normal text-white hover:text-secondary"
                            href="#" type="button" id="dropdownMenuButton2" data-twe-dropdown-toggle-ref
                            aria-expanded="false" data-twe-ripple-init data-twe-ripple-color="light">
                            Trademark Services

                            <span class="ms-2 w-2 [&>svg]:h-5 [&>svg]:w-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor" >
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <ul class="dropup-tip  absolute z-[1000] group-hover:block float-left m-0 hidden min-w-max list-none border-t-4 border-secondary  bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                            aria-labelledby="dropdownMenuButton2" data-twe-dropdown-menu-ref>
                            <li>
                                <a class=" block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal   focus:outline-none  active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Trademark Registration</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> nternational Trademark Filing</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Trademark Consultation</a>
                            </li>
                             <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Trademark Opposition Handling</a>
                            </li>
                             <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Trademark Statement Of Use</a>
                            </li>
                             <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Co-Existence Agreement</a>
                            </li>
                             <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Abandoned Trademark Re-Filing</a>
                            </li>
                        </ul>
                    </div>
                      <div class="relative group " data-twe-dropdown-ref>
                        <a class=" flex items-center  px-6 pb-2 pt-2.5 text-sm font-lg uppercase leading-normal text-white hover:text-secondary"
                            href="#" type="button" id="dropdownMenuButton2" data-twe-dropdown-toggle-ref
                            aria-expanded="false" data-twe-ripple-init data-twe-ripple-color="light">
                            Business Services


                            <span class="ms-2 w-2 [&>svg]:h-5 [&>svg]:w-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor" >
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <ul class="dropup-tip  absolute z-[1000] group-hover:block  float-left m-0 hidden min-w-max list-none border-t-4 border-secondary  bg-white bg-clip-padding text-base  shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                            aria-labelledby="dropdownMenuButton2" data-twe-dropdown-menu-ref>
                            <li>
                                <a class=" block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal   focus:outline-none  active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Amazon Brand Registry</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Business Formation Solutions</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Business Liquidation Services</a>
                            </li>
                             <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Issues of Shares</a>
                            </li>
                             <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Transfer of Shares</a>
                            </li>
                             <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Certificate of Good Standing</a>
                            </li>
                             <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Business Name Change</a>
                            </li>
                             <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px">Financial Bookkeeping Services</a>
                            </li>
                             <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25 flex gap-3 items-center hover:text-secondary"
                                    href="#" data-twe-dropdown-item-ref> <img src="{{asset('assets/img/chevron-right-primary.svg')}}" alt="chevron-right" width="15px"> Tax Strategy & Filing Services</a>
                            </li>
                        </ul>
                    </div>
                    {{-- dropdownButtonEnd --}}
                    {{-- <a href="#" class="text-white hover:text-secondary ">Business Services</a> --}}
                    <a href="contact" class="text-white hover:text-secondary text-[clamp(14px,2vw,18px)]">Contact</a>
                    <a href="blog" class="text-white hover:text-secondary text-[clamp(14px,2vw,18px)]>Blog</a>
                    <a href="faqs" class="text-white hover:text-secondary text-[clamp(14px,2vw,18px)]">FAQs</a>
                    <a href="#" 
                        class="text-[clamp(12px,3vw,16px)]  border text-white px-4 py-2 rounded-full  hover:bg-white hover:text-primary transition duration-300">
                        Free Consultation
                    </a>
                </div>

            </div>
        </div>

    </div>
</nav>
