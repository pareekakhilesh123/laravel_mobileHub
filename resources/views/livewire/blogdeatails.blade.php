<div>

    <style>
    .blog-date {
        display: inline-block;
        background: #f8d7da;
        color: #333;
        font-size: 14px;
        padding: 5px 12px;
        border-radius: 20px;
        margin-bottom: 15px;
    }

    .blog-image {
        width: 100%;
        max-height: 450px;
        object-fit: cover;
        border-radius: 12px;
    }

    .blog-title {
        font-size: 1.8rem;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .blog-description {
        margin-top: 20px;
        line-height: 1.7;
        font-size: 1rem;
        color: #555;

    }
    </style>
    <section class="breadcrumb-header" id="page">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner">
                <div class="head-info text-center">
                    <h1>Blog Details </h1>
                    <ul class="list-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5">
        <div class="">

            <!-- Date -->
            <span class="blog-date"> {{ \Carbon\Carbon::parse($data->created_at)->format('M d, Y') }}</span>

            <!-- Title -->
            <h2 class="blog-title">{{$data->blog_title}}</h2>

            <!-- Image -->
            <img src="{{ asset('blog_images/'.$data->blog_image) }}" alt="Blog Image" class="blog-image mb-4">

            <!-- Description -->
            <p class="blog-description text-start">
                {!! $data->blog_description !!}
            </p>

        </div>


    </div>
    <section class=" py-100">
        <div class="container">
            <div class="row ">
                @forelse($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="blog-item card">

                        <!-- Blog Image -->
                        <div class="img-blog">
                            <img class="img-fluid rounded" src="{{ asset('blog_images/'.$blog->blog_image) }}"
                                alt="{{ $blog->blog_title }}" style="object-fit:cover; height:220px; width:100%;">
                        </div>

                        <!-- Blog Content -->
                        <div class="text-blog p-3">
                            <div class="time-and-tag mb-2">
                                <span class="time text-muted">
                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}
                                </span>
                            </div>

                            <h5 class="title-blog">
                                <a href="{{url('blog-details/'.$blog->id)}}" class="text-dark text-decoration-none">
                                    {{ Str::limit($blog->blog_title, 50) }}
                                </a>
                            </h5>

                            <p class="text-muted">
                                {{ Str::limit(strip_tags($blog->blog_description), 100) }}
                            </p>

                            <a href="{{url('blog-details/'.$blog->id)}}" class=" blog-open fw-bold">
                                Read More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted fw-bold"><i class="bi bi-exclamation-circle"></i> No Blogs Available</p>
                </div>
                @endforelse
            </div>

    </section>


</div>