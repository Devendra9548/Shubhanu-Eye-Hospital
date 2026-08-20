@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/front/css/about.css">
<title>Shubhanu Eye Hospital, Haldwani | Uttarakhand</title>
<style>
    .instagram-item {
    display: block;
    overflow: hidden;
    aspect-ratio: 1 / 1;
    border-radius: 10px;
}

.instagram-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.instagram-item:hover img {
    transform: scale(1.05);
}
</style>
@endsection
@section('body')
<section class="instagram-feed py-5">
    <div class="container">

        <div class="text-center mb-4">
            <h2>Follow Us On Instagram</h2>
            <p>Latest updates from our Instagram</p>
        </div>

        <div class="row g-3">

            @forelse($posts as $post)

                <div class="col-lg-4 col-md-6 col-12">

                    <a href="{{ $post['permalink'] }}"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="instagram-item d-block">

                        @if($post['media_type'] === 'VIDEO')

                            <img
                                src="{{ $post['thumbnail_url'] ?? $post['media_url'] }}"
                                alt="Instagram Post"
                                class="img-fluid w-100"
                            >

                        @else

                            <img
                                src="{{ $post['media_url'] }}"
                                alt="Instagram Post"
                                class="img-fluid w-100"
                            >

                        @endif

                    </a>

                </div>

            @empty

                <div class="col-12 text-center">
                    <p>No Instagram posts available.</p>
                </div>

            @endforelse

        </div>

    </div>
</section>
@endsection



