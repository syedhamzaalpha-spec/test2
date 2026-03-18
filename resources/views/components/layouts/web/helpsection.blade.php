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
                    class="   bottom-0 absolute right-18 w-[35vw]">

            </div>
        </div>
    </section>