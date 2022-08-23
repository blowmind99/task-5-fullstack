@extends('layout-article.base-articles')

@section('content')
<section class="main-content">

    <div class="container-xl">
        @foreach ($result as $row)
        <div class="row gy-4">

            <div class="col-lg-8">

                <!-- post -->
                <div class="post post-classic rounded bordered">
                    <div class="thumb top-rounded">
                        <a href="category.html" class="category-badge lg position-absolute"></a>

                        <a href="{{ $row->image }}">
                            <div class="inner">
                                <img src="{{  URL($row->image)}}" alt="post-title" />
                            </div>
                        </a>
                    </div>
                    <div class="details">
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><img src="{{  URL('assets-articles/images/other/author-sm.png')}}" class="author" alt="author"/>{{ $row->title }}</a></li>
                            <li class="list-inline-item">{{ $row->created_at }}</li>
                        </ul>
                        <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">How To Become Better With Building In 1 Month</a></h5>
                        <p class="excerpt mb-0">{{ $row->content }}</p>
                    </div>
                    <div class="post-bottom clearfix d-flex align-items-center">
                        <div class="social-share me-auto">
                            <button class="toggle-button icon-share"></button>
                            <ul class="icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <div class="more-button d-block d-md-none float-end">
                            <a href="blog-single.html"><span class="icon-options"></span></a>
                        </div>
                    </div>
                </div>

                <!-- post -->


                <!-- post -->


                <!-- post -->



            </div>

        </div>
        @endforeach
    </div>


</section>
<div>
<nav>
    <ul class="pagination justify-content-center">
        <li class="page-item active" aria-current="page">
            <span class="page-link">1</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
</nav>
</div>
@endsection

