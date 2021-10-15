<?php include_once("helper/header.php");?>  
  <header>
	<h1>Book Me!</h1>
  </header>
  <?php include_once("helper/navigation.php"); ?>
		<div class="col-9">
			<div class="text-center profile-card" style="margin:15px;background-color:#ffffff;">
				<div class="profile-card-img" style="background-image: url(&quot;iceland.jpg&quot;);height: 150px;background-size: cover;"></div>
						<?php include_once("helper/user_to_book_desc.php"); ?>
				<div class="row" style="padding: 0;padding-bottom: 10px;padding-top: 20px;color: rgb(74,103,116);">
					<div class="col-md-6">
						<p class="text-nowrap text-right" style="color: rgb(74,103,116);">Requests Sent</p>
						<p class="text-right" style="color: rgb(77,112,128);"><strong>12M</strong> </p>
					</div>
					<div class="col-md-6">
						<p class="text-left" style="color: rgb(74,103,116);">Request Received</p>
						<p class="text-left" style="color: rgb(77,112,128);"><strong>1M</strong> </p>
					</div>
				</div>
			</div>
			<div class="row" style="margin-right: 0px;margin-left: 0px;">
				<div class="col">
					<form class="register-form" method="POST" action="BookValidation.php">
						<fieldset>
							<div class="form-row">
							<div class="col-12 col-sm-6 col-md-12">
									<div id="lp-mail-wrapper">
										<input class="form-control" type="hidden" id="lp-mail" value="<?php if(isset($_GET['user_to_book_id'])){ echo $_GET['user_to_book_id']; }?>" placeholder="" name="user_to_book"></div>
								</div>
								<div class="col-md-12">
									<input class="form-control d-none" type="text" id="lp-formID" value="vr-campus-tours">
									<input class="form-control d-none" type="text" id="lp-pathID" value="<?php echo $_GET['path'];?>">
								</div>
								<div class="col-12 col-sm-6 col-md-12">
									<div id="lp-mail-wrapper">
										<input class="form-control" type="text" id="lp-mail" placeholder="Agenda" name="topic"></div>
								</div>
								<div class="col-12 col-sm-6 col-md-12">
									<div id="lp-mail-wrapper">
										<input class="form-control" type="text" id="lp-mail" placeholder="Description" name="description"></div>
								</div>
								<div class="col-12 col-sm-6 col-md-12">
									<div id="lp-mail-wrapper">
										<input class="form-control" type="text" id="lp-mail" placeholder="venue" name="venue"></div>
								</div>
								<div class="col-12 col-sm-6 col-md-12">
									<div id="lp-mail-wrapper">
										<input class="form-control" type="text" id="lp-mail" placeholder="dateProposed" name="date"></div>
								</div>
								<div class="col-12 col-sm-6 col-md-12" style="margin-bottom: 20px;">
									<div id="lp-mail-wrapper"><input class="form-control" type="text" id="lp-mail" placeholder="timeProposed" name="time"></div>
									<button class="btn btn-primary" name="book_now" type="submit" style="width: 100%;background-color: rgb(37,67,81);"><i class="fa fa-handshake-o"></i>&nbsp;Book now</button>
								</div>
								<div
									class="col-12 col-sm-6 col-md-12">
									<div id="lp-mail-wrapper"></div>
							</div>
							<div class="col-12 col-sm-6 col-md-12">
								<div id="lp-title-wrapper"></div>
							</div>
				</div>
				</fieldset>
				</form>
			</div>
		
		
		
		
		
		</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
	</div>
	<div class="footer-dark" style="background-color: rgb(74,103,116);">
		<footer>
			<div class="container">
				<div class="row">
					<div class="col">
						<h3>Beme</h3>
						<p>planning is very important for successful life. Once you plan you reduce unnecessary disturbance and un expected results of people that you book. One will remember the time and day that you should meet. Everytime you book someone
							you have set 60% assurance of meeting that person, Once the person commfirm the appointment you have 90% in advance of meeting the person.</p>
					</div>
					<div class="col-sm-6 col-md-3 item">
						<h3>About us</h3>
						<ul>
							<li><a href="#">Web design</a></li>
							<li><a href="#">Development</a></li>
							<li><a href="#">Hosting</a></li>
						</ul>
					</div>
				</div>
				<p class="copyright">Beme © 2019</p>
			</div>
		</footer>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/login-full-page-bs4.js"></script>
	<script src="assets/js/login-full-page-bs4-1.js"></script>
	<script src="assets/js/Animated-Type-Heading.js"></script>
	<script src="assets/js/imagepreview.js"></script>
	<script src="assets/js/Table-With-Search.js"></script>
	<script src="assets/js/testimonialSlider.js"></script>
</body>

</html>