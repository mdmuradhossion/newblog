@extends('layouts.app_front')

@section('content')

<main class="site-main">
    <section class="mb-30px">
        <div class="container">
            <div class="hero-banner" style="background:url('{{id_by_image(page_data('home')->slider_1)}}') left center no-repeat;">
                <div class="hero-banner__content">
                    <h3>{{page_data('home')->subtitle}}</h3>
                    <h1>{{page_data('home')->title}}</h1>
{{--                    <h4>December 12, 2018</h4>--}}
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="owl-carousel owl-theme blog-slider">
                @foreach(get_posts() as $cat)
                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0"
                             src="{{ id_by_image($cat->thum_image)}}"
                             alt="">
                    </div>
                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="#">{{get_data_by_id('name','categories','id',$cat->category_id)}}</a>
                        <h3><a href="#">{{$cat->title}}</a></h3>
                        <p>{{date_view($cat->created_at)}}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="blog-post-area section-margin mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach(get_posts() as $post)
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ id_by_image($post->image) }}" alt="">
                                <ul class="thumb-info">
                                    <li><a href="#"><i class="ti-user"></i>{{get_data_by_id('name','users','id',$post->user_id)}}</a></li>
                                    <li><a href="#"><i class="ti-notepad"></i>{{date_view($post->created_at)}}</a></li>
                                    <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                </ul>
                            </div>
                            <div class="details mt-20">
                                <a href="theme/sensive/blog-single.html">
                                    <h3>{{$post->title}}</h3>
                                </a>
                                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a
                                        href="#">technology</a>, <a href="#">fashion</a></p>
                               <p> @php echo $post->description; @endphp</p>

                                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget newsletter-widget">
                            <h4 class="single-sidebar-widget__title">Newsletter</h4>
                            <div class="form-group mt-30">
                                <div class="col-autos">
                                    <input type="text" class="form-control" id="inlineFormInputGroup"
                                           placeholder="Enter email" onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Enter email'">
                                </div>
                            </div>
                            <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                        </div>


                        <div class="single-sidebar-widget post-category-widget">
                            <h4 class="single-sidebar-widget__title">Catgory</h4>
                            <ul class="cat-list mt-20 text-capitalize  ">
                                @foreach(main_category() as $mCat)
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>{{$mCat->name}}</p>
                                        <p>(03)</p>
                                    </a>
                                    @if(!empty(sub_category_by_id($mCat->id)))
                                    <ul class="cat-list mt-20">
                                        @foreach(sub_category_by_id($mCat->id) as $sCat)
                                        <li>
                                            <a href="#" class="d-flex justify-content-between">
                                                <p>- {{$sCat->name}}</p>
                                                <p>(03)</p>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                     @endif
                                </li>
                                @endforeach
                            </ul>
                        </div>



                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="single-sidebar-widget__title">Popular Post</h4>
                            <div class="popular-post-list">
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="card-img rounded-0"
                                             src="{{ asset('front/theme/sensive/img/blog/thumb/xthumb1.png.pagespeed.ic.wv8kegxyxc.jpg') }}"
                                             alt="">
                                        <ul class="thumb-info">
                                            <li><a href="#">Adam Colinge</a></li>
                                            <li><a href="#">Dec 15</a></li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="{{ asset('front/theme/sensive/blog-single.html') }}">
                                            <h6>Accused of assaulting flight attendant miktake alaways</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="card-img rounded-0"
                                             src="{{ asset('front/theme/sensive/img/blog/thumb/xthumb2.png.pagespeed.ic.ycbysfvra_.jpg') }}"
                                             alt="">
                                        <ul class="thumb-info">
                                            <li><a href="#">Adam Colinge</a></li>
                                            <li><a href="#">Dec 15</a></li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="{{ asset('front/theme/sensive/blog-single.html') }}">
                                            <h6>Tennessee outback steakhouse the
                                                worker diagnosed</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="card-img rounded-0"
                                             src="{{ asset('front/theme/sensive/img/blog/thumb/xthumb3.png.pagespeed.ic.m9efnl0sdy.jpg') }}"
                                             alt="">
                                        <ul class="thumb-info">
                                            <li><a href="#">Adam Colinge</a></li>
                                            <li><a href="#">Dec 15</a></li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="{{ asset('front/theme/sensive/blog-single.html') }}">
                                            <h6>Tennessee outback steakhouse the
                                                worker diagnosed</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="single-sidebar-widget__title">Popular Post</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">software</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
