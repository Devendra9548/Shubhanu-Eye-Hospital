@extends('templates.front.main')
@section('customcss')
<title>Blog | Shubhanu Eye Hospital</title>

@endsection
@section('body')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Listing</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .blog-desc {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .blog-title{
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .active, .active span{
        color: #000 !important;
    }

    body {
        background: #f5f7fb;
    }

    .section-title {
        font-size: 38px;
        font-weight: 700;
    }

    .section-subtitle {
        color: #777;
        max-width: 700px;
        margin: auto;
    }

    .blog-card {
        border: none;
        border-radius: 18px;
        overflow: hidden;
        transition: .35s;
        background: #fff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, .06);
    }

    .blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 45px rgba(0, 0, 0, .12);
    }

    .blog-img {
        height: 250px;
        object-fit: cover;
        width: 100%;
    }

    .category {
        display: inline-block;
        background: #0d6efd;
        color: #fff;
        font-size: 13px;
        padding: 5px 12px;
        border-radius: 30px;
    }

    .blog-date {
        color: #888;
        font-size: 14px;
    }

    .blog-title {
        font-size: 23px;
        font-weight: 700;
        margin-top: 15px;
        margin-bottom: 12px;
    }

    .blog-desc {
        color: #666;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .read-btn {
        border-radius: 12px;
        padding: 6px 15px;
        background: #24748c;
        color: #fff;
        display: inline-block;
        margin-top: 10px;
        opacity: 0.8;
    }
    .read-btn:hover {
        background: #24748c;
        color: #fff;
        opacity: 1;
    }

    
    @media(max-width:767px) {

        .section-title {
            font-size: 30px;
        }

        .blog-img {
            height: 210px;
        }

    }
    </style>

</head>

<body>

    <section class="py-5">

        <div class="container-fluid">

            <div class="text-center mb-5">

                <h1 class="section-title">Latest Blogs</h1>

                <p class="section-subtitle">
                    Discover useful articles, web development tips, technology updates and much more.
                </p>

            </div>

            <div class="row g-4">

                <!-- Blog -->
                @foreach($blog as $item)
                <div class="col-12 col-md-4">
                    <div class="blog-card h-100">
                        <img src="/blogs/{{ $item->file }}" class="blog-img" width="100%" alt="{{ $item->title }}">

                        <div class="p-4">
                            <div class="blog-date">{{ $item->created_at->format('d F Y') }}</div>
                            <h3 class="blog-title">{{ $item->title }}</h3>
                            <p class="blog-desc">
                                {{ substr($item->shortdesc, 0, 550) }}
                            </p>
                            <a href="/blog/{{ $item->slug }}" class="btn globalbtn read-btn">Read More →</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Pagination -->

            <div class="mt-5">
                <div class="mt-4">
                    {{ $blog->links() }}
                </div>
            </div>

        </div>

    </section>

</body>

</html>


<section class="hero-section py-5">
    <div class="container-fluid">
        <div class="row">

        </div>
    </div>
</section>

@endsection



