<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('metainfo')
    <meta property="article:publisher" content="Shubhanu Eye Hospital" />
    <meta property="article:published_time" content="2026-10-07T00:00:00+05:30" />
    <meta property="article:modified_time" content="2026-10-07T00:00:00+05:30" />
    <link rel="stylesheet" href="/assets/front/css/header.css">
    <link rel="stylesheet" href="/assets/front/css/style.css">
    <link rel="stylesheet" href="/assets/front/css/footer.css">
    @yield('customcss')

    <!-- end -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Manrope:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100..900&family=Konkhmer+Sleokchher&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/front/css/animation.css">
    @if (!empty($gseo->globalheader))
    {!! $gseo->globalheader !!}
    @endif

    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.9.14/dist/dotlottie-wc.js" type="module"></script>
</head>

<body>
    <x-header facebook="{{ isset($gseo->facebook) ? $gseo->facebook : '' }}"
        linkedin="{{ isset($gseo->linkedin) ? $gseo->linkedin : '' }}"
        instagram="{{ isset($gseo->instagram) ? $gseo->instagram : '' }}"
        twitter="{{ isset($gseo->twitter) ? $gseo->twitter : '' }}"
        youtube="{{ isset($gseo->youtube) ? $gseo->youtube : '' }}"
        email="{{ isset($gseo->email) ? $gseo->email : '' }}" phone="{{ isset($gseo->phone) ? $gseo->phone : '' }}" />
    @yield('body')
    <x-footer facebook="{{ isset($gseo->facebook) ? $gseo->facebook : '' }}"
        linkedin="{{ isset($gseo->linkedin) ? $gseo->linkedin : '' }}"
        instagram="{{ isset($gseo->instagram) ? $gseo->instagram : '' }}"
        twitter="{{ isset($gseo->twitter) ? $gseo->twitter : '' }}"
        youtube="{{ isset($gseo->youtube) ? $gseo->youtube : '' }}"
        email="{{ isset($gseo->email) ? $gseo->email : '' }}" phone="{{ isset($gseo->phone) ? $gseo->phone : '' }}" />
    @if (!empty($gseo->gfbs))
    {!! $gseo->gfbs !!}
    @endif



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    @yield('customjs')
    @if (!empty($gseo->gfas))
    {!! $gseo->gfas !!}
    @endif

</body>
<script src="/assets/front/js/animation.js"></script>
</html>