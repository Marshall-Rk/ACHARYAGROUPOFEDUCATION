
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Acharya Group of Education</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />


    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    			<a class="navbar-brand" href="index.php"><h5 style="font-weight: bold;"> ACHARYA GROUP OF EDUCATION</h5></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>acharyaeducation@gmail.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Call Us +91 8369830324</span>
						    	<span>Call Us: +91 9175033190</span>
							
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0 d-block">
					    		<a href="contact.php" target="_blank"class="btn py-2 px-3 btn-primary">
					    			<span>Free Consulting</span>
					    		</a>
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	 
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="#about" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="#courses" class="nav-link">Courses</a></li>
	        	<li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Gallery</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	<?php 
   
    
   if(isset($_SESSION['status']))
   {
	   ?>
	   <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey Dear!</strong> <?= $_SESSION['status']; ?> will contact you soon.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	   <?php 
		unset($_SESSION['status']);
   }

?>
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_11.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<span class="subheading">Welcome</span>
            <h1 class="mb-4">We Are The Best Education Institute</h1>
			<p><a href="tel:9175033190"  class="btn btn-primary px-4 py-3 mt-3">Call us</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/vadim-sherbakov-d6ebY-faOO0-unsplash.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<span class="subheading">Todays Talent, Tommorow Success</span>
            <h1 class="mb-4">We Help to Grow Your Education</h1>
            <p><a href="tel:9175033190" class="btn btn-primary px-4 py-3 mt-3">Call us</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>

		<section class="ftco-section" id="about">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about align-items-stretch">
						<div class="wrap-about-border ftco-animate">
							<div class="img" style="background-image: url(images/logobg.jpg);"></div>
							<div class="text">
								<h3 style="text-decoration: underline;">							

									Acharya Group of Education - Since 2017</h3>
									<span class="text-dark " style=" text-transform: uppercase; text-decoration: underline;font-weight: bold;">#4YearsOfAcharya</span><br>
								<p>The Sanskrit word "Acharya", which means "TEACHER", epitomizes the quintessential values of our institution.
									Established under Acharya Group of Education 4 years ago, we at Acharya Education,  are proud to be the choice of students from around the world. We are the largest composite academic facility, with over 400+ students.<br>

									<span class="text-dark " style=" text-transform: uppercase; text-decoration: underline;font-weight: bold;">Our Motto</span><br>

                              "Nurturing Aspirations Supporting Growth"<br>



							  <span class="text-dark " style=" text-transform: uppercase; text-decoration: underline;font-weight: bold;">Our Vision</span><br>

                              "Acharya Education, Committed to the cause of value-based education in all disciplines, envisions itself as a fountainhead of innovative human enterprise, with inspirational initiatives for Academic Excellence"<br>


								</p>
								<p><a href="contact.php" class="btn btn-primary py-3 px-4">Contact us</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-7 wrap-about pr-md-4 ftco-animate">
          	<h2 class="mb-4">Our Main Features</h2>
						<p>From aspiration to achievement – your career partner at every step of the way. <br>Acharya Academy is the all in Solution for your College Admission, Courses, Mentoring and Entrance exam Preparation. </p>
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services active text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-collaboration"></span></div>
									<div class="text media-body">
										<h3>Admission</h3>
			<p>Acharya Education, a forefront academic institution , offers vast choice of academic streams and various levels of programs from freshman foundation [Pre-University] to doctoral degrees.</p>
									</div>
								</div>
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
									<div class="text media-body">
										<h3>Courses</h3>
										<p>There are courses in a wide variety of subjects, from Engineering to Diploma and what not, Nursing and Pharmacy studies to law and regulations, biology to fashion. The variety of different courses can be overwhelming.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
									<div class="text media-body">
										<h3>Mentoring/Placements</h3>
										<p>Our Placement Cell monitors the employment opportunities and arranges campus recruitment process interviews for the final year students and provides internship opportunities.</p>
									</div>
								</div>
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-handshake"></span></div>
									<div class="text media-body">
										<h3>Enterance Exams </h3>
										<p>Acharya Education provides the All over Enterance Exams Preparation for wide ranges of field, which includes CAT, JEE, CET and many more. Get in touch for the best Experience for your Enterance Exams with Industry Experts.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/5e7846d79d118_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">We are one of the most trusted institutions for a reason.</h2>
          </div>
        </div>	
    	</div>
    </section>

		<section class="ftco-counter" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="wrapper">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="400">0</strong>
		                <span>Admission Completed</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="320">0</strong>
		                <span>Students Placed</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="35">0</strong>
		                <span>Colleges Partnered</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="4">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>


	<section class="ftco-section bg-light" id="courses">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
	  <div class="col-md-8 text-center heading-section ftco-animate">
		<h2 class="mb-4"><span>Courses</span></h2>
		<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
	  </div>
	</div>
			<div class="row">
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="sscinfo.html" target="_blank" class="block-20 d-flex align-items-end" style="background-image: url('course/ssc.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="#">10th SSC & 12th HSC</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ English</li>
                <li>✅ Hindi</li>
                <li>✅ marathi</li>  
				<a href="sscinfo.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Info</a><br>             
              </ul>

			  

			<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a></a>
		
		  </div>
		</div>
	  </div>

	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="computercourse.html" target="_blank" class="block-20 d-flex align-items-end" style="background-image: url('course/computercourse.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="#">Computer Course</a></h3>
			<ul class="list-unstyled ul-check success">
				<li>✅MS-Office(Basic)</li> 
				<li>✅Adv. Tally + GST</li> 
				<li>✅Web Programing</li> </li> 
				<a href="computercourse.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>      	   
                          
              </ul>
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>

	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="graduation.html" target="_blank" class="block-20 d-flex align-items-end" style="background-image: url('course/graducation.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="#">Graduation - UG , PG</a></h3>
			<ul class="list-unstyled ul-check success">
				<li>✅B.Com</li> 
				<li>✅BBI/BFM/BAF</li> 
				<li>✅BBA/MBA</li> </li> 
				<a href="graduation.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>      	   
                          
              </ul>
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="engineering.html" target="_blank" class="block-20 d-flex align-items-end" style="background-image: url('course/thisisengineering-raeng-uOhBxB23Wao-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="#">Engineering - B.E</a></h3>
			<ul class="list-unstyled ul-check success">
				<li>✅Aeronautical Engineering</li> 
				<li>✅Artificial Intelligence</li> 
				<li>✅Automobile Engineering</li> </li> 
				<a href="engineering.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>      	   
                          
              </ul>
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="engineeringmtech.html" target="_blank" class="block-20 d-flex align-items-end" style="background-image: url('course/thisisengineering-raeng-zhXR20LFowA-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="#">Engineering - M.Tech</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ Bio Technology</li>
                <li>✅ Computer Science & Engineering</li>
                <li>✅ Digital Communication Engineering</li>  
				<a href="engineeringmtech.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>             
              </ul>
		
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="research.html" target="_blank"class="block-20 d-flex align-items-end" style="background-image: url('course/scott-graham-5fNmWej4tAA-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="#">Research - Ph.D</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ Computer Science & Engineering</li>
                <li>✅ Master of Business Administration</li>
                <li>✅ Electrical & Electronics Engineering</li>  
				<a href="research.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>             
              </ul>
		
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="diploma_in_Engineering.html" target="_blank"class="block-20 d-flex align-items-end" style="background-image: url('course/ricardo-gomez-angel-sYK-jN0sKBY-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="#">Diploma in Engineering</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ Aeronautical Engineering</li>
                <li>✅ Automobile Engineering</li>
                <li>✅ Civil Engineering</li>  
				<a href="diploma_in_Engineering.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>             
              </ul>
		
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="nursing.html" target="_blank"class="block-20 d-flex align-items-end" style="background-image: url('course/jeshoots-com-l0j0DHVWcIE-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="#">Nursing</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ Diploma in Nursing</li>
                <li>✅ B.Sc-Nursing</li>
                <li>✅ M.Sc-Nursing</li>  
				<a href="nursing.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>             
              </ul>
		
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="pharmacy.html" target="_blank"class="block-20 d-flex align-items-end" style="background-image: url('course/roberto-sorin-RS0-h_pyByk-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="#">Pharmacy</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ D.Pharm-Diploma in Pharmacy</li>
                <li>✅ B.Pharm-Diploma in Pharmacy</li>
                <li>✅ Pharm D-Doctor of Pharmacy</li>  
				<a href="pharmacy.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>             
              </ul>
		
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="management.html" target="_blank" class="block-20 d-flex align-items-end" style="background-image: url('course/alvaro-reyes-qWwpHwip31M-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="management.html" target="_blank">Management</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ B.B.A - Bachelor of Business </li>
                <li>✅ P.G.D.M. - Post Graduate Diploma </li>
                <li>✅ M.F.A - Master of Finance </li>  
				<a href="management.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>             
              </ul>
		
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="health_sciences.html" target="_blank"class="block-20 d-flex align-items-end" style="background-image: url('course/louis-reed-pwcKF7L4-no-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="health_sciences.html" target="_blank">Allied Health Sciences</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ B.Sc Anesthesia and Operation Theatre </li>
                <li>✅ BSc in Respiratory Care Technology</li>
                <li>✅ BSc in Renal Dialysis Technology</li>  
				<a href="health_sciences.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>             
              </ul>
		
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="architecture.html" target="_blank" class="block-20 d-flex align-items-end" style="background-image: url('course/thisisengineering-raeng-df7erzy97sg-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="architecture.html" target="_blank" >Architecture</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ Diploma in Architecture</li>
                <li>✅ Bachelor of Architecture</li>
				<li>✅ BArch (Bachelor of Architecture) | PhD Architecture</li>
				<a href="architecture.html" target="_blank" ><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>             
              </ul>
		
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="Arts,_Science&Commerce.html" target="_blank" class="block-20 d-flex align-items-end" style="background-image: url('course/hans-reniers-lQGJCMY5qcM-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="Arts,_Science&Commerce.html" target="_blank">Arts, Science & Commerce</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ B. A - Bachelor of Arts (Psychology / Journalism / English)</li>
                <li>✅ B. Com. - Bachelor of Commercey</li>
                <li>✅  M. Sc. - Master of Science</li>  
				<a href="Arts,_Science&Commerce.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>             
              </ul>
		
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>

	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="visual_arts.html" target="_blank"><span class="block-20 d-flex align-items-end" style="background-image: url('course/kumpan-electric-SYo5eazBrls-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="visual_arts.html" target="_blank"><span>Visual Arts</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ B.V.A. - Graphic & Communication Design</li>
                <li>✅ B.V.A. - Animation & Game Art</li>
                <li>✅ B.V.A. - Product Design</li>  
				<a href="visual_arts.html" target="_blank"><span><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>             
              </ul>
		
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="fashion.html" target="_blank"class="block-20 d-flex align-items-end" style="background-image: url('course/roberto-martinez-WBgPMst9toY-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="fashion.html" target="_blank">Fashion</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ Diploma in Apparel Design </li>
                <li>✅ Bachelor of Science (Fashion & Apparel Design)</li>
                <li>✅ Fabrication Technology</li>  
				<a href="fashion.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>             
              </ul>
		
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="computer_application.html" target="_blank" class="block-20 d-flex align-items-end" style="background-image: url('course/ilya-pavlov-OqtafYT5kTw-unsplash.jpg');">
							
		  </a>
		  <div class="text bg-white p-4">
			<h3 class="heading"><a href="computer_application.html" target="_blank">Computer Application</a></h3>
			<ul class="list-unstyled ul-check success">
                <li>✅ B. C. A - Bachelor of Computer Applications</li>
                <li>✅ M. C. A - Master of Computer Applications</li>
          
				<a href="computer_application.html" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>More Courses</a><br>             
              </ul>
		
				<a href="#demoform"><button class="btn btn-primary">Free Demo</button></a>
		
		  </div>
		</div>
	  </div>







	</div>
		</div>
		
	</section>

    <section class="ftco-section" id="services">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Best Services</h2>
            <p>The first step towards success is to learn from the best. Learn, practise, and evolve under the mentorship of industry experts at Acharya.</p>
          </div>
        </div>
				<div class="row no-gutters">
					<div class="col-lg-4 d-flex">
						<div class="services-2 noborder-left text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
							<div class="text media-body">
								<h3>Student Admission</h3>
							
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-business"></span></div>
							<div class="text media-body">
								<h3>Placement</h3>
							
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-insurance"></span></div>
							<div class="text media-body">
								<h3>UG|PG Courses</h3>
							
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-money"></span></div>
							<div class="text media-body">
								<h3>Mentoring</h3>
							
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center noborder-bottom ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-rating"></span></div>
							<div class="text media-body">
								<h3>Collaborations</h3>
							
							</div>
						</div>
					</div>
					<div class="col-lg-4 d-flex">
						<div class="services-2 text-center noborder-bottom ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
							<div class="text media-body">
								<h3>24 X 7 Support</h3>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">You Always Get the Best Guidance</h2>
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="contact.php" class="btn btn-white py-3 px-4">Request Call back</a></p>
          </div>
        </div>	
    	</div>
    </section>
	<button onclick="topFunction()" id="myBtn" title="Go to top">↑</button>
	

	<script>
		//Get the button
		var mybutton = document.getElementById("myBtn");
		
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};
		
		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}		
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
		</script>

	<div class="site-section cta-big-image" id="about-section">
		<div class="container">
		  <div class="row mb-5">
			<div class="col-12 text-center" data-aos="fade">
			 
			</div>
		  </div>
		  <div class="row">
			<div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
			  
			  <img src="images/vadim-sherbakov-d6ebY-faOO0-unsplash.jpg" alt="Image" class="img-fluid">
			  </figure>
			</div>
			<div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
			  <div class="mb-4" >
				<h3 class="h3 mb-4 text-black" >Colleges/Universities We've Partnered with (25+)</h3>			
				
			  </div>
			  
			  
				
			  <div class="mb-4">
				<ul  class="list-unstyled ul-check success">
				  <li>• Shubhash Pharmacy College</li>
				  <li>• Patel Nursing & Pharmacy</li>
				  <li>• Gauthama Siddartha Pharmacy College</li>
				  <li>• Gautham Group of Institution</li>
				  <li>• Priyadarshan College of Pharmacy</li>
				  <li>• Raja Rajeshwari Medical & Engineering College</li>				
				  <li>• St. Joh's College of Pharmacy</li>	

				  <p><a href="allcolleges.html" target="_blank" style="border-radius: 0px;" class="btn btn-warning mr-2 mt-3 mb-2">→ View More</a></p>
				
				</ul>
				
			  </div>
  
			  
			</div>
		  </div>
		</div>  
	  </div>


		


    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/vadim-sherbakov-d6ebY-faOO0-unsplash.jpg);" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5">
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4" id="demoform">Request A Free Demo</h2>
		         		          </div>


		          <form action="submit.php" method="post" class="appointment-form ftco-animate">
		    				<div class="d-md-flex">
			    				<div class="form-group">
			    					<input type="text"  name="f_name" class="form-control" placeholder="Name" required>
			    				</div>
			    				<div class="form-group ml-md-4">
			    					<input type="text"  name="email" class="form-control" placeholder="Email" required>
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			    					<div class="form-field">
		        					<div class="select-wrap">
										<input type="text" name="education" class="form-control" placeholder="Highest Qualification" required>
		                  </div>
			              </div>
			    				</div>
		    					<div class="form-group ml-md-4">
			    					<input type="text"  name="phone" class="form-control" placeholder="Phone" required>

									<input type="hidden" value="<?php echo rand(00000000,9999999999);?>" name="token" class="form-control" placeholder="Phone" required>

			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			              <textarea name="address" id="" cols="30" rows="2" class="form-control" placeholder="Address"></textarea>
			            </div>
			            <div class="form-group ml-md-4">
			              <input type="submit"  id="btn"  value="Request A Free Demo" class="btn btn-white py-3 px-4">
			            </div>
		    				</div>						
		    			</form>
		    		</div>			
    			</div>
        </div>
    	</div>
    </section>

		

		<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-3">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Students Says</h2>           
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_4.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3762.83825339264!2d72.81918876417437!3d19.419393346136566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sroom%2018%20first%20floor%20Akansha%20Tower%20opposite%20Bappa%20Sitaram%20shopping%20mall%20NSP%20East!5e0!3m2!1sen!2sin!4v1639122965325!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Office no. 18 first floor Akansha Tower opposite Bappa Sitaram shopping mall Nallasopara East</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9175033190<br>+91 8369830324</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">acharyaeducation@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Why Acharya?</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Acharya Education Helps Students to get their dream College</a></h3>
                
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Acharya Helps Students to get Placed at their dream Company</a></h3>
                  
                </div>
              </div>
            </div>
          </div>
		  
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
				  
                <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#about"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#courses"><span class="ion-ios-arrow-round-forward mr-2"></span>Courses</a></li>
                <li><a href="#services"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>

              <form action="newsletter.php" method="post" class="subscribe-form">
                <div class="form-group">
                  <input type="text"  name="email" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" name="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>

            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Acharya Group of Education</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
