<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('front.layout.header')

<body id="page-top">
<div class="site">
@include('front.layout.menu')


@yield('main-content')

@include('front.layout.footer')

@yield('others')
</div>

<!-- Bootstrap core JavaScript -->
@include('front.layout.script')

@yield ('script')
</body>

</html>
