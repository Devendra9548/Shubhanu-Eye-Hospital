@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
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
    body {
        background: #f5f7fb;
        font-family: Arial, Helvetica, sans-serif;
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
        height: 230px;
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
        border-radius: 50px;
        padding: 10px 24px;
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

        <div class="container">

            <div class="text-center mb-5">

                <h1 class="section-title">Latest Blogs</h1>

                <p class="section-subtitle">
                    Discover useful articles, web development tips, technology updates and much more.
                </p>

            </div>

            <div class="row g-4">

                <!-- Blog -->

                <div class="col-lg-4 col-md-6">

                    <div class="blog-card h-100">

                        <img src="https://picsum.photos/600/400?random=1" class="blog-img">

                        <div class="p-4">

                            <span class="category">Technology</span>

                            <div class="blog-date mt-3">
                                📅 03 August 2026
                            </div>

                            <h3 class="blog-title">
                                Top 10 Web Design Trends in 2026
                            </h3>

                            <p class="blog-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae
                                turpis sed purus facilisis gravida. Curabitur sed sem ut justo varius
                                mattis.
                            </p>

                            <a href="#" class="btn btn-primary read-btn">
                                Read More →
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Blog -->

                <div class="col-lg-4 col-md-6">

                    <div class="blog-card h-100">

                        <img src="https://picsum.photos/600/400?random=2" class="blog-img">

                        <div class="p-4">

                            <span class="category bg-success">Laravel</span>

                            <div class="blog-date mt-3">
                                📅 29 July 2026
                            </div>

                            <h3 class="blog-title">
                                Laravel 12 New Features You Should Know
                            </h3>

                            <p class="blog-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere
                                felis ac magna dignissim, eget pulvinar risus interdum.
                            </p>

                            <a href="#" class="btn btn-primary read-btn">
                                Read More →
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Blog -->

                <div class="col-lg-4 col-md-6">

                    <div class="blog-card h-100">

                        <img src="https://picsum.photos/600/400?random=3" class="blog-img">

                        <div class="p-4">

                            <span class="category bg-danger">Bootstrap</span>

                            <div class="blog-date mt-3">
                                📅 18 July 2026
                            </div>

                            <h3 class="blog-title">
                                Build Responsive Websites Faster
                            </h3>

                            <p class="blog-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                                Suspendisse potenti. Vivamus consequat vitae erat sit amet tincidunt.
                            </p>

                            <a href="#" class="btn btn-primary read-btn">
                                Read More →
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Blog -->

                <div class="col-lg-4 col-md-6">

                    <div class="blog-card h-100">

                        <img src="https://picsum.photos/600/400?random=4" class="blog-img">

                        <div class="p-4">

                            <span class="category bg-warning text-dark">SEO</span>

                            <div class="blog-date mt-3">
                                📅 15 July 2026
                            </div>

                            <h3 class="blog-title">
                                Improve Your Website SEO Easily
                            </h3>

                            <p class="blog-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                porttitor, elit quis gravida feugiat, purus ligula pulvinar arcu.
                            </p>

                            <a href="#" class="btn btn-primary read-btn">
                                Read More →
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Blog -->

                <div class="col-lg-4 col-md-6">

                    <div class="blog-card h-100">

                        <img src="https://picsum.photos/600/400?random=5" class="blog-img">

                        <div class="p-4">

                            <span class="category bg-dark">Programming</span>

                            <div class="blog-date mt-3">
                                📅 10 July 2026
                            </div>

                            <h3 class="blog-title">
                                Why Clean Code Matters
                            </h3>

                            <p class="blog-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam erat
                                volutpat. Cras volutpat elit sed ligula viverra feugiat.
                            </p>

                            <a href="#" class="btn btn-primary read-btn">
                                Read More →
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Blog -->

                <div class="col-lg-4 col-md-6">

                    <div class="blog-card h-100">

                        <img src="https://picsum.photos/600/400?random=6" class="blog-img">

                        <div class="p-4">

                            <span class="category bg-info text-dark">AI</span>

                            <div class="blog-date mt-3">
                                📅 05 July 2026
                            </div>

                            <h3 class="blog-title">
                                How AI is Transforming Web Development
                            </h3>

                            <p class="blog-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et magna
                                eget nisl consequat bibendum sit amet quis augue.
                            </p>

                            <a href="#" class="btn btn-primary read-btn">
                                Read More →
                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Pagination -->

            <div class="mt-5">

                <nav>

                    <ul class="pagination justify-content-center">

                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link">1</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link">2</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link">3</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link">Next</a>
                        </li>

                    </ul>

                </nav>

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