$(document).ready(function() {
    // Initialize Parsley for Form Validation
    if ($('#enquiryForm').length) {
        $('#enquiryForm').parsley();

        // Handle Form Submission via AJAX
        $('#enquiryForm').on('submit', function(e) {
            e.preventDefault();
            
            var form = $(this);
            if (form.parsley().isValid()) {
                var submitBtn = form.find('button[type="submit"]');
                var originalText = submitBtn.html();
                
                submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Sending...');
                submitBtn.prop('disabled', true);

                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: response.message,
                                confirmButtonColor: '#ff7700',
                                background: '#ffffff',
                                color: '#212529'
                            });
                            form[0].reset();
                            form.parsley().reset();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: response.message,
                                confirmButtonColor: '#003366',
                                background: '#ffffff',
                                color: '#212529'
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'An unexpected error occurred. Please try again later.',
                            confirmButtonColor: '#003366',
                            background: '#ffffff',
                            color: '#212529'
                        });
                    },
                    complete: function() {
                        submitBtn.html(originalText);
                        submitBtn.prop('disabled', false);
                    }
                });
            }
        });
    }

    // Accordion Toggle Logic
    $('.accordion-header').on('click', function() {
        const body = $(this).next('.accordion-body');
        const isActive = $(this).hasClass('active');

        // Close all
        $('.accordion-header').removeClass('active');
        $('.accordion-body').removeClass('active');
        $('.accordion-header').find('i').removeClass('fa-minus').addClass('fa-plus');

        // If wasn't active, open it
        if (!isActive) {
            $(this).addClass('active');
            body.addClass('active');
            $(this).find('i').removeClass('fa-plus').addClass('fa-minus');
        }
    });

    // Mobile Menu Toggle
    $('.hamburger').on('click', function() {
        $('.mobile-menu').toggleClass('open');
    });

    // Initialize Hero Swiper
    if ($('.heroSwiper').length) {
        var heroSwiper = new Swiper(".heroSwiper", {
            spaceBetween: 0,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }

    // Initialize Testimonial Swiper
    if ($('.testimonialSwiper').length) {
        var testimonialSwiper = new Swiper(".testimonialSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
            },
        });
    }

    // Initialize Fancybox
    if (typeof Fancybox !== 'undefined') {
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    }
});
