	<body>
		<div class="main-wrapper">
			<div class="banner-area">
				<div class="container">
					<div class="row height justify-content-center align-items-center">
						<div class="col-lg-5">
							<div class="banner-content">
								<h1>Login</h1>
								<p class="text-white">Ayo masuk ke sistem, untuk komunikasi, pemasaran, pelatihan, dan Pengembangan Pangan Di Desa</p>
							</div>
						</div>
						<div class="col-lg-5">
							<form id="myForm" action="<?php echo site_url('login/submit');?>" method="post" class="contact-form text-right">
								<div class="row">
									<div class="col-lg-6">
										<div class="input-group-icon mt-10">
											<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
											<input type="text" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required="" class="single-input">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-group-icon mt-10">
											<div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>
											<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="" class="single-input">
										</div>
									</div>
									<div class="col-lg-12">
										<button class="genric-btn primary circle white-bg d-inline-flex align-items-center mt-10 ml-auto"><span class="mr-10">Login</span><span class="lnr lnr-arrow-right"></span></button> <br>
										<div class="alert-msg"></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Start Contact Area -->
			<section class="subscription-area">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="subscribe-content">
								<h3 class="text-white">Subscribe for our Newsletter</h3>
								<p class="text-white mb-0">We won’t send any kind of spam</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div id="mc_embed_signup">
								<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01" method="get" class="subscription relative">
									<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
									<div style="position: absolute; left: -5000px;">
										<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
									</div>
									<button class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></button>
									<div class="info"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Subscription Area -->
