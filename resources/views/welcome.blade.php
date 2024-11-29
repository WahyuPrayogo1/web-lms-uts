@extends('Master-Home')
@section('content')
    <!-- Home Banner -->
		<section class="home-two-slide d-flex align-items-center">
			<div class="container">
				<div class="row ">
					<div class="col-lg-8 col-12" data-aos="fade-up">
						<div class="home-slide-face">
							<div class="home-slide-text ">
								<h5>The Leader in Online Learning</h5>
								<h1>Engaging & Accessible Online Courses For All</h1>
							</div>
							<div class="banner-content">
								<form class="form" name="store" id="store" method="post" action="https://dreamslms.dreamstechnologies.com/html/course-list.html">
									<div class="form-inner">
										<div class="input-group">
											<span class="drop-detail">
												<select class="form-control select" name="storeID">
													<option value="0">Select Category</option>
													<option value="1">Category One</option>
													<option value="1">Category Two</option>
												</select>
											</span>
											<input type="email" class="form-control"
												placeholder="Search School, Online eductional centers, etc">
											<button class="btn btn-primary sub-btn" type="submit">Search</button>
										</div>
									</div>
								</form>
							</div>
							<div class="trust-user-two">
								<p>Trusted by over 15K Users worldwide since 2024</p>
								<div class="rating-two">
									<span>4.4</span>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Shapes -->
				<div class="shapes">
					<img class="shapes-one" src="assets/img/bg/home-right.png" alt="Img">
					<img class="shapes-two" src="assets/img/bg/home-right-bottom.png" alt="Img">
					<img class="shapes-middle" src="assets/img/bg/home-middle.png" alt="Img">
					<img class="shapes-four wow animate__animated animate__slideInLeft"
						src="assets/img/bg/home-left.png" alt="Img">
				</div>
				<!-- /Shapes -->
			</div>
		</section>
		<!-- /Home Banner -->

		<!-- About Section -->
		<section class="about-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft order-lg-1 order-xs-2 order-sm-2" data-aos="fade-up">
						<div class="header-two-title">
							<p class="tagline">Learn with DreamLMS</p>
							<h2 class="mb-0">Get Trained By Experts & Professionals around the World</h2>
						</div>
						<div class="header-two-title">
							<p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
								fermentum massa viverra congue proin. A volutpat eget ultrices velit nunc orci. Commodo
								quis integer a felis ac vel mauris a morbi. Scelerisque nunc accumsan elementum aenean
								nisl lacinia. Congue enim aliquet ac vitae turpis. Neque, bibendum imperdiet sed
								ullamcorper morbi amet. Facilisi odio amet, nunc quam ut nulla purus adipiscing
								pharetra.</p>
							<div class="about-button more-details">
								<a href="course-list.html" class="discover-btn">Learn more <i
										class="fas fa-arrow-right ms-2"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 order-lg-2 order-xs-1 order-sm-1">
						<div class="stylist-gallery">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-down">
									<div
										class="about-image count-one d-flex align-items-center justify-content-center flex-fill project-details">
										<div class="about-count">
											<div class="course-img">
												<img src="assets/img/icon/count-one.svg" alt="Img">
											</div>
											<div class="count-content-three course-count ms-0">
												<h4><span class="counterUp">10</span>K</h4>
												<p class="mb-0">Online Courses</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-down">
									<div
										class="about-image count-two d-flex align-items-center justify-content-center flex-fill project-details">
										<div class="about-count">
											<div class="course-img">
												<img src="assets/img/icon/count-two.svg" alt="Img">
											</div>
											<div class="count-content-three course-count ms-0">
												<h4><span class="counterUp">215</span>+</h4>
												<p class="mb-0">Expert Tutors</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-right"
									data-wow-delay="1.5">
									<div
										class="about-image count-three d-flex align-items-center justify-content-center flex-fill project-details">
										<div class="about-count">
											<div class="course-img">
												<img src="assets/img/icon/count-three.svg" alt="Img">
											</div>
											<div class="count-content-three course-count ms-0">
												<h4><span class="counterUp">10</span>K</h4>
												<p class="mb-0">Ceritified Courses</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-left"
									data-wow-delay="0.5">
									<div
										class="about-image count-four d-flex align-items-center justify-content-center flex-fill project-details">
										<div class="about-count">
											<div class="course-img">
												<img src="assets/img/icon/count-four.svg" alt="Img">
											</div>
											<div class="count-content-three course-count ms-0">
												<h4><span class="counterUp">10</span>K</h4>
												<p class="mb-0">Online Students</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /About us -->


		<!-- Latest Blog -->
		<section class="latest-blog-sec">
			<div class="container">
				<div class="header-two-title text-center" data-aos="fade-up">
					<p class="tagline">Newsawds</p>
					<h2>Our Latest Updates</h2>
					<div class="header-two-text text-center aos" data-aos="fade-up">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum
							gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
					</div>
				</div>
				<div class="award-winning-two">
					<div class="row justify-content-center">
						<div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-down">
							<div class="event-blog-main">
								<div class="latest-blog-img">
									<a href="blog-list.html">
										<img class="img-fluid" alt="Img" src="assets/img/blog/blog-01.jpg">
									</a>
								</div>
								<div class="latest-blog-content">
									<div class="event-content-title">
										<div class="event-span">
											<span class="span-name">Marketing</span>
										</div>
										<h5><a href="blog-list.html">Lorem ipsum dolor sit amet, consectetur adipiscing
												elit.</a></h5>
										<div class="blog-student-count">
											<i class="fa-solid fa-calendar-days"></i>
											<span>Jun 15, 2024</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-down">
							<div class="event-blog-main">
								<div class="latest-blog-img">
									<a href="blog-list.html">
										<img class="img-fluid" alt="Img" src="assets/img/blog/blog-02.jpg">
									</a>
								</div>
								<div class="latest-blog-content">
									<div class="event-content-title">
										<div class="event-span">
											<span class="span-name">Sales</span>
										</div>
										<h5><a href="blog-list.html">Lorem ipsum dolor sit amet, consectetur adipiscing
												elit.</a></h5>
										<div class="blog-student-count">
											<i class="fa-solid fa-calendar-days"></i>
											<span>Jun 15, 2024</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-down">
							<div class="event-blog-main">
								<div class="latest-blog-img">
									<a href="blog-list.html">
										<img class="img-fluid" alt="Img" src="assets/img/blog/blog-03.jpg">
									</a>
								</div>
								<div class="latest-blog-content">
									<div class="event-content-title">
										<div class="event-span">
											<span class="span-name">Marketing</span>
										</div>
										<h5><a href="blog-list.html">Lorem ipsum dolor sit amet, consectetur adipiscing
												elit.</a></h5>
										<div class="blog-student-count">
											<i class="fa-solid fa-calendar-days"></i>
											<span>Jun 15, 2024</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- View all  Events -->
				<div class="col-lg-12">
					<div class="more-details text-center" data-aos="fade-down">
						<a href="blog-grid.html" class="discover-btn">View all Events<i
								class="fas fa-arrow-right ms-2"></i></a>
					</div>
				</div>
				<!-- /View all  Events -->
			</div>
		</section>
		<!-- /Latest Blog -->
@endsection
