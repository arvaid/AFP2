<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('css/smoothproducts.css') }}">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">NamesAreOverrated</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="features.html">Posts</a></li>
                    <li class="nav-item"><a class="nav-link" href="about-us.html">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.html">support</a></li>
                </ul>
                <div><i class="fas fa-registered" data-toggle="tooltip" data-bss-tooltip="" style="padding: 8px;margin: 5px;padding-left: 8px;" title="Registration"></i><i class="fas fa-sign-in-alt" data-toggle="tooltip" data-bss-tooltip="" style="padding: 8px;margin: 5px;padding-left: 17px;" title="Login"></i></div>
            </div>
        </div>
    </nav>
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image:url(&quot;{{ asset('/img/tech/image4.jpg') }}&quot;);color:rgba(9, 162, 255, 0.85);">
            <div class="text">
                <h2><br><strong>We Love people who ask</strong>.</h2>
                <p><br>We build products that helps people and connect them to solutions that enable productivity, growth, and discovery.<br></p><button class="btn btn-outline-light btn-lg" type="button">Learn More</button>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Info</h2>
                    <p>We are an open community for anyone <br>that need or love help to&nbsp;get answers<br>for the toughest&nbsp; questions, share knowledge with US.<br><br></p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="{{ asset('/img/scenery/image5.jpg') }}"></div>
                    <div class="col-md-6">
                        <h3 class="text-left text-primary">What u can do here ?</h3>
                        <div class="getting-started-info">
                            <p class="lead text-left pulse animated"><i class="far fa-star"></i>&nbsp;Ask a question<br><i class="far fa-star"></i>&nbsp;vote on everyting<br><i class="far fa-star"></i>&nbsp;Answer questions<br><i class="far fa-star"></i>&nbsp;Tag your&nbsp;question<br><i class="far fa-star"></i>&nbsp;Get Recognized</p>
                        </div><button class="btn btn-outline-primary btn-lg" type="button">Join Now</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                    <p>We want to give u the best features&nbsp;so u can be free and not stressed by small&nbsp;inconveniences.<br>So we have Easy navigation, and<br>Trendy, intuitive design and user experience.<br><br></p>
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
                    <p>Names are Over Rated but if u&nbsp;<br>actually want to know ours, here we go.<br>We are just a normal university students who love helping and programming &lt;3 .</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="{{ asset('/img/avatars/avatar1.jpg') }}">
                            <div class="card-body info">
                                <h4 class="card-title">Vincze Flórián</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="{{ asset('/img/avatars/avatar2.jpg') }}">
                            <div class="card-body info">
                                <h4 class="card-title">Árvai Dániel<br></h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="{{ asset('/img/avatars/avatar3.jpg') }}">
                            <div class="card-body info">
                                <h4 class="card-title">Jámbor Alexandra<br></h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2021 Copyright NamesAreOverrated</p>
        </div>
    </footer>
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/bs-init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{ asset('/js/smoothproducts.min.js') }}"></script>
    <script src="{{ asset('/js/theme.js') }}"></script>
</body>

</html>