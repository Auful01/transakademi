<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('owl/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owl/dist/assets/owl.theme.default.min.css')}}">
    <script src="https://kit.fontawesome.com/5f712d1a25.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    {{-- <link rel="stylesheet" href="{{asset('style/sidebar.css')}}"> --}}
</head>
<style>
    html{
        scroll-behavior: smooth
    }
     body{
        font-family: 'Poppins', sans-serif;
    }

    .primary{
        color: #1183D0;
    }

    .bg-primary{
        background-color: #1183D0;
        color: white;
    }

    .secondary{
        color: #3BA6FF;
    }

    .bg-secondary-transparent{
        background: linear-gradient(180deg, rgba(59, 166, 255, 0.5) 0%, rgba(59, 166, 255, 0) 100%);
    }

    .bg-secondary-transparent-reverse{
        background: linear-gradient(180deg, rgba(59, 166, 255, 0) 0%, rgba(59, 166, 255, 0.5) 100%);
    }

    .bg-secondary{
        background-color: #3BA6FF;
    }
</style>
<body style="overflow-x: hidden">

    @include('layouts.navbar')

    @include('pages.home')

    @include('pages.tentang')

    {{-- @include('pages.berita') --}}

    <div style="background: #A3D2FF">
        <hr style="width: 50%;height: 10px;border-radius: 10px;" class="mx-auto my-0 border-0 bg-primary">
    </div>

    @include('pages.about')

    @include('pages.facilities');

    @include('pages.program')

    @include('pages.testimoni')

    @include('layouts.footer')
    <div class="container">
        {{-- @yield('content') --}}

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('owl/dist/owl.carousel.min.js')}}"></script>

<script>
    AOS.init();
</script>



<script>
    $(document).ready(function () {
        $('.owl-stage-outer').addClass('pb-5')
    })

    $('.owl-carousel').owlCarousel({
    center: true,
    items:2,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
                items:4
        }

    }
});

window.onscroll = function (e) {
// called when the window is scrolled.
}
</script>
<script>
    $("body").on("scroll", function () {
        console.log("TEST");
    })
</script>
</body>
</html>
