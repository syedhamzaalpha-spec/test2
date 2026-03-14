<script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
{{-- <script defer src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js" defer></script> --}}

@vite('resources/js/app.js')

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
{{-- <script>
    var swiper = new Swiper(".testimonialSwiper", {
      slidesPerView: 3,
      centeredSlides: true,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script> --}}
<script>
    var swiper = new Swiper(".testimonialSwiper", {
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 30,
        loop: true,


        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,

            },
            1200: {
                slidesPerView: 3,

            },
        },

    });
</script>

<!-- Initialize Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<!-- <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        grid: {
            row: 2,
            fill: "row"
        },
        autoplay: {
            delay: 2500,
        },
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>  -->


<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2, // 2 columns
        grid: {
            rows: 2, // 2 rows
            fill: "row"
        },

        spaceBetween: 20,

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {

            0: { // mobile
                slidesPerView: 1,
                grid: {
                    rows: 1
                }
            },

            1040: { // mobile
                slidesPerView: 1,
                grid: {
                    rows: 1
                }
            },


            1170: { // desktop
                slidesPerView: 2,
                grid: {
                    rows: 2,
                    fill: "row"
                }
            }

        }
    });
    // Initialization for ES Users
</script>

<script defer src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/intlTelInput.min.js"></script>
<script>
    window.addEventListener("load", function(event) {
        
        class Phone {
            initializeIntlTelInput() {
                const phoneInputs = document.querySelectorAll(".phone");
                // const parent = document.querySelectorAll('.iti__country-container');
                phoneInputs.forEach((input) => {
                    const iti = window.intlTelInput(input, {
                        // dropdownContainer: parent,
                        strictMode: true,
                        initialCountry: "us",
                        onlyCountries: ["us", "gb", "au", "ca", "ae", "vi"],
                        geoIpLookup: function(callback) {
                            fetch("https://ipinfo.io", {
                                    method: "GET",
                                })
                                .then((response) => response.json())
                                .then((data) => {
                                    var countryCode =
                                        data && data.country ? data.country : "";
                                    if (
                                        ![
                                            "us",
                                            "gb",
                                            "au",
                                            "ca",
                                            "ae",
                                            "vi",
                                        ].includes(countryCode)
                                    ) {
                                        countryCode = "us";
                                    }
                                    callback(countryCode);
                                })
                                .catch((error) => {
                                    callback("us");
                                });
                        },
                        showSelectedDialCode: true,
                        loadUtils: () =>
                            import(
                                "https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/utils.js"
                            ),
                    });
                    // Attach iti instance to the input element for later use
                    input.iti = iti;
                    input.addEventListener("countrychange", function() {
                        const countryCode = iti.getSelectedCountryData().dialCode;

                        document.querySelector(".ISD_Number").value = countryCode;
                    });
                });
            }
        }

        const phone = new Phone();
        phone.initializeIntlTelInput();

        function validateDynamicInputs($form) {
            let isValid = true;
            $form
                .find("input[required], textarea[required], select[required]")
                .each(function() {
                    if ($(this).is(":visible") && $(this).val().trim() === "") {
                        $(this).addClass("form-error");
                        isValid = false;
                    } else {
                        $(this).removeClass("form-error");
                    }
                });
            return isValid;
        }

        function validateEmail($form) {
            const emailField = $form.find(".email");
            const emailValue = emailField.val().trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            emailField.next(".error-message").remove();

            if (!emailValue) {
                // showError(emailField, "Email is required.");
                emailField.addClass("form-error");
                return false;
            } else if (!emailPattern.test(emailValue)) {
                emailField.addClass("form-error");
                showError(
                    emailField,
                    "Enter a valid email (e.g., user@example.com)"
                );
                console.log("pattern is no valid email");
                return false;
            } else {
                emailField.removeClass("form-error");
                clearError(emailField);
                return true;
            }
        }

        function showError(field, message) {
            field
                .addClass("form-error")
                .after(
                    `<span class="error-message text-red-700 ms-2" style="font-size: 70%">${message}</span>`
                );
        }

        function clearError(field) {
            field.removeClass("form-error").next(".error-message").remove();
        }

        function validatePhone($form) {
            var phoneInput = $form.find(".phone")[0];
            if (phoneInput && phoneInput.iti) {
                var iti = phoneInput.iti;
                if (!iti.isValidNumber()) {
                    $form.find(".phone").addClass("form-error");
                    return false;
                } else {
                    $form.find(".phone").removeClass("form-error");
                    return true;
                }
            } else {
                $form.find(".phone").addClass("form-error");
                return false;
            }
        }

        $(document).on("click", ".lpformsubmit", function(e) {
            e.preventDefault();
            var $form = $(this).closest("form");
            var $btn = $(this);
            var emailValid = validateEmail($form);
            var phoneValid = validatePhone($form);
            var dynamicValid = validateDynamicInputs($form);

            var isValid = emailValid && phoneValid && dynamicValid;
            if (!isValid) {
                return;
            }
            var name = $form.find(".name").val();
            var email = $form.find(".email").val();
            var phone = $form.find(".phone").val();
            $btn.html("Submitting...");
            $btn.attr("disabled", true);
            $.ajax({
                url: "",
                method: "POST",
                headers: {
                    Authorization: "",
                    "Content-Type": "application/json",
                },
                data: JSON.stringify({
                    name: name,
                    email: email,
                    phone: phone,
                    data: [{
                        question: "Selected Service",
                        answer: "logo-design",
                        lead_type: "text",
                        lead_step: 2,
                    }, ],
                }),
                success: function({
                    data
                }) {
                    window.location.href = `/sequence/detail-form?id=${data?.id}`;
                },
                error: function(xhr, status, error) {
                    console.log(error);
                    const errorMsg = document.getElementById("errormsg");
                    errorMsg.innerHTML = "Error submitting form!";
                    errorMsg.style.display = "block";
                    $btn.removeAttr("disabled");
                },
            });
        });

        $(document).on("click", ".lpContactSequenceFormSubmit", function(e) {
            e.preventDefault();
            var $form = $(this).closest("form");
            var $btn = $(this);
            var emailValid = validateEmail($form);
            var phoneValid = validatePhone($form);
            var dynamicValid = validateDynamicInputs($form);

            var isValid = emailValid && phoneValid && dynamicValid;
            if (!isValid) {
                return;
            }
            var name = $form.find(".name").val();
            var email = $form.find(".email").val();
            var phone = $form.find(".phone").val();
            // var message = $form.find(".message").val() || "";

            // services
            const virtualSelectElements = $form.find(".lpService");
            const selectedServices = [];
            virtualSelectElements.each(function() {
                const selectedValues = this.value;
                if (selectedValues) {
                    selectedServices.push(...selectedValues);
                }
            });
            var dataArray = [];
            if (selectedServices.length > 0) {
                dataArray.push({
                    question: "Services",
                    answer: selectedServices.join(""),
                    lead_type: "text",
                    lead_step: 1,
                });
            }
            $btn.html("Submitting...");
            $btn.attr("disabled", true);
            $.ajax({
                url: "",
                method: "POST",
                headers: {
                    Authorization: "",
                    "Content-Type": "application/json",
                },
                data: JSON.stringify({
                    name: name,
                    email: email,
                    phone: phone,
                    data: dataArray,
                }),
                success: function({
                    data
                }) {
                    $btn.html("Submit");
                    $btn.attr("disabled", false);
                    window.location.href = `/thankyou`;
                },
                error: function(xhr, status, error) {
                    console.log(error);
                    const errorMsg = document.getElementById("errormsg");
                    errorMsg.innerHTML = "Error submitting form!";
                    errorMsg.style.display = "block";
                    $btn.removeAttr("disabled");
                },
            });
        });
    });
</script>
