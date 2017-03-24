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
<!-- HEADER -->
@include('partials._navbar')
        <!-- /HEADER -->
@yield('content')
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