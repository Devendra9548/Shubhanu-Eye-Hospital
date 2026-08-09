@extends('templates.front.main')
@section('customcss')
<title>Case Studies | Shubhanu Eye Hospital</title>
<link rel="stylesheet" href="/assets/front/css/case-studies.css">
<link rel="stylesheet" href="/assets/front/css/singleblog.css">
@endsection
@section('body')
<section class="badge-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="/">Home</a> /
                <a href="javascript:void(0)">Case Studies</a>
            </div>
        </div>
    </div>
</section>

<section class="main-blog py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-8 left-clm">
                <img src="/assets/front/imgs/13.jpg" alt="" width="100%">
                <div class="main-content">
                    <h1>Eye Tumor ( Shubhanu Eye Hospital Haldwani).</h1>
                    <p>Eye Tumor is a disease which is held in the eye due to within eye parts problem and sometimes it
                        spreads
                        from body parts like Lungs, Breast, and prostate due to cancer.</p>   
                    <p>There are two types of tumors Present in the eye.</p>
                    <p><strong>1. Primary Tumor.</strong></p>
                    <p><strong>2. Secondary Tumor.</strong></p> 
                    <p>Primary Tumors arise within the eye itself. And it is also known as Retinoblastoma. It is found
                        mainly in
                        children.</p>
                    <p>Secondary Tumors are caused by cancers that are spread from the other parts of the body to the
                        eye. It is
                        mainly found in adults known as melanoma.</p>
                    <h2 class="mb-3">Symptoms of Eye tumors.</h2>
                    <ol>
                        <li>Shadows in your vision.</li>
                        <li>Flash of light and wiggly on your vision.</li>
                        <li>Blurred eye vision.</li>
                        <li>Black spot in your eye becoming bigger day by day.</li>
                        <li>Half or full loss of vision.</li>
                        <li>Pain around your eyes.</li>
                    </ol>
                    
                    <h2>Precautions for eye tumors.</h2>
                    <p>Wear sunglass when going outside to protect the eyes from UV rays. Visit Now.</p> <br>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="right-clm">
                    <h2>Our Blogs</h2>
                    <hr>
                    @foreach($allblog as $allblog)
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br><br>
@endsection