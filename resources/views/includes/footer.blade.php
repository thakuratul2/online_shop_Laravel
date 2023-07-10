<footer class="bg-dark mt-5">
	<div class="container pb-5 pt-3">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-card">
					<h3>Get In Touch</h3>
					
					pratapsinghatul111@gmail.com <br>
					+91 8192002404</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="footer-card">
					<h3>Important Links</h3>
					<ul>
						<li><a href="{{route('about.page')}}" title="About">About</a></li>
						<li><a href="{{route('contact.page')}}" title="Contact Us">Contact Us</a></li>						
						<li><a href="#" title="Privacy">Privacy</a></li>
						<li><a href="#" title="Privacy">Terms & Conditions</a></li>
						<li><a href="#" title="Privacy">Refund Policy</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-4">
				<div class="footer-card">
					<h3>My Account</h3>
					<ul>
						<li><a href="#" title="Sell">Login</a></li>
						<li><a href="#" title="Advertise">Register</a></li>
						<li><a href="#" title="Contact Us">My Orders</a></li>						
					</ul>
				</div>
			</div>			
		</div>
	</div>
	<div class="copyright-area">
		<div class="container">
			<div class="row">
				<div class="col-12 mt-3">
					<div class="copy-right text-center">
						<p>© Copyright 2023 Developed by Atul Pratap Singh. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="{{asset('frontend-asset/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend-asset/js/bootstrap.bundle.5.1.3.min.js')}}"></script>
<script src="{{asset('frontend-asset/js/instantpages.5.1.0.min.js')}}"></script>
<script src="{{asset('frontend-asset/js/lazyload.17.6.0.min.js')}}"></script>
<script src="{{asset('frontend-asset/js/slick.min.js')}}"></script>
<script src="{{asset('frontend-asset/js/custom.js')}}"></script>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>