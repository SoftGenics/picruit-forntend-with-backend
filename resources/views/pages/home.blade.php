@extends ('layouts.app')
@section('content')
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
<style> @import url('https://fonts.googleapis.com/css2?family=Bad+Script&display=swap');
.demo{ background: #f8f7f6; }
#testimonial-slider{
    padding: 50px 20px 35px 20px;
    background: #fff;
    text-align: center;
    box-shadow: 0 0 115px 19px rgba(236, 236, 236, 1);
}
.testimonial .description{
    font-size: 14px;
    color: #777;
    line-height: 26px;
    text-indent: 30px;
    position: relative;
}
.testimonial .description:before{
    content: "\f10d";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    top: 0;
    left: -15px;
}
.testimonial .title{
    font-size: 24px;
    font-weight: bold;
    color: #363636;
    text-transform: capitalize;
    margin: 0;
}
.testimonial .post{
    display: block;
    font-size: 15px;
    color: #363636;
}
.owl-buttons{
    width: 100%;
    height: 40px;
    position: absolute;
    bottom: 40%;
    left: 0;
}
.owl-prev,
.owl-next{
    position: absolute;
    left: 0;
    transition: all 0.4s ease-in-out 0s;
}
.owl-next{
    left: auto;
    right: 0;
}
.owl-buttons .owl-prev:before,
.owl-buttons .owl-next:before{
    content: "\f104";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 60px;
    font-weight: 900;
    color: #cacaca;
    line-height: 20px;
    opacity: 0.8;
}
.owl-buttons .owl-next:before{
    content: "\f105";
}
.owl-buttons .owl-prev:hover:before,
.owl-buttons .owl-next:hover:before{
    opacity: 1;
}
.owl-theme .owl-controls .owl-buttons div{
    background: transparent;
}
.owl-theme .owl-controls{
    margin-top: 40px;
}
.owl-theme .owl-controls .owl-page span{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 4px solid #ccc;
    background: url("	https://bestjquery.com/tutorial/testimonial/demo59/images/img-3.jpg") no-repeat;
    background-size: cover;
    transition: all 0.3s ease-in-out 0s;
}
.owl-theme .owl-controls .owl-page:nth-child(2) span{
    background: url("	https://bestjquery.com/tutorial/testimonial/demo59/images/img-1.jpg") no-repeat;
    background-size: cover;
}
.owl-theme .owl-controls .owl-page:nth-child(3) span{
    background: url("	https://bestjquery.com/tutorial/testimonial/demo59/images/img-2.jpg") no-repeat;
    background-size: cover;
}
.owl-theme .owl-controls.clickable .owl-page:hover span{
    opacity: 0.5;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls .owl-page.active:hover span{
    border-color: #d133ff;
    opacity: 1;
}
@media only screen and (max-width: 479px){
    .owl-buttons{ bottom: 30%; }
}
.drops{
    position: relative;
    left: 0;
    z-index: 1;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 0px 0px 5px;
    font-size: 18px;
    text-align: center;
    list-style: none;
    background-color: #f2f6f3;;
    background-clip: padding-box;
    border-radius: 5px;
}
</style>
<div class="main-banner" id="vantabck" data-aos="fade-down-right" data-aos-delay="50"
    data-aos-duration="1000" >
    {{-- style="background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(5,89,33,1) 35%, rgba(19,153,63,1) 96%);" --}}
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
                  {{-- <p ><h3 ><em style="font-weight:bolder;
    font-family: monospace;">Register for</em></h3>
    <h4 style="line-height: 1.5;color: white; font-weight:bolder;">
HR Services & Placements,
Freelancing work,<br>
Tuitions-Online/offline Batches,<br>
GATE/IES/JE/SDE,<br>UGC/IAS/PCS,<br>
11th/12th/ IIT- JEE/NEET/CA,</h4> --}}
<h3 style="color: white;"><span><b>Hire the best services and freelancers<b> </span><span>	</span></h3></p>
      <div class="down-buttons">
             
                    {{-- <div class="main-blue-button-hover">
                      <a href="href="{{ url('signup') }}"">Join now</a>
                    </div> --}}
                  <details class="dropdown">
            <summary role="button">
                   <a class="button btn btn-warning dropdown-toggle">Post job / Teacher requirment</a>
             </summary>
              <ul class="drops">
               <li><a href="#" style="color:green">Post work</a></li>
                <div class="dropdown-divider"></div>
                <li><a href="#" style="color:green">Post Tutor Request</a></li>
                 <div class="dropdown-divider"></div>
                 <li><a href="find-work" style="color:green">Find work</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a href="#" style="color:green">Connect Tutor</a></li>
                 
              </ul>
                      </details>
                  </div>
                  <h3>ONLINE AND OFFLINE</h3>
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
  <div id="pricing" class="pricing-tables">
   
    <div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 ">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                        </p>
                        <h3 class="title">williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
 
                    <div class="testimonial">
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                        </p>
                        <h3 class="title">Kristina</h3>
                        <span class="post">Web Designer</span>
                    </div>
 
                    <div class="testimonial">
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                        </p>
                        <h3 class="title">Miranda Joy</h3>
                        <span class="post">Web Developer</span>
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