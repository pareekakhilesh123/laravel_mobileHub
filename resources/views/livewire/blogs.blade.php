<div>
    <section class="breadcrumb-header" id="page">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner">
                <div class="head-info text-center">
                    <h1>Our Blog </h1>
                    <ul class="list-breadcrumb">
                        <li><a  href="{{ route('home') }}">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="blog area py-100">
        <div class="container">
             <div class="row">
                    @forelse($blogs as $blog)
                    <div class="col-md-4 mb-4">
                        <div class="blog-item">

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
                                    <a href="{{ url('blog-details/' . $blog->id . '/' . str_replace(' ', '_', $blog->blog_title)) }}
                                         " class="text-dark text-decoration-none">
                                        {{ Str::limit($blog->blog_title, 50) }}
                                    </a>
                                </h5>

                                <p class="text-muted">
                                    {{ Str::limit(strip_tags($blog->blog_description), 100) }}
                                </p>

                                <a href="{{ url('blog-details/' . $blog->id . '/' . str_replace(' ', '_', $blog->blog_title)) }}
                                         " class="blog-open fw-bold">
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