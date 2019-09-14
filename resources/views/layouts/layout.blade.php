@include('layouts.header')
<div class="site-breadcrumb">
    <div class="container">
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
