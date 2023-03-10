@extends ('layouts.app')
@section('content')
@isset($success)
<div class="alert alert-success">
<strong>{{@message}}</strong>
</div>
@endif
<div class="main-banner"  data-aos="fade-down-right" data-aos-delay="50"
    data-aos-duration="1000" style="background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(5,89,33,1) 35%, rgba(19,153,63,1) 96%);">
    <nav class="social-nav">
      <ul>
        <li class="snav"><a href="https://www.facebook.com/profile.php?id=100013741391986&mibextid=ZbWKwL"><i class="bi bi-facebook"></i></a></li>
        <li class="snav"><a href="https://instagram.com/pioneerldh?igshid=ZDdkNTZiNTM="><i class="bi bi-twitter"></i></a></li>
        {{-- <li class="snav"><a href="#"><i class="bi bi-instagram"></i></a></li> --}}
        <li class="snav"><a href="https://www.linkedin.com/in/pioneer-academy-595885264"><i class="bi bi-linkedin"></i></a></li>
        
      </ul>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="owl-carousel owl-banner">
                <div class="item header-text">
                  {{-- <h6>Tag line</h6> --}}
                  <h2 class="title-ban"style="color: white; font-weight:bolder;">PIONEER 
{{-- <span>...</span>..... --}}
</h2>
                  <p ><h3 ><em style="font-weight:bolder;
    font-family: monospace;">Register for</em></h3>
    <h4 style="font-family: cursive;line-height: 1.5;color: white; font-weight:bolder;">
HR Services & Placements,
Freelancing work,<br>
Tuitions-Online/offline Batches,<br>
GATE/IES/JE/SDE,<br>UGC/IAS/PCS,<br>
11th/12th/ IIT- JEE/NEET/CA,</h4>
<h3 style="color: white;"><span><b>UNDER RENOVATION. 
WILL BE BACK LIVE FROM 1 MARCH 2023<b> </span><span>	&#128197;</span></h3></p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a href="href="{{ url('signup') }}"">Join now</a>
                    </div>
                  
                  </div>
                </div>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="services" class="our-services section">
    <div class="services-right-dec">
      
    </div>
    <div class="container">
      <div class="services-left-dec">
      
      </div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Get your career on <span>right path</span></h2>
            <span>tag line...</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-services">
            <div class="item" data-aos="fade-right" data-aos-delay="50" data-aos-duration="800"
    >
              <h4>For freelancers</h4>
              <div class="icon"><img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/freelancer.png" alt=""></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="item" data-aos="fade-left" data-aos-delay="50" data-aos-duration="800" >
              <h4>Teachers</h4>
              <div class="icon"><img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/teacher.png" alt=""></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="item"  data-aos="fade-right" data-aos-delay="50" data-aos-duration="800">
              <h4>Search jobs</h4>
              <div class="icon"><img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/job.png" alt=""></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="item"  data-aos="fade-left" data-aos-delay="50" data-aos-duration="800">
              <h4>Students</h4>
              <div class="icon"><img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/students.png" alt=""></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image"  data-aos="fade-right" data-aos-delay="50" data-aos-duration="800">
            <img src="https://www.pngall.com/wp-content/uploads/12/Illustration-PNG-Images.png" alt="Two Girls working together">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>our Community</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum</p>
            <div class="row">
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/students.png" alt="">
                    </div>
                    <div class="count-digit" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">320</div>
                    <div class="count-title">Students</div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/freelancer.png" alt="">
                    </div>
                    <div class="count-digit" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">640</div>
                    <div class="count-title">Freelancers</div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/teacher.png" alt="">
                    </div>
                    <div class="count-digit" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">120</div>
                    <div class="count-title">Teachers</div>
                    <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="portfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
      <img src="assets/images/portfolio-left-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Our Recent <em>Projects</em> &amp; Case Studies <span>for Clients</span></h2>
            <span>Our Portfolio</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-portfolio">
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-01.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a rel="sponsored" href="https://templatemo.com/tm-564-plot-listing" target="_parent"><h4>First Project</h4></a>
                    <span>Plot Listing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-02.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Two</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-03.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a rel="sponsored" href="https://templatemo.com/tm-562-space-dynamic" target="_parent"><h4>Third Project</h4></a>
                    <span>Space Dynamic SEO</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-04.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Four</h4></a>
                    <span>Website Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-01.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Fifth Project</h4></a>
                    <span>Digital Assets</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-02.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Sixth Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-03.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>7th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-04.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>8th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-01.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>9th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-02.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Ten</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-03.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>Project Eleven</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/portfolio-04.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#"><h4>12th Project</h4></a>
                    <span>SEO &amp; Marketing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div id="video" class="our-videos section">
    <div class="videos-left-dec">
      <img src="assets/images/videos-left-dec.png" alt="">
    </div>
    <div class="videos-right-dec">
      <img src="assets/images/videos-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-8">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/JynGuQx4a1Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <div class="overlay-effect">
                            <a href="#"><h4>Project One</h4></a>
                            <span>SEO &amp; Marketing</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/RdJBSFpcO4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <div class="overlay-effect">
                            <a href="#"><h4>Second Project</h4></a>
                            <span>Advertising &amp; Marketing</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/ZlfAjbQiL78" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <div class="overlay-effect">
                            <a href="#"><h4>Project Three</h4></a>
                            <span>Digital &amp; Marketing</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/mx1WseE7-0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <div class="overlay-effect">
                            <a href="#"><h4>Fourth Project</h4></a>
                            <span>SEO &amp; Advertising</span>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-4">
                  <div class="menu">
                    <div class="active">
                      <div class="thumb">
                        <img src="assets/images/video-thumb-01.png" alt="">
                        <div class="inner-content">
                          <h4>Project One</h4>
                          <span>SEO &amp; Marketing</span>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <img src="assets/images/video-thumb-02.png" alt="">
                        <div class="inner-content">
                          <h4>Second Project</h4>
                          <span>Advertising &amp; Marketing</span>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <img src="assets/images/video-thumb-03.png" alt="Marketing">
                        <div class="inner-content">
                          <h4>Project Three</h4>
                          <span>Digital &amp; Marketing</span>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <img src="assets/images/video-thumb-04.png" alt="SEO Work">
                        <div class="inner-content">
                          <h4>Fourth Project</h4>
                          <span>SEO &amp; Advertising</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop