<!DOCTYPE html>
<html lang="en">

<head>
@if(!empty($pageseo[0]->title))
<title>{{ $pageseo[0]->title }}</title>
@endif
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

@if(!empty($pageseo[0]->description))
<meta name="description" content="{{ $pageseo[0]->description }}">
<meta name="keywords" content="{{ $pageseo[0]->keywords }}">
<meta name="author" content="{{ $pageseo[0]->author }}">
@if($pageseo[0]->slug == 'home')
<link rel="canonical" href="{{ url('/') }}" />
@else
<link rel="canonical" href="{{ url('/') }}/{{$pageseo[0]->slug}}" />
@endif
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $pageseo[0]->title }}" />
<meta property="og:description" content="{{ $pageseo[0]->description }}" />
@if($pageseo[0]->slug == 'home')
<meta property="og:url" content="{{ url('/') }}" />
@else
<meta property="og:url" content="{{ url('/') }}/{{$pageseo[0]->slug}}" />
@endif
<meta property="og:site_name" content="{{ $gseo->sitename }}" />
<meta property="article:publisher" content="{{ $gseo->facebook }}" />
<meta property="article:published_time" content="{{ $pageseo[0]->created_at }}" />
<meta property="article:modified_time" content="{{ $pageseo[0]->updated_at }}" />
<meta property="og:image" content="{{ url('/') }}/pages/{{$pageseo[0]->file}}" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="og:image:type" content="image/webp" />
@endif
@if(!empty($pageseo[0]->smarkup))
{!! $pageseo[0]->smarkup !!}
@endif
<link rel="stylesheet" href="/assets/front/css/header.css">
<link rel="stylesheet" href="/assets/front/css/style.css">
<link rel="stylesheet" href="/assets/front/css/footer.css">
@yield('customcss')
<!-- font family -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght,YOPQ@100..900,300&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prata&display=swap" rel="stylesheet">
<!-- end -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Manrope:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">


@if (!empty($gseo->globalheader))
    {!! $gseo->globalheader !!}
@endif

<script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.9.14/dist/dotlottie-wc.js" type="module"></script>
</head>

<body>

    <x-header 
    facebook="{{ isset($gseo->facebook) ? $gseo->facebook : '' }}"
    linkedin="{{ isset($gseo->linkedin) ? $gseo->linkedin : '' }}"
    instagram="{{ isset($gseo->instagram) ? $gseo->instagram : '' }}"
    twitter="{{ isset($gseo->twitter) ? $gseo->twitter : '' }}"
    youtube="{{ isset($gseo->youtube) ? $gseo->youtube : '' }}"
    email="{{ isset($gseo->email) ? $gseo->email : '' }}"
    phone="{{ isset($gseo->phone) ? $gseo->phone : '' }}"
    />
    @yield('body')
    <x-footer 
    facebook="{{ isset($gseo->facebook) ? $gseo->facebook : '' }}"
    linkedin="{{ isset($gseo->linkedin) ? $gseo->linkedin : '' }}"
    instagram="{{ isset($gseo->instagram) ? $gseo->instagram : '' }}"
    twitter="{{ isset($gseo->twitter) ? $gseo->twitter : '' }}"
    youtube="{{ isset($gseo->youtube) ? $gseo->youtube : '' }}"
    email="{{ isset($gseo->email) ? $gseo->email : '' }}"
    phone="{{ isset($gseo->phone) ? $gseo->phone : '' }}"
/>
@if (!empty($gseo->gfbs))
    {!! $gseo->gfbs !!}
@endif
    


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    @yield('customjs')
    @if (!empty($gseo->gfas))
    {!! $gseo->gfas !!}
    @endif

</body>

</html>