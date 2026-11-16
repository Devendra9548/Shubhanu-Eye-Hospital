@extends('templates.front.main')
@foreach($blog as $blog)
@section('metainfo')
<title>{{$blog->meta_title}}</title>
<meta name="description" content="{{$blog->meta_desc}}">
<meta name="keywords" content="{{$blog->meta_keys}}">
<meta name="author" content="Shubhanu Eye Hospital">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$blog->meta_title}}" />
<meta property="og:description" content="{{$blog->meta_desc}}" />
<meta property="og:url" content="https://shubhanueyehospital.com/{{$blog->slug}}" />
<meta property="og:site_name" content="Shubhanu Eye Hospital" />
<meta property="og:image" content="https://shubhanueyehospital.com/assets/front/imgs/banners/1.webp" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="og:image:type" content="image/webp" />
<link rel="canonical" href="https://shubhanueyehospital.com/{{$blog->slug}}" />
@endsection
@section('customcss')
<link rel="stylesheet" href="/assets/front/css/singleblog.css">
@endsection
@section('body')
<section class="badge-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="/">Home</a> /
                <a href="/blog">Blogs</a> /
                <a href="javascript:void(0)">{{$blog->title}}</a>
            </div>
        </div>
    </div>
</section>
<section class="main-blog py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-8 left-clm">
                <img src="/blogs/{{$blog->file}}" alt="{{$blog->title}}" width="100%">
                <div class="main-content">
                    <h1>{{$blog->title}}</h1>
                    <div class="desc">
                        {!!$blog->description!!}
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="right-clm">
                    <h2>Other Blogs</h2>
                    <hr>
                    @foreach($allblog as $allblog)
                    @if($allblog->slug != $blog->slug)
                    <a href="/blog/{{$allblog->slug}}">
                        <div class="recent-blog d-flex align-items-center">
                            <div class="left">
                                <img src="/blogs/{{$allblog->file}}" alt="{{$allblog->title}}" width="100%">
                            </div>
                            <div class="right">
                                <h3>{{$allblog->title}}</h3>
                                <p>{{ \Carbon\Carbon::parse($allblog->created_at)->format('d F Y') }}</p>
                            </div>
                        </div>
                    </a>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br><br>
@endsection
@endforeach