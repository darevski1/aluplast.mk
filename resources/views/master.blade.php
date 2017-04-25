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
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Контакт инфо</h2>
                <ul>
                    <li><a href="tel:1234567">+389 70 219 253</a> </li>
                    <li><a href="tel:1234567">+389 77 710 007</a> </li>
                    <li>aluplast@gmail.com </li>

                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            </div>
            <div class="col-md-6">
                <form action="{{ url('contact')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label name="email">Емаил:</label>
                        <input id="email" name="email" class="form-control input-lg" placeholder="Ваша контакт маил адреса">
                    </div>

                    <div class="form-group">
                        <label name="subject">Наслов:</label>
                        <input id="subject" name="subject" class="form-control input-lg" placeholder="Наслов на порака">
                    </div>

                    <div class="form-group">
                        <label name="message">Порака:</label>
                        <textarea id="message" name="message" class="form-control" rows="6" placeholder="Порака..."></textarea>
                    </div>

                    <input type="submit" value="Испрати порака" class="btn btn-success btn-block" style="margin-top: 40px;">
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