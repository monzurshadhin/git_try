@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('content')
    <section class="banner-section">
        <div class="container">
            <div class="banner-carousel">
                @foreach($blogs as $blog)
                <div class="banner-item">
                    <div class="card">
                        <a href="single-layout-one.html"><img src="{{asset($blog->image)}}" class="card-img" alt="" /></a>
                        <div class="card-img-overlay banner-text">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">Lifestyle</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">{{$blog->title}}</a>
                            </h5>
                            <p class="card-text mb-3">
                                {{$blog->description}}
                            </p>
                            <a href="single-layout-one.html" class="btn btn-solid btn-read">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="more-content-grid">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card simple-overlay-card mt-0">
                            <a href="single-layout-one.html">
                                <img src="{{asset($blog->image)}}" class="card-img" alt="" /></a>
                            <div class="card-img-overlay">
                                <ul class="category-tag-list">
                                    <li class="category-tag-name">
                                        <a href="#">{{$blog->category['category_name']}}</a>
                                    </li>
                                </ul>
                                <h5 class="card-title title-font">
                                    <a href="{{route('blog.details',['slug'=>$blog->slug])}}">
                                        {{$blog->title}}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Banner section end -->

    <!-- Featured Posts -->
    <section class="featured-posts section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Featured posts</h2>
            </div>
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="card border-0 card-350">
                        <a href="single-layout-one.html">
                            <img src="{{asset('frontEnd')}}/assets/images/travel-man.jpg" class="card-img-top" alt="" />
                        </a>
                        <div class="card-body px-0">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">Travel</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">
                                    Top 10 mysterious places you didn't know
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mx-md-4 border-0 card-500">
                        <a href="single-layout-one.html"><img src="{{asset('frontEnd')}}/assets/images/banner-1.jpg" class="card-img" alt="" /></a>
                        <div class="card-img-overlay">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">Lifestyle</a>
                                </li>
                                <li class="category-tag-name">
                                    <a href="#">Travel</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">Take the stress out with nature</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-350 border-0">
                        <a href="single-layout-one.html">
                            <img src="{{asset('frontEnd')}}/assets/images/biker.jpg" class="card-img-top" alt="" />
                        </a>
                        <div class="card-body px-0">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="#">Lifestyle</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="single-layout-one.html">
                                    Solo Traveller
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured posts end -->

    <!-- Kavya posts -->
    <section class="kavya-posts popular">
        <div class="container">
            <div class="section-title">
                <h2>Popular Posts</h2>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="posts-wrapper">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card card-350">
                                    <a href="single-layout-one.html">
                                        <img src="{{asset('frontEnd')}}/assets/images/city-pink.jpg" class="card-img-top" alt="" />
                                    </a>
                                    <div class="card-body px-0">
                                        <ul class="category-tag-list">
                                            <li class="category-tag-name">
                                                <a href="#">Travel</a>
                                            </li>
                                            <li class="category-tag-name">
                                                <a href="#">Lifestyle</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title title-font">
                                            <a href="single-layout-one.html">
                                                Remember before moving to a new city</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-350">
                                    <a href="single-layout-one.html">
                                        <img src="{{asset('frontEnd')}}/assets/images/airport.jpg" class="card-img-top" alt="" />
                                    </a>
                                    <div class="card-body px-0">
                                        <ul class="category-tag-list">
                                            <li class="category-tag-name">
                                                <a href="#">Travel</a>
                                            </li>
                                            <li class="category-tag-name">
                                                <a href="#">Lifestyle</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title title-font">
                                            <a href="single-layout-one.html">
                                                Travel more in 2020</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="single-layout-one.html">
                                        <img src="{{asset('frontEnd')}}/assets/images/forest.jpg" class="card-img-top" alt="" />
                                    </a>
                                    <div class="card-body px-0">
                                        <ul class="category-tag-list">
                                            <li class="category-tag-name">
                                                <a href="#">Travel</a>
                                            </li>
                                            <li class="category-tag-name">
                                                <a href="#">Nature</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title title-font">
                                            <a href="single-layout-one.html">
                                                You will get lost in these woods</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="single-layout-one.html">
                                        <img src="{{asset('frontEnd')}}/assets/images/cup.jpg" class="card-img-top" alt="" />
                                    </a>
                                    <div class="card-body px-0">
                                        <ul class="category-tag-list">
                                            <li class="category-tag-name">
                                                <a href="#">Travel</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title title-font">
                                            <a href="single-layout-one.html">
                                                How roaming around is good for you</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="single-layout-one.html">
                                        <img src="{{asset('frontEnd')}}/assets/images/coach.jpg" class="card-img-top" alt="" />
                                    </a>
                                    <div class="card-body px-0">
                                        <ul class="category-tag-list">
                                            <li class="category-tag-name">
                                                <a href="#">Travel</a>
                                            </li>
                                            <li class="category-tag-name">
                                                <a href="#">Lifestyle</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title title-font">
                                            <a href="single-layout-one.html">
                                                Old and beautiful </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="sidebar-posts">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Recent Posts</h5>
                        </div>
                        <div class="sidebar-content author-posts">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-4 col-md-4">
                                        <a href="single-layout-one.html">
                                            <img src="{{asset('frontEnd')}}/assets/images/alone-house.jpg" class="card-img" alt="">
                                        </a>
                                    </div>
                                    <div class="col-8 col-md-8">
                                        <div class="card-body">
                                            <ul class="category-tag-list mb-0">
                                                <li class="category-tag-name">
                                                    <a href="#">Lifestyle</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title title-font"><a href="single-layout-one.html">Abandon Houses</a>
                                            </h5>
                                            <div class="author-date">
                                                <a class="date" href="#">
                                                    <span>21 Dec, 2019</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-4 col-md-4">
                                        <a href="single-layout-one.html">
                                            <img src="{{asset('frontEnd')}}/assets/images/time.jpg" class="card-img" alt="">
                                        </a>
                                    </div>
                                    <div class="col-8 col-md-8">
                                        <div class="card-body">
                                            <ul class="category-tag-list mb-0">
                                                <li class="category-tag-name">
                                                    <a href="#">Lifestyle</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title title-font"><a href="single-layout-one.html">Making time for travel</a>
                                            </h5>
                                            <div class="author-date">
                                                <a class="date" href="#">
                                                    <span>21 Dec, 2019</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-4 col-md-4">
                                        <a href="single-layout-one.html">
                                            <img src="{{asset('frontEnd')}}/assets/images/beach-sea.jpg" class="card-img" alt="">
                                        </a>
                                    </div>
                                    <div class="col-8 col-md-8">
                                        <div class="card-body">
                                            <ul class="category-tag-list mb-0">
                                                <li class="category-tag-name">
                                                    <a href="#">Lifestyle</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title title-font"><a href="single-layout-one.html">How writing has improved my
                                                    daily life</a>
                                            </h5>
                                            <div class="author-date">
                                                <a class="date" href="#">
                                                    <span>21 Dec, 2019</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-4 col-md-4">
                                        <a href="single-layout-one.html">
                                            <img src="{{asset('frontEnd')}}/assets/images/taj.jpg" class="card-img" alt="">
                                        </a>
                                    </div>
                                    <div class="col-8 col-md-8">
                                        <div class="card-body">
                                            <ul class="category-tag-list mb-0">
                                                <li class="category-tag-name">
                                                    <a href="#">photography</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title title-font"><a href="single-layout-one.html">Super easy ways to learn
                                                    about
                                                    photography</a>
                                            </h5>
                                            <div class="author-date">
                                                <a class="date" href="#">
                                                    <span>21 Dec, 2019</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-4 col-md-4">
                                        <a href="single-layout-one.html">
                                            <img src="{{asset('frontEnd')}}/assets/images/air-ballon.jpg" class="card-img" alt="">
                                        </a>
                                    </div>
                                    <div class="col-8 col-md-8">
                                        <div class="card-body">
                                            <ul class="category-tag-list mb-0">
                                                <li class="category-tag-name">
                                                    <a href="#">Travel</a>
                                                </li>
                                            </ul>
                                            <h5 class="card-title title-font"><a href="single-layout-one.html">Fly above clouds</a>
                                            </h5>
                                            <div class="author-date">
                                                <a class="date" href="#">
                                                    <span>21 Dec, 2019</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kavya posts end -->

    <!-- Popular Posts -->
    <section class="popular-posts section-padding">
        <div class="container">
            <div class="section-title">
                <h2>More from Kavya</h2>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <div class="card mb-4">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <a href="single-layout-one.html">
                                    <img src="{{asset('frontEnd')}}/assets/images/time.jpg" class="card-img" alt="">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">Lifestyle</a>
                                        </li>
                                    </ul>
                                    <h5 class="card-title title-font"><a href="single-layout-one.html">Making time for travel</a>
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor
                                        sit,
                                        amet consectetur adipisicing elit. Sapiente, asperiores.<p>
                                    <div class="author-date">
                                        <a class="author" href="#">
                                            <img src="{{asset('frontEnd')}}/assets/images/writer.jpg" alt="" class="rounded-circle" />
                                            <span class="writer-name-small">Julie</span>
                                        </a>
                                        <a class="date" href="#">
                                            <span>21 Dec, 2019</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <a href="single-layout-one.html"> <img src="{{asset('frontEnd')}}/assets/images/alone-house.jpg" class="card-img"
                                                                       alt=""></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">Lifestyle</a>
                                        </li>
                                    </ul>
                                    <h5 class="card-title title-font"><a href="single-layout-one.html">Abandon houses</a></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ipsum rem,
                                        delectus deserunt consectetur saepe? Expedita sapiente rerum nostrum fuga non iure minima sunt
                                        inventore.
                                    <p>
                                    <div class="author-date">
                                        <a class="author" href="#">
                                            <img src="{{asset('frontEnd')}}/assets/images/writer.jpg" alt="" class="rounded-circle" />
                                            <span class="writer-name-small">Julie</span>
                                        </a>
                                        <a class="date" href="#">
                                            <span>21 Dec, 2019</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-4">
                                <a href="single-layout-one.html"><img src="{{asset('frontEnd')}}/assets/images/taj.jpg" class="card-img" alt=""></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="category-tag-list">
                                        <li class="category-tag-name">
                                            <a href="#">photography</a>
                                        </li>
                                    </ul>
                                    <h5 class="card-title title-font"><a href="single-layout-one.html"> Super easy ways to learn
                                            everything about
                                            photography</a></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ipsum rem,
                                        delectus deserunt consectetur saepe? <p>
                                    <div class="author-date">
                                        <a class="author" href="#">
                                            <img src="{{asset('frontEnd')}}/assets/images/writer.jpg" alt="" class="rounded-circle" />
                                            <span class="writer-name-small">Julie</span>
                                        </a>
                                        <a class="date" href="#">
                                            <span>21 Dec, 2019</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="recent-posts">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Trending this week</h5>
                        </div>
                        <div class="sidebar-content">
                            <ul class="sidebar-list">
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        1
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html">Healthy Dieting Habits for any age</a>
                                    </div>
                                </li>
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        2
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html"> 10 foods you should try in Kathmandu</a>
                                    </div>
                                </li>
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        3
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html">Everything You Wanted to Know About Love Life</a>
                                    </div>
                                </li>
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        4
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html">Yoga works only under these conditions</a>
                                    </div>
                                </li>
                                <li class="sidebar-item">
                                    <div class="num-left">
                                        5
                                    </div>
                                    <div class="content-right">
                                        <a href="single-layout-one.html">Top 10 mysterious places you didn't know</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="instagram-posts">
                        <div class="sidebar-title">
                            <h5><i class="fas fa-circle"></i>Instagram Posts</h5>
                        </div>
                        <div class="sidebar-content">
                            <div class="row no-gutters">
                                <div class="col-6 col-lg-4">
                                    <div class="image-item insta-item">
                                        <a href="#"> <img src="{{asset('frontEnd')}}/assets/images/beautiful-girl.jpg" alt=""></a>
                                        <a href="#">
                                            <div class="image-hover">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="image-item insta-item">
                                        <a href="#"> <img src="{{asset('frontEnd')}}/assets/images/lighthouse.jpg" alt=""></a>
                                        <a href="#">
                                            <div class="image-hover">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4">
                                    <div class="image-item insta-item">
                                        <a href="#"><img src="{{asset('frontEnd')}}/assets/images/travel-man.jpg" alt=""></a>
                                        <a href="#">
                                            <div class="image-hover">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="image-item insta-item">
                                        <a href="#"> <img src="{{asset('frontEnd')}}/assets/images/blonde-girl.jpg" alt=""></a>
                                        <a href="#">
                                            <div class="image-hover">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="image-item insta-item">
                                        <a href="#"><img src="{{asset('frontEnd')}}/assets/images/biker.jpg" alt=""></a>
                                        <a href="#">
                                            <div class="image-hover">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4">
                                    <div class="image-item insta-item">
                                        <a href="#"> <img src="{{asset('frontEnd')}}/assets/images/shoes.jpg" alt=""></a>
                                        <a href="#">
                                            <div class="image-hover">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="insta-link">
                                        <a href="#" target="_blank" class=" btn-solid">Follow us <i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular posts end -->

@endsection
