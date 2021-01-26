@extends('layouts.master')
@section('content')
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
                <img src="img/one.jfif" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption  d-md-block">
                <h2>Book A Playground</h2>
                <p>Find A playground for any sport.</p>
                <button><a href="playgrounds.html">View Playgrounds</a></button>
                </div>
            </div>
            <div class="carousel-item height-img">
                <img src="img/banner2.png" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <h2>Read About Us</h2>
                    <p>Know more about our company.</p>
                    <button><a href="#about_us">About Us</a></button>
                </div>
            </div>
            <div class="carousel-item height-img">
                <img src="img/offer.png
                " class="d-block w-100 h-100" alt="...">
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
            <h2>Book Your Prefered Playground</h2>
            <div class="row">
                <div class="col-md-6">
                    <figure data-aos="fade-up"data-aos-delay="100">
                        <div class="con-img">
                            <img src="img/four.jfif" alt="">
                        </div>
                        <div class="fle-hr">
                            <div class="h3-p">
                                <h3>Football Playground</h3>
                                <p>miami center</p>
                            </div>
                            <span class="price">30$ hr</span>
                        </div>
                    </figure>
                </div>
                <div class="col-md-6">
                    <figure data-aos="fade-up"data-aos-delay="200">
                        <div class="con-img">
                          <img src="img/two.jfif" alt="">
                        </div>
                        <div class="fle-hr">
                            <div class="h3-p">
                                <h3>Swimming pool</h3>
                                <p>booston center</p>
                            </div>
                            <span class="price">30$ hr</span>
                        </div>
                    </figure>
                </div>
                <div class="col-md-6">
                    <figure data-aos="fade-up"data-aos-delay="100">
                        <div class="con-img">
                             <img src="img/three.jfif" alt="">
                        </div>
                        <div class="fle-hr">
                            <div class="h3-p">
                                <h3>Golf Playground</h3>
                                <p>miami center</p>
                            </div>
                            <span class="price">30$ hr</span>
                        </div>
                    </figure>
                </div>
                <div class="col-md-6">
                    <figure data-aos="fade-up"data-aos-delay="200">
                        <div class="con-img">
                            <img src="img/five.jfif" alt="">
                        </div>
                        <div class="fle-hr">
                            <div class="h3-p">
                                <h3>Basketball Playground</h3>
                                <p>miami center</p>
                            </div>
                            <span class="price">30$ hr</span>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
   @include('includes.about')
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
@stop