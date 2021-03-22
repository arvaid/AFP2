@extends('layouts.app')

@section('title')
    Home - Brand
@endsection

@section('page-class')
    landing-page
@endsection

@section('content')
    <section class="clean-block clean-hero" style="background-image:url(&quot;{{ asset('/img/tech/image4.jpg') }}&quot;);color:rgba(9, 162, 255, 0.85);">
        <div class="text">
            <h2><br><strong>We Love people who ask</strong>.</h2>
            <p>
                <br>
                We build products that helps people and connect them to solutions that enable productivity, growth, and discovery.<br>
            </p>
            <button class="btn btn-outline-light btn-lg" type="button">Learn More</button>
        </div>
    </section>
    <section class="clean-block clean-info dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Info</h2>
                <p>
                    We are an open community for anyone <br>
                    that need or love help to&nbsp;get answers<br>
                    for the toughest&nbsp; questions, share knowledge with US.<br><br>
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6"><img class="img-thumbnail" src="{{ asset('/img/scenery/image5.jpg') }}"></div>
                <div class="col-md-6">
                    <h3 class="text-left text-primary">What u can do here ?</h3>
                    <div class="getting-started-info">
                        <p class="lead text-left pulse animated">
                            <i class="far fa-star"></i>&nbsp;Ask a question<br>
                            <i class="far fa-star"></i>&nbsp;vote on everyting<br>
                            <i class="far fa-star"></i>&nbsp;Answer questions<br>
                            <i class="far fa-star"></i>&nbsp;Tag your&nbsp;question<br>
                            <i class="far fa-star"></i>&nbsp;Get Recognized
                        </p>
                    </div>
                    <button class="btn btn-outline-primary btn-lg" type="button">Join Now</button>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block features">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Features</h2>
                <p>
                    We want to give u the best features&nbsp;so u can be free and not stressed by small&nbsp;inconveniences.<br>
                    So we have Easy navigation, and<br>Trendy, intuitive design and user experience.<br>
                    <br>
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 feature-box"><i class="fas fa-star icon"></i>
                    <h4>Bootstrap 4</h4>
                    <p>Bootstrap &nbsp;is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.<br></p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                    <h4>Customizable</h4>
                    <p>Everyone have a unique Profile where u can flex<br>with your rank and point .</p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                    <h4>Responsive</h4>
                    <p>The responsive web design will automatically adjust for different screen sizes and viewports.<br><br></p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                    <h4>All Browser Compatibility</h4>
                    <p>Tested for most common&nbsp;web&nbsp;<strong>browsers</strong>: <br>Internet Explorer,&nbsp;Chrome, Firefox, Safari, Opera and Edge<br><br></p>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block about-us">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">About Us</h2>
                <p>
                    Names are Over Rated but if u&nbsp;<br>
                    actually want to know ours, here we go.<br>
                    We are just a normal university students who love helping and programming &lt;3 .
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="card clean-card text-center">
                        <img class="card-img-top w-100 d-block" src="{{ asset('/img/avatars/avatar1.jpg') }}">
                        <div class="card-body info">
                            <h4 class="card-title">Vincze Flórián</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="icons">
                                <a href="#"><i class="icon-social-facebook"></i></a>
                                <a href="#"><i class="icon-social-instagram"></i></a>
                                <a href="#"><i class="icon-social-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card clean-card text-center">
                        <img class="card-img-top w-100 d-block" src="{{ asset('/img/avatars/avatar2.jpg') }}">
                        <div class="card-body info">
                            <h4 class="card-title">Árvai Dániel<br></h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="icons">
                                <a href="#"><i class="icon-social-facebook"></i></a>
                                <a href="#"><i class="icon-social-instagram"></i></a>
                                <a href="#"><i class="icon-social-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card clean-card text-center">
                        <img class="card-img-top w-100 d-block" src="{{ asset('/img/avatars/avatar3.jpg') }}">
                        <div class="card-body info">
                            <h4 class="card-title">Jámbor Alexandra<br></h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="icons">
                                <a href="#"><i class="icon-social-facebook"></i></a>
                                <a href="#"><i class="icon-social-instagram"></i></a>
                                <a href="#"><i class="icon-social-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
