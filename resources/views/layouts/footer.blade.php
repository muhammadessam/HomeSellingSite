<footer class="footer-section set-bg" data-setbg="{{asset('img/footer-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-widget">
                <img src="{{asset('img/logo.png')}}" alt="">
                <p>Lorem ipsum dolo sit azmet, consecter dipise consult elit. Maecenas mamus antesme non anean a dolor
                    sample tempor nuncest erat.</p>
                <div class="social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-widget">
                <div class="contact-widget">
                    <h5 class="fw-title">CONTACT US</h5>
                    <p><i class="fa fa-map-marker"></i>3711-2880 Nulla St, Mankato, Mississippi </p>
                    <p><i class="fa fa-phone"></i>(+88) 666 121 4321</p>
                    <p><i class="fa fa-envelope"></i>info.leramiz@colorlib.com</p>
                    <p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-widget">
                <div class="double-menu-widget">
                    <h5 class="fw-title">POPULAR PLACES</h5>
                    <ul>
                        <li><a href="">Florida</a></li>
                        <li><a href="">New York</a></li>
                        <li><a href="">Washington</a></li>
                        <li><a href="">Los Angeles</a></li>
                        <li><a href="">Chicago</a></li>
                    </ul>
                    <ul>
                        <li><a href="">St Louis</a></li>
                        <li><a href="">Jacksonville</a></li>
                        <li><a href="">San Jose</a></li>
                        <li><a href="">San Diego</a></li>
                        <li><a href="">Houston</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  footer-widget">
                <div class="newslatter-widget">
                    <h5 class="fw-title">NEWSLETTER</h5>
                    <p>Subscribe your email to get the latest news and new offer also discount</p>
                    <form class="footer-newslatter-form">
                        <input type="text" placeholder="Email address">
                        <button><i class="fa fa-send"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/dropzone.js')}}"></script>


<!-- Stylesheets -->
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@if(session('projectCreated'))
    <script>
        swal.mixin(
            {
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000
            }
        ).fire({
            type: 'success',
            title: 'Project Created Successfully '
        });
    </script>

@endif
