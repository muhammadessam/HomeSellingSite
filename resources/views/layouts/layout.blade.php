@include('layouts.header')
<div class="site-breadcrumb">
    <div class="container">
        <a href=""><i class="fa fa-home"></i>Home</a>
        <span><i class="fa fa-angle-right"></i>Blog Grid</span>
    </div>
</div>
<section class="page-section blog-page">
    <div class="container" id="app">
        @yield('content')
    </div>
</section>
@include('layouts.footer')
</body>
</html>
