<?PHP
include_once("header.php");
$frm_name="login";
include_once("menu.php");
?>



	<!-- Subpage title start -->
	<section id="inner-title">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	        	<div class="inner-title-content">
		        	<h2>Login</h2>
		        	<ul class="breadcrumb">
			            <li> <a href="#">Home </a></li>
			            <li><a href="#"> Login</a></li>
		          	</ul>
	          	</div>
	        </div>
	      </div>
	    </div>
	 </section>
	<!-- Subpage title end -->

	<div class="gap-40"></div>


	<!-- Contact page start -->
	<section id="Contact-page">
		<div class="container">
			<div class="row">
				<!-- Contact form start -->
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
					<div class="contact-form">
						<h3>Sign In</h3>
						<div class="form-box" id="login-box">
						<form name="login_form" action="loginsystem.php" method="post">
							<div>
								<div class="form-group">
									<label> Email ID </label>
									<input type="text" name="userid" class="form-control" placeholder="Email ID"/>
								</div>
								<div class="form-group">
									<label> Password </label>
									<input type="password" name="password" class="form-control" placeholder="Password"/>
								</div>          
								<div class="form-group">
									<input type="checkbox" name="remember_me"/> Remember me
								</div>
							</div>
							<div class="footer">                                                               
								<button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
								
								<p><a href="#">I forgot my password</a></p>
								
								<a href="register.php" class="text-center">Register a new membership</a>
							</div>
						</form>
						</div>
					</div><!-- Contact form end -->	
				</div> <!-- Col end -->			
    		</div><!--/ row end -->
		</div><!--/ container end -->
	</section>
	<!-- Faq page end -->

	<div class="gap-40"></div>

<?PHP
include_once("footer.php");
?>

<!-- Javascript Files
	================================================== -->
	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<!-- PrettyPhoto -->
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<!-- Bxslider -->
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="js/wow.min.js"></script>
	<!-- SmoothScroll -->
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<!-- Animated Pie -->
	<script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
	
	<!-- Template custom -->
	<script type="text/javascript" src="js/custom.js"></script>


</body>
</html>