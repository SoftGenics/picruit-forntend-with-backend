@extends ('layouts.app')
@section('content')
<style> @import url('https://fonts.googleapis.com/css2?family=Bad+Script&display=swap');</style>
<div class="main-banner"  data-aos="fade-down-right" data-aos-delay="50"
    data-aos-duration="1000" style="background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(5,89,33,1) 35%, rgba(19,153,63,1) 96%);">
    <nav class="social-nav">
      <ul>
        <li class="snav"><a href="https://www.facebook.com/pioneeracademyldh?mibextid=ZbWKwL"><i class="bi bi-facebook"></i></a></li>
        <li class="snav"><a href="https://www.linkedin.com/in/pioneer-academy-595885264"><i class="bi bi-linkedin"></i></a></li>
        {{-- <li class="snav"><a href="#"><i class="bi bi-instagram"></i></a></li> --}}
        <li class="snav"><a href="https://instagram.com/pioneerldh?igshid=ZDdkNTZiNTM="><i class="bi bi-instagram"></i></a></li>
        
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
    {{-- <div class="portfolio-left-dec">
      <img src="assets/images/portfolio-left-dec.png" alt="">
    </div> --}}
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2 style="font-family: 'Bad Script', cursive;font-size:56px;">Knowledge &nbsp<em>Tree</em> </h2>
            
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
                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/portfolio-01.jpg" alt="">
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
                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/portfolio-02.jpg" alt="">
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
                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/portfolio-03.jpg" alt="">
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
                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/portfolio-04.jpg" alt="">
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
                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/portfolio-01.jpg" alt="">
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
                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/portfolio-02.jpg" alt="">
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
                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/portfolio-03.jpg" alt="">
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
                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/portfolio-04.jpg" alt="">
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
                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/portfolio-01.jpg" alt="">
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
                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/portfolio-02.jpg" alt="">
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
                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/portfolio-03.jpg" alt="">
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
                <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/portfolio-04.jpg" alt="">
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
      <img style="filter: brightness(0) saturate(100%) invert(39%) sepia(99%) saturate(393%) hue-rotate(100deg) brightness(87%) contrast(84%);" src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/videos-left-dec.png" alt="">
    </div>
    <div class="videos-right-dec">
      <img style="filter: brightness(0) saturate(100%) invert(39%) sepia(99%) saturate(393%) hue-rotate(100deg) brightness(87%) contrast(84%);" src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/videos-right-dec.png" alt="">
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
                        <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/video-thumb-01.png" alt="">
                        <div class="inner-content">
                          <h4>Project One</h4>
                          <span>SEO &amp; Marketing</span>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/video-thumb-02.png" alt="">
                        <div class="inner-content">
                          <h4>Second Project</h4>
                          <span>Advertising &amp; Marketing</span>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/video-thumb-03.png" alt="Marketing">
                        <div class="inner-content">
                          <h4>Project Three</h4>
                          <span>Digital &amp; Marketing</span>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/video-thumb-04.png" alt="SEO Work">
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
   <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7" data-aos="fade-right" data-aos-delay="50" data-aos-duration="800">
          <div class="section-heading">
            <h2>Feel free to <em>Contact</em> us  <span></span></h2>
            <div id="map">
              <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
            <div class="info">
              <span><i class="fa fa-phone"></i> <a href="#">+919878865747
<br></a></span>
              <span><i class="fa fa-envelope"></i> <a href="#">pioneerfoundationldh@gmail.com<br></a></span>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
          <form id="contact" action="" method="get">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="website" id="website" placeholder="Your Website URL" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button">Submit Request</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="contact-dec">
      
    </div>
    <div class="contact-left-dec">
     
    </div>
  </div>
  <div class="footer-dec">
    <img src="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/images/footer-dec.png" alt="">
  </div>
  @stop