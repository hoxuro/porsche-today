				<!-- HEADER 1 BLACK NO-TRANSPARENT -->
				<header id="nav" class="header header-1 black-header no-transparent mobile-no-transparent">

					<div class="header-wrapper grey-dark-bg">
						<div class="container-m-30 clearfix">
							<div class="logo-row">

								<!-- LOGO -->
								<div class="logo-container-2">
									<div class="logo-2">
										<a href="<?php echo get_option('home') ?>" class="clearfix">
											<img src="<?php echo bloginfo('template_directory') ?>/assets/images/logo-text-white.png" class="logo-img" alt="Logo">
										</a>
									</div>
								</div>
								<!-- BUTTON -->
								<div class="menu-btn-respons-container">
									<button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
										<span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
									</button>
								</div>
							</div>
						</div>

						<!-- MAIN MENU CONTAINER -->
						<div class="main-menu-container">

							<div class="container-m-30 clearfix">

								<!-- MAIN MENU -->
								<div id="main-menu">
									<div class="navbar navbar-default" role="navigation">

										<!-- MAIN MENU LIST -->
										<nav class="collapse collapsing navbar-collapse right-1024">
											<ul class="nav navbar-nav">

												<!-- MENU ITEM -->
												<li>
													<a href="<?php echo get_option('home') ?>">
														<div class="main-menu-title">HOME</div>
													</a>
												</li>

												<!-- MENU ITEM -->
												<li>
													<a href="<?php echo home_url(); ?>#section-about">
														<div class="main-menu-title">ABOUT</div>
													</a>
												</li>

												<!-- MEGA MENU ITEM -->
												<li>
													<a href="<?php echo get_page_link(get_page_by_title("BLOG")->ID); ?>">
														<div class="main-menu-title">BLOG</div>
													</a>

												</li>

												<!-- MENU ITEM -->
												<li>
													<a href="<?php echo home_url(); ?>#section-work">
														<div class="main-menu-title">WORK</div>
													</a>
												</li>

												<!-- MENU ITEM -->
												<li>
													<a href="<?php echo get_page_link(get_page_by_title("REVIEWS")->ID); ?>">
														<div class="main-menu-title">REVIEWS</div>
													</a>
												</li>

												<!-- MENU ITEM -->
												<li>
													<a href="<?php echo get_page_link(get_page_by_title("ARCHIVES")->ID); ?>">
														<div class="main-menu-title">ARCHIVES</div>
													</a>
												</li>

												<!-- MEGA MENU ITEM -->
												<li>
													<a href="<?php echo get_page_link(get_page_by_title("Contact")->ID); ?>">
														<div class="main-menu-title">CONTACT</div>
													</a>
												</li>

												<!-- MENU ITEM -->
												<li>
													<a href="<?php echo get_page_link(get_page_by_title("PRIVATE")->ID); ?>">
														<div class="main-menu-title">LOGIN</div>
													</a>
												</li>


											</ul>

										</nav>

									</div>
								</div>
								<!-- END main-menu -->

							</div>
							<!-- END container-m-30 -->

						</div>
						<!-- END main-menu-container -->


					</div>
					<!-- END header-wrapper -->

				</header>