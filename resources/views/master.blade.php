<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._header')
</head>
<body>

<!-- PRELOADER -->
<div id="st-preloader">
    <div id="pre-status">
        <div class="preload-placeholder"></div>
    </div>
</div>
<!-- /PRELOADER -->


<!-- HEADER -->
@include('partials._navbar')
<!-- /HEADER -->


<!-- SLIDER -->
<section id="slider">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url('assets/images/banner03.png')">
                <div class="carousel-caption container">
                    <div class="row">
                        <div class="col-sm-7">
                            <a href="{{url('pvc')}}">
                            <h1>Trocal ПВЦ ПРОФИЛ</h1>
                            <h2>Заменете ги старите и оштетени прозорци и заштедете</h2>
                            <p>Двојно поголема звучна и топлинска изолација </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(assets/images/banner02.png)">
                <div class="carousel-caption container">
                    <div class="row">
                        <div class="col-sm-7">
                            <a class="title-caption" href="{{url('komarnici')}}">
                                 <h1>Заштитете се </h1>
                                 <h2>Комарници</h2>
                                 <p>Заштите го својот дома и работно место од разни инсекти со комарниците на алупласт.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(assets/images/banner03.png)">
                <div class="carousel-caption container">
                    <div class="row">
                        <div class="col-sm-7">
                            <h1>Trocal ПВЦ ПРОФИЛ </h1>
                            <h2>Двојно поголема звучна и топлинска изолација</h2>
                        </div>
                    </div>
                </div>
            </div>
            <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
    </div> <!--/#home-carousel-->
</section>
<!-- /SLIDER -->


<!-- SERVICES -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="featurette" id="about">
                <img class="featurette-image img-circle img-responsive pull-left" src="http://placehold.it/500x500">
                <h2 class="featurette-heading">This First Heading
                    <span class="text-muted">Will Catch Your Eye</span>
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
        </div>
    </div>
</section>
<!-- /SERVICES -->
<!-- PRICING -->
<section id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Производи</h1>
                    <span class="st-border"></span>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{{asset('assets/images/placeholder.png')}}" alt="">
                    <div class="caption">
                        <h3>                        <a href="{{url('pvc')}}">ПВЦ СТОЛАРИЈА</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img class="img-responsive" src="{{asset('assets/images/placeholder.png')}}" alt="">
                    <div class="caption">
                        <h3><a href="{{url('al')}}">Алуминиум</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{{asset('assets/images/placeholder.png')}}" alt="">
                    <div class="caption">
                        <h3><a href="{{url('roletni')}}">РОЛЕТНИ</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="{{asset('assets/images/placeholder.png')}}" alt="">
                    <div class="caption">
                        <a href="{{url('komarnici')}}">КОМАРНИЦИ</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- /PRICING -->
<!-- ABOUT US -->
<section id="about-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="about-us text-center">
                    <h4>Morem ipsum dolor sit amet.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum aliquid obcaecati deleniti minus quisquam quis magnam reprehenderit quaerat molestias rerum, excepturi autem fugiat corporis quidem a ipsum quos beatae! Ut!</p>
                    <a href="" class="btn btn-send">View More</a>
                </div>
            </div>
            <div class="col-sm-6 our-office">
                <div id="office-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/office/04.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/office/02.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/office/03.jpg" alt="">
                        </div>

                        <a class="office-carousel-left" href="#office-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="office-carousel-right" href="#office-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div> <!--/#office-carousel-->
            </div>
        </div>
    </div>
</section>
<!-- /ABOUT US -->
<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Контакт</h1>
                    <h2>Побарајте понуда</h2>
                </div>
            </div>
            <div class="col-sm-4 contact-info">
                <p class="contact-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae voluptatum dolorum, possimus tenetur pariatur officia, quo commodi autem doloribus vero rerum aspernatur quidem temporibus.</p>
                <p class="st-address"><i class="fa fa-map-marker"></i> <strong>E71 8th Ave, New York NY 21001, US</strong></p>
                <p class="st-phone"><i class="fa fa-mobile"></i> <strong>+00 123-456-789</strong></p>
                <p class="st-email"><i class="fa fa-envelope-o"></i> <strong>email@yourdomain.com</strong></p>
                <p class="st-website"><i class="fa fa-globe"></i> <strong>www.yourdomain.com</strong></p>

            </div>
            <div class="col-sm-7 col-sm-offset-1">
                <form action="php/send-contact.php" class="contact-form" name="contact-form" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" required="required" placeholder="Name*">
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" required="required" placeholder="Email*">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="subject" placeholder="Subject">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="website" placeholder="Website">
                        </div>
                        <div class="col-sm-12">
                            <textarea name="message" required="required" cols="30" rows="7" placeholder="Message*"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <input type="submit" name="submit" value="Send Message" class="btn btn-send">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /CONTACT -->

<!-- FOOTER -->
@include('partials._footer')
<!-- /FOOTER -->


<!-- Scroll-up -->
<div class="scroll-up">
    <ul><li><a href="#header"><i class="fa fa-angle-up"></i></a></li></ul>
</div>

@include('partials._js')

</body>
</html>