<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URl::asset('css/media.css')}}">
    <title>playground</title>
</head>
<body>
    <!-- start navbar -->
    <div class="nav">
        <div class="container">
            <div class="con-nav">
                <div class="menu"><i class="fas fa-bars"></i></div>
                <div class="con-links">
                    <ul>
                        <li><a href="#home" class="act">Home</a></li>
                        <li><a href="products.php">products</a></li>
                        <li><a href="sports_center.html">Sport Centers</a></li>
                        <li class="about"><a >About</a>
                            <div class="con-drop">
                                <ul>
                                    <li><a href="#about_us">About Us</a></li>
                                    <li><a href="terms.html">Terms</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="con-button">
                    <button>Log In</button>
                    <button>Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <!-- start section carousel -->
    <div class="section-one"id="home">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active height-img">
                <img src="front/img/super3.jpg" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption  d-md-block">
                <h2>buy  Products</h2>
                <p>Find A product you want to buy.</p>
                <button><a href="playgrounds.html">View Playgrounds</a></button>
                </div>
            </div>
            <div class="carousel-item height-img">
                <img src="front/img/super1.jpg" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <h2>Read About Us</h2>
                    <p>Know more about our company.</p>
                    <button><a href="#about_us">About Us</a></button>
                </div>
            </div>
            <div class="carousel-item height-img">
                <img src="front/img/super2.jpg " class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <h2>Contact Us</h2>
                    <p>We work 24/7 for you !</p>
                    <button><a href="contact.html">Contact Us</a></button>
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- start section book a play ground -->
    <div class="section-two"id="playgrounds">
        <div class="container">
            <h2>buy Your Prefered products</h2>
            <div class="row">
            </div>
        </div>
    </div>
    <!-- start section staff -->
    <div class="staff">
        <div class="container">
            <h3 class="first">Our Staff</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <figure data-aos="fade-up"data-aos-delay="100">
                        <div class="con-img"><img src="img/team-1.jpg" alt=""></div>
                        <figcaption>
                            <h3>Captine : Ali Sad</h3>
                            <p>fitness trainer</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6">
                    <figure data-aos="fade-up"data-aos-delay="200">
                        <div class="con-img"><img src="img/testimonial-1.jpg" alt=""></div>
                        <figcaption>
                            <h3>Captine : Amgad Sad</h3>
                            <p>football trainer</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6">
                    <figure data-aos="fade-up"data-aos-delay="300">
                        <div class="con-img"><img src="img/team-3.jpg" alt=""></div>
                        <figcaption>
                            <h3>Captine : Ahmed Amir</h3>
                            <p>basketball trainer</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6">
                    <figure data-aos="fade-up"data-aos-delay="100">
                        <div class="con-img"><img src="img/team-2.jpg" alt=""></div>
                        <figcaption>
                            <h3>Captine : Reem Ali</h3>
                            <p>swimming trainer</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6">
                    <figure data-aos="fade-up"data-aos-delay="200">
                        <div class="con-img"><img src="img/testimonial-4.jpg" alt=""></div>
                        <figcaption>
                            <h3>Captine : Hassan Nabil</h3>
                            <p>Golf trainer</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up"data-aos-delay="300">
                    <figure>
                        <div class="con-img"><img src="img/team-3.jpg" alt=""></div>
                        <figcaption>
                            <h3>Captine : Ali Sad</h3>
                            <p>fitness trainer</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- start reviews -->
    <div class="reviews">
        <div class="container">
            <h3>Reviews</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="con-all" data-aos="fade-up"data-aos-delay="100">
                        <img src="img/team-3.jpg" alt="">
                        <h4>Ali Nabil</h4>
                        <p>congueeget pharetra arcu iacul malesuada dapngue , phare</p>
                        <div class="stars-reviews">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="con-all" data-aos="fade-up"data-aos-delay="200">
                        <img src="img/testimonial-5.jpg" alt="">
                        <h4>Ali Nabil</h4>
                        <p>congueeget pharetra arcu iacul malesuada dapngue , phare</p>
                        <div class="stars-reviews">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="con-all" data-aos="fade-up"data-aos-delay="300">
                        <img src="img/team-1.jpg" alt="">
                        <h4>Ali Nabil</h4>
                        <p>congueeget pharetra arcu iacul malesuada dapngue , phare</p>
                        <div class="stars-reviews">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start section about us -->
    <div class="section-four" id="about_us">
        <div class="container">
            <h2>About Us</h2>
            <p class="head">Lorem ipsum dolor sit amet Lorem ipsum dolor Rem necessitatibus dolore est nihil ea quidem non quia eum id expedita.</p>
            <div class="dashed"></div>
            <div class="con-p">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit Exercitationem saepe est fugiat expedita illo recusandae incidunt odit laboriosam at illum. Quas repudiandae saepe totam dignissimos doloremque, culpa iure tenetur repellat nemo animi rerum suscipit, quam beatae quis nihil. Minus, tempora?Ipsum rerum eum nemo, enim quasi reiciendis facere illum ad non ipsa, beatae ut, asperiores distinctio? Sint minus possimus unde quae, et hic distinctio dignissimos cumque placeat delectus soluta cupiditate nobis doloribus nisi fugit aliquid. Neque nostrum tempora excepturi qui sapiente totam?</p>
            </div>
        </div>
    </div>
    <!-- start section faq -->
    <div class="section-five">
        <div class="container">
            <h2>FAQ</h2>
            <p class="head">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, temporibus.</p>
            <div class="dashed"></div>
            <div class="row">
                <div class="col-md-6 padding"data-aos="fade-right"data-aos-delay="100">
                    <div class="con-p-h3">
                        <h3>Sample question about your company?</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt nam hic tempore eius illum libero perferendis aut quaerat, asperiores quia nisi eum eaque impedit tempora! At quos labore assumenda atque, repellat officiis corporis fugiat deserunt, quasi quidem laudantium cum sed!</p>
                    </div>
                </div>
                <div class="col-md-6 padding"data-aos="fade-left"data-aos-delay="100">
                    <div class="con-p-h3">
                        <h3>Sample question about your company?</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt nam hic tempore eius illum libero perferendis aut quaerat, asperiores quia nisi eum eaque impedit tempora! At quos labore assumenda atque, repellat officiis corporis fugiat deserunt, quasi quidem laudantium cum sed!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start section contact us -->
    <div class="section-six">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"data-aos="fade-right"data-aos-delay="100">
                    <div class="phone">
                        <i class="fas fa-phone"></i>
                        <div class="con-h3-p">
                            <h3>Call Us</h3>
                            <p>+0219873122</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"data-aos="fade-up"data-aos-delay="100">
                    <div class="location">
                        <i class="fa fa-map-marker-alt"></i>
                        <div class="con-h3-p">
                            <h3>Egypt,Mahala,Sea street Second turn</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"data-aos="fade-left"data-aos-delay="100">
                    <div class="email">
                        <i class="fas fa-envelope"></i>
                        <div class="con-h3-p">
                            <h3>Or Send Us Message</h3>
                            <p>name@example.com</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- full page with navbar -->
    <div class="full-nav">
        <div class="con-nav-full">
            <div class="close">&times;</div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="playgrounds.html">Playgrounds</a></li>
                <li><a href="sports_center.html">Sport Centers</a></li>
                <li class="drop-down-ul"><a >About</a>
                    <div class="con-drop">
                        <ul>
                            <li><a href="#about_us">About us</a></li>
                            <li><a href="terms.html">Terms</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <!-- login  -->
    <div class="full-log">
        <span class="close">&times;</span>
        <form action="validation.php" method="post">
            <div class="con-radios-box">
               <div class="con-radio">
                   <input type="radio"id="r-one" name="choose">
                   <label for="r-one"></label>
                   <label class="l-radio">casher</label>
                </div>
               <div class="con-radio">
                   <input type="radio"id="r-two"  name="choose">
                   <label for="r-two"></label>
                   <label class="l-radio">client</label>
                </div>
               <div class="con-radio">
                   <input type="radio"id="r-three"  name="choose">
                   <label for="r-three"></label>
                   <label class="l-radio">Admin</label>
                </div>
            </div>
            <div class="con-icon-input">
               <div class="icon-input"> <i class="fas fa-envelope"></i></div>
                <input type="email" name="email" placeholder="email"/>
            </div>
            <div class="con-icon-input">
                <div class="icon-input"><i class="fas fa-lock"></i></div> 
                <input type="password"  name="password" placeholder="password">
            </div>
            <button name='login'>Log In</button>
        </form>
    </div>
        <!-- sign up  -->
        <div class="full-sign">
            <span class="close">&times;</span>
            <form action="validation.php" method="post">
                <div class="con-radios-box">
                   <div class="con-radio">
                       <input type="radio"id="r-one" name="choose">
                       <label for="r-one"></label>
                       <label class="l-radio">casher</label>
                    </div>
                   <div class="con-radio">
                       <input type="radio"id="r-two"  name="choose">
                       <label for="r-two"></label>
                       <label class="l-radio">client</label>
                    </div>
                   <div class="con-radio">
                       <input type="radio"id="r-three"  name="choose">
                       <label for="r-three"></label>
                       <label class="l-radio">Admin</label>
                    </div>
                </div>
                <div class="con-icon-input">
                   <div class="icon-input"> <i class="fas fa-envelope"></i></div>
                    <input type="email" name="email" placeholder="email"/>
                </div>
                <div class="con-icon-input">
                    <div class="icon-input"><i class="fas fa-lock"></i></div> 
                    <input type="password"  name="password" placeholder="password">
                </div>
                <button name="signup">Sign Up</button>
            </form>
        </div>
    <!-- full loading-->
     <div class="full-loading">
        <div class="loader">
        <lottie-player src="https://assets9.lottiefiles.com/private_files/lf30_yIyBUk.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
        </div>
    </div> 
    <!-- //button-to-top -->
    <div class="to-top"><i class="fa fa-fighter-jet"></i></div>
   
 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{URL::asset('js/index.js')}}"></script>
  <script>
    AOS.init({
		  offset: 120, 
  delay: 0, 
		once: true,
  duration: 700,
	});
  </script>
</body>
</html>