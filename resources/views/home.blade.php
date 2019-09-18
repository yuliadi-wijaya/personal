@extends('layouts.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 banner-left">
                <h6>This is me</h6>
                <h1>{{ setting('banner.name')}}</h1>
                <p>
                    {{ setting('banner.description') }}
                </p>
                <a href="#" class="primary-btn text-uppercase">discover now</a>
            </div>
            <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                <img class="img-fluid" src="{{ Voyager::image(setting('banner.image'))}}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start home-about Area -->
<section class="home-about-area pt-120">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 home-about-left">
                <img class="img-fluid" src="{{ Voyager::image(setting('about-me.image'))}}" alt="">
            </div>
            <div class="col-lg-5 col-md-6 home-about-right">
                <h6>About Me</h6>
                <h1 class="text-uppercase">Personal Details</h1>
                <p>
                    {{ setting('about-me.personal_details')}}
                </p>
                <a href="#" class="primary-btn text-uppercase">View Full Details</a>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->

<!-- Start services Area -->
<section class="services-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content  col-lg-7">
                <div class="title text-center">
                    <h1 class="mb-10">My Offered Services</h1>
                    <p>At about this time of year, some months after New Year’s resolutions have been made and kept, or made and neglected.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-{{ $service->icon }}"></span>
                        <a href="#"><h4>{{ $service->name }}</h4></a>
                        <p>
                            {{ $service->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End services Area -->

<!-- Start fact Area -->
<section class="facts-area section-gap" id="facts-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 single-fact">
                <h1 class="counter">{{ setting('services-total.projects_completed') }}</h1>
                <p>Projects Completed</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
                <h1 class="counter">{{ setting('services-total.happy_clients') }}</h1>
                <p>Happy Clients</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
                <h1 class="counter">{{ setting('services-total.cups_of_coffee') }}</h1>
                <p>Cups of Coffee</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
                <h1 class="counter">{{ setting('services-total.real_professionals') }}</h1>
                <p>Real Professionals</p>
            </div>
        </div>
    </div>
</section>
<!-- end fact Area -->

<!-- Start portfolio-area Area -->
<section class="portfolio-area section-gap" id="portfolio">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Our Latest Featured Projects</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>

        <div class="filters">
            <ul>
                <li class="active" data-filter="*">All</li>
                @foreach ($portfolio_categories as $portfolio_category)
                    <li data-filter=".{{ strtolower($portfolio_category->category) }}">{{ $portfolio_category->category }}</li>
                @endforeach
            </ul>
        </div>

        <div class="filters-content">
            <div class="row grid">
                @foreach ($portfolios as $portfolio)
                    <div class="single-portfolio col-sm-4 all {{ strtolower($portfolio->category) }}">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                 <img class="image img-fluid" src="{{ Voyager::image($portfolio->image) }}" alt="">
                            </div>
                            <a href="{{ Voyager::image($portfolio->image) }}" class="img-pop-up">
                              <div class="middle">
                                <div class="text align-self-center d-flex"><img src="{{ Voyager::image('settings/preview.png') }}" alt=""></div>
                              </div>
                        </a>
                        </div>
                        <div class="p-inner">
                            <h4>{{ $portfolio->title }}</h4>
                            <div class="cat">{{ $portfolio->category }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
<!-- End portfolio-area Area -->

<!-- Start testimonial Area -->
<section class="testimonial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Client’s Feedback About Me</h1>
                    <p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial">
                @foreach ($clients as $client)
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ Voyager::image($client->photo)}}" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                {{ $client->feedback }}
                            </p>
                            <h4>{{ $client->name }}</h4>
                            <p>{{ $client->job }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End testimonial Area -->

<!-- Start price Area -->
<section class="price-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Choose Your Plan</h1>
                    <p>When someone does something that they know that they shouldn’t do, did they.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 single-price">
                <div class="top-part">
                    <h1 class="package-no">01</h1>
                    <h4>Economy</h4>
                    <p class="mt-10">For the individuals</p>
                </div>
                <div class="package-list">
                    <ul>
                        <li>Secure Online Transfer</li>
                        <li>Unlimited Styles for interface</li>
                        <li>Reliable Customer Service</li>
                    </ul>
                </div>
                <div class="bottom-part">
                    <h1>£199.00</h1>
                    <a class="price-btn text-uppercase" href="#">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 single-price">
                <div class="top-part">
                    <h1 class="package-no">02</h1>
                    <h4>Business</h4>
                    <p class="mt-10">For the individuals</p>
                </div>
                <div class="package-list">
                    <ul>
                        <li>Secure Online Transfer</li>
                        <li>Unlimited Styles for interface</li>
                        <li>Reliable Customer Service</li>
                    </ul>
                </div>
                <div class="bottom-part">
                    <h1>£299.00</h1>
                    <a class="price-btn text-uppercase" href="#">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 single-price">
                <div class="top-part">
                    <h1 class="package-no">03</h1>
                    <h4>Premium</h4>
                    <p class="mt-10">For the individuals</p>
                </div>
                <div class="package-list">
                    <ul>
                        <li>Secure Online Transfer</li>
                        <li>Unlimited Styles for interface</li>
                        <li>Reliable Customer Service</li>
                    </ul>
                </div>
                <div class="bottom-part">
                    <h1>£399.00</h1>
                    <a class="price-btn text-uppercase" href="#">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 single-price">
                <div class="top-part">
                    <h1 class="package-no">04</h1>
                    <h4>Exclusive</h4>
                    <p class="mt-10">For the individuals</p>
                </div>
                <div class="package-list">
                    <ul>
                        <li>Secure Online Transfer</li>
                        <li>Unlimited Styles for interface</li>
                        <li>Reliable Customer Service</li>
                    </ul>
                </div>
                <div class="bottom-part">
                    <h1>£499.00</h1>
                    <a class="price-btn text-uppercase" href="#">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End price Area -->

<!-- Start recent-blog Area -->
<section class="recent-blog-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text">
                <h1>Latest posts from our blog</h1>
                <p>
                    You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving and expanding the business
                </p>
            </div>
        </div>
        <div class="row">
            <div class="single-recent-blog col-lg-4 col-md-4">
                <div class="thumb">
                    <img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt="">
                </div>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="img-fluid" src="img/user.png" alt="">
                        <a href="#"><span>Mark Wiens</span></a>
                    </div>
                    <div class="meta">
                        13th Dec
                        <span class="lnr lnr-heart"></span> 15
                        <span class="lnr lnr-bubble"></span> 04
                    </div>
                </div>
                <a href="#">
                    <h4>Break Through Self Doubt
                    And Fear</h4>
                </a>
                <p>
                    Dream interpretation has many forms; it can be done be done for the sake of fun, hobby or can be taken up as a serious career.
                </p>
            </div>
            <div class="single-recent-blog col-lg-4 col-md-4">
                <div class="thumb">
                    <img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt="">
                </div>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="img-fluid" src="img/user.png" alt="">
                        <a href="#"><span>Mark Wiens</span></a>
                    </div>
                    <div class="meta">
                        13th Dec
                        <span class="lnr lnr-heart"></span> 15
                        <span class="lnr lnr-bubble"></span> 04
                    </div>
                </div>
                <a href="#">
                    <h4>Portable Fashion for
                    young women</h4>
                </a>
                <p>
                    You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving.
                </p>
            </div>
            <div class="single-recent-blog col-lg-4 col-md-4">
                <div class="thumb">
                    <img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt="">
                </div>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="img-fluid" src="img/user.png" alt="">
                        <a href="#"><span>Mark Wiens</span></a>
                    </div>
                    <div class="meta">
                        13th Dec
                        <span class="lnr lnr-heart"></span> 15
                        <span class="lnr lnr-bubble"></span> 04
                    </div>
                </div>
                <a href="#">
                    <h4>Do Dreams Serve As
                    A Premonition</h4>
                </a>
                <p>
                    So many of us are demotivated to achieve anything. Such people are not enthusiastic about anything. They don’t want to work involved.
                </p>
            </div>


        </div>
    </div>
</section>
<!-- end recent-blog Area -->

<!-- Start brands Area -->
<section class="brands-area">
    <div class="container">
        <div class="brand-wrap">
            <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End brands Area -->
@endsection
