<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanjith</title>

    {{-- ---------------------------------  Goolge Fonts ----------------------------------- --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- -----------------------------  Bootstrap ------------------------------- --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }} ">

    {{-- ------------------- Font Awesome ------------------------ --}}
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/all.min.css') }} ">

    {{-- -------------------- Responsive CSS ------------------- --}}
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }} ">

    {{-- ------------------ Style CSS ----------------- --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    {{-- ------------------ Animate ------------------ --}}
    <link rel="stylesheet" href="{{ asset('css/animate/animate.css') }}">


    {{-- ------------------  Silk CSS --------------- --}}
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="{{ asset('css/jcarousel/slick.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/jcarousel/slick-theme.css') }}"> --}}

    {{-- ------------------------  Toaster -------------------------- --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">



    {{-- ---------------- Jquery js ---------------- --}}
    <script src="{{ asset('js/jquery.js') }}"></script>

    <script src="{{ asset('js/particles/particles.js') }}"></script>
    {{-- ---------------- Jquery js ---------------- --}}
    {{-- <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> --}}

    {{-- ----------------- Waypoints ------------------- --}}
    <script src="{{ asset('js/waypoints/jquery.waypoints.min.js') }}"></script>

    {{-- ------------------ WOW ------------------------ --}}
    <script src="{{ asset('js/wow/wow.min.js') }}"></script>

    {{-- ------------------ slick carousel ------------------------ --}}
    <script src="{{ asset('js/jcarousel/slick.min.js') }}"></script>


    {{-- ----------------  Sweetalert ---------------- --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/typeit@7.1.2/dist/typeit.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/5.0.2/typeit.min.js" integrity="sha512-izh01C0sD66AuIVp4kRaEsvCSEC5bgs3n8Bm8Db/GhqJWei47La76LGf8Lbm8UHdIOsn+I7SxbeVLKb1k2ExMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNav">

    <div id="preloader">
        <div id="status">

        </div>
    </div>

    @include('layout.header')

    @include('layout.home')

    @include('layout.about')

    @include('layout.skill')

    @include('layout.service')

    @include('layout.portfolio')

    @include('layout.contact')

    @include('layout.footer')


    {{-- <script src="{{ asset('js/contact/contact.js')}}"></script> --}}

    <script>
        $(function() {
            $('#contact-form').submit(function(event) {
                event.preventDefault();
        
                $.ajax({
                    url: '{{ route('contacts.store') }}',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(data) {
                        console.log(data);
                        $('#error-name').text('');
                        $('#error-phone').text('');
                        $('#error-email').text('');
                        $('#error-subject').text('');

                        if (data.errors) {
                            if (data.errors.name) {
                                $('#error-name').text(data.errors.name[0]);
                            }

                            if (data.errors.phone) {
                                $('#error-phone').text(data.errors.price[0]);
                            }

                            if (data.errors.email) {
                                $('#error-email').text(data.errors.image[0]);
                            }
                            if (data.errors.subject) {
                                $('#error-subject').text(data.errors.image[0]);
                            }
                        } else {
                            // Start Message 
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top',

                                showConfirmButton: false,
                                timer: 2500
                            })

                            Toast.fire({
                                type: 'success',
                                icon: 'success',
                                title: 'Thank you for contact us. we will contact you shortly!!',
                            })

                            // toastr.success('Thank you for contact us. we will contact you shortly!!');

                            //$("#contact_form")[0].reset();
                            $('#contact-form').trigger('reset');

                        }
                    }
                });
            });
        });
    </script>

    
    <!--------------------  Bootstrap js  --------------------->
    <script src="js/bootstrap/js/bootstrap.min.js"></script>

    {{-- ------------------- Silk js -------------------- --}}
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    {{-- -------------- Script js ----------------------- --}}
    <script src="{{ asset('js/script.js') }}"></script>

    {{-- ---------------    Toaster js -------------------- --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

</body>

</html>
