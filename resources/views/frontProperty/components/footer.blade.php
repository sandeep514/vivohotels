<footer class="section footer-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-3 mb-5">
                <ul class="list-unstyled link">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Rooms</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <ul class="list-unstyled link">
                    <li><a href="#">Our Location</a></li>
                    <li><a href="#">The Rooms &amp; Suites</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Restaurant</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5 pr-md-5 contact-info">
                <p>
                    <span class="d-block">
                    <span class="ion-ios-location h5 mr-3 text-primary">
                    </span>Address:</span>
                    <span> {{ $propertyDetail->address }}</span>
                </p>
                <p>
                    <span class="d-block">
                    <span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> {{ $propertyDetail->mobile }} </span></p>
                <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> {{ $propertyDetail->email }}</span></p>
            </div>
            <div class="col-md-3 mb-5">
                <p>Sign up for our newsletter</p>
                <form action="#" class="footer-newsletter">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your email...">
                        <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
                    </div>
                </form>
            </div>
        </div>
       {{--  <div class="row bordertop pt-5">
            <p class="col-md-6 text-left">
                Copyright &copy;
                <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                    document.write(new Date().getFullYear());</script> 
                    All rights reserved | This template is made with 
                    <i class="ion-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>            
            </p>
            
            <p class="col-md-6 text-right social">
                <a href="#"><span class="fa fa-tripadvisor"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
            </p>
        </div> --}}
    </div>
</footer>