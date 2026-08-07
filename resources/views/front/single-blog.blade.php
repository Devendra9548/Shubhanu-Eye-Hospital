@extends('templates.front.main')
@foreach($blog as $blog)
@section('customcss')
<link rel="stylesheet" href="/assets/front/css/singleblog.css">
<title>{{$blog->title}} | Shubhanu Eye Hospital</title>
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
                                <p>{{ $allblog->created_at->format('d M, Y') }}</p>
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