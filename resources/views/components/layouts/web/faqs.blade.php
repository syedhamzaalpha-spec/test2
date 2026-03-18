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