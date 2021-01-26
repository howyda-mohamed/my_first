<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/media.css')}}">
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
                        <li><a href="playgrounds.html">Playgrounds</a></li>
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
    @yield('content')
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
    <!-- start section social and copyright -->
    <div class="section-seven">
        <div class="container">
            <div class="con-p-socials">
                <p>&copy;2020 Playground Name | All rights reserved</p>
                <ul>
                    <li><img src="img/youtube.png"/></li>
                    <li><img src="img/facebook.png"/></li>
                    <li><img src="img/twitter.png"/></li>

                </ul>
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
        <form action="">
            <div class="con-radios-box">
               <div class="con-radio">
                   <input type="radio"id="r-one" name="one">
                   <label for="r-one"></label>
                   <label class="l-radio">Staff</label>
                </div>
               <div class="con-radio">
                   <input type="radio"id="r-two"  name="one">
                   <label for="r-two"></label>
                   <label class="l-radio">User</label>
                </div>
               <div class="con-radio">
                   <input type="radio"id="r-three"  name="one">
                   <label for="r-three"></label>
                   <label class="l-radio">Admin</label>
                </div>
            </div>
            <div class="con-icon-input">
               <div class="icon-input"> <i class="fas fa-envelope"></i></div>
                <input type="email"required placeholder="email"/>
            </div>
            <div class="con-icon-input">
                <div class="icon-input"> <i class="fas fa-user"></i></div>
                <input type="text"dir="auto" required placeholder="user name">
            </div>
            <div class="con-icon-input">
                <div class="icon-input"><i class="fas fa-lock"></i></div> 
                <input type="password" required placeholder="password">
            </div>
            <button>Log In</button>
            <p>Already have an account? <a href="#">Sign Up</a></p>
        </form>
    </div>
        <!-- sign up  -->
        <div class="full-sign">
            <span class="close">&times;</span>
            <form action="">
                <div class="con-radios-box">
                   <div class="con-radio">
                       <input type="radio"id="r-one" name="one">
                       <label for="r-one"></label>
                       <label class="l-radio">Staff</label>
                    </div>
                   <div class="con-radio">
                       <input type="radio"id="r-two"  name="one">
                       <label for="r-two"></label>
                       <label class="l-radio">User</label>
                    </div>
                   <div class="con-radio">
                       <input type="radio"id="r-three"  name="one">
                       <label for="r-three"></label>
                       <label class="l-radio">Admin</label>
                    </div>
                </div>
                <div class="con-icon-input">
                   <div class="icon-input"> <i class="fas fa-envelope"></i></div>
                    <input type="email"required placeholder="email"/>
                </div>
                <div class="con-icon-input">
                    <div class="icon-input"> <i class="fas fa-user"></i></div>
                    <input type="text"dir="auto" required placeholder="user name">
                </div>
                <div class="con-icon-input">
                    <div class="icon-input"><i class="fas fa-lock"></i></div> 
                    <input type="password" required placeholder="password">
                </div>
                <button>Sign Up</button>
                <p>Already have an account? <a href="#">Log In</a></p>
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