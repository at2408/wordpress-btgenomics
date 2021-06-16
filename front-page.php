<?php get_header();?>
<section>
        <nav style="position: absolute;" class="navbar navbar-light fixed-top content-container pt-0">
          <div class="row" style="justify-content: space-between; padding-top: 1%;">
            <a href="<?php echo get_site_url(); ?>" class="navbar-brand col-lg-4 col-6">
              <img  class="img-fluid" src="<?php bloginfo('template_directory');?>/image/BTG_logo_white.png">
            </a>
            <div class="navbar-toggler col-lg-2 col-4" style="border: none; text-align: end;">
              <img src="<?php bloginfo('template_directory');?>/image/search_icon.png" style="width: 23%; padding-top: 20px;">&nbsp;&nbsp;
              <img data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="width: 30%; padding-top: 20px;" src="<?php bloginfo('template_directory');?>/image/menu_lines.png">
            </div>
          </div>
        </nav>
        <div class="collapse navbar-collapse dropdownNavbar" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li style="padding: 0 15px; background: #2CACE3;" class="nav-item active">
              <a class="nav-link">Menu <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="padding-left: 15px; padding-right: 15px; cursor: pointer" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About us
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink">
                <a href="<?php echo get_site_url(); ?>/about-us-mission-core" class="dropdown-item">Mission & Core Values</a>
                <a href="<?php echo get_site_url(); ?>/about-us-founder-team" class="dropdown-item">Team Members</a>
                <a class="dropdown-item">Partners</a>
                <a class="dropdown-item">Lab Accreditations & Licenses</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                End-to-End Solutions
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                <a href="<?php echo get_site_url(); ?>/ends-to-ends-solution" class="dropdown-item">End-to-End Solutions</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                NGS Clinical Lab
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink3">
                <a href="<?php echo get_site_url(); ?>/ngs-clinical-lab" class="dropdown-item">NGS Clinical Lab</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Clinical Interpretation Services
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink3">
                <a class="dropdown-item">Team Members</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Contact us
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink4">
                <a class="dropdown-item">Team Members</a>
              </div>
            </li>
          </ul>
        </div>
    </section>
    <section>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active" style="background-image: url(<?php bloginfo('template_directory');?>/image/banner1.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 550px;">
                    <div class="content-container pt-0">
                      <div style="text-align: end; padding-top: 140px;">
                        <div style="margin-bottom: 20px;">
                          <img class="img-width" src="<?php bloginfo('template_directory');?>/image/mycovscan_logo.png" style="width: 33%;">
                        </div>
                        <div class="oxygen-font" style="color: #fff; font-weight: 500; font-size: 35px; margin-bottom: 20px;">
                          COVID-19 Testing <br>
                          through Breakthrough Genomics
                        </div>
                        <div class="oxygen-font" style="color: #C64C9C;">
                            EXPLORE ALL OUR TURN-KEY SOLUTIONS
                            <span><img src="<?php bloginfo('template_directory');?>/image/arrow_magenta.png" style="width: 40px;"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" style="background-image: url(<?php bloginfo('template_directory');?>/image/banner2.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 550px;">
                    <div class="content-container pt-0">
                      <div class="fix-width" style="padding-top: 140px; width: 35%; margin-left: auto; margin-right: 0;">
                        <div class="oxygen-font" style="margin-bottom: 20px; font-size: 40px; font-weight: 500;">
                          Diagnose accurately.<br>
                          Care better
                        </div>
                        <div class="oxygen-font" style="color: #C64C9C; margin-bottom: 20px;">
                          END THE DISEASE DIAGNOSIS <br>
                          FOR PATIENTS IN ONE STEP<span><img src="<?php bloginfo('template_directory');?>/image/arrow_magenta.png" style="width: 40px;"></span>
                        </div>
                        <div class="oxygen-font" style="color: #2CACE3; text-align: end;">
                          <span><img src="<?php bloginfo('template_directory');?>/image/arrow_blue.png" style="width: 40px;"></span>
                            SCHEDULE CONSULT
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" style="background-image: url(<?php bloginfo('template_directory');?>/image/virtual_geneticist_banner.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 550px;">
                    <div class="content-container pt-0">
                      <div class="fix-padding-top" style="padding-top: 175px;">
                        <div class="fix-display mb-md-3" style="display: flex;">
                          <img class="img-width-2" src="<?php bloginfo('template_directory');?>/image/virtual_geneticist_logo.png" style="width: 30%; ">&nbsp;&nbsp;&nbsp;
                          <div class="oxygen-font" style="font-weight: 600; font-size: 35px;">
                            One platform.<br>
                            Many Applications<br>
                            tailored to your needs
                          </div>
                        </div>
                        <div class="oxygen-font" style="color: #C64C9C;">
                            CONNECT YOUR GENOMIC EXPERTS TO BTG PLAFORM<br>
                            TO STREAMLINE LAB TO CLINIC REPORTING
                            <span><img src="<?php bloginfo('template_directory');?>/image/arrow_magenta.png" style="width: 40px;"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section>
        <div>
          <div class="content-container" style="padding-top: 50px; padding-bottom: 50px; color: #24365E;">
            <strong>Breakthrough Genomics</strong> provides services and products to individual practitioner or 
            health systems that want to offer Genomic Medicine solutions to their patients. We 
            strongly believe that every care team can offer a <strong>seamless Precision Medicine 
              experience to their patients</strong>, and we are here to support you through this journey. 
            Based on your needs, we can provide or help you deploy rapidly, <strong>high quality CLIA-certified solutions for disease diagnosis or population screening</strong>, without 
            jeopardize the privacy of your patients.
          </div>
        </div>
    </section>
    <section>
        <div style="background: #24365E;">
          <div class="row fix-padding-title" style="padding-top: 25px; font-size: 30px; color: #fff; padding-bottom: 25px;">
            <div class="text-center col-12">Solutions & Services</div>
          </div>
          <div class="content-container pt-0">
            <div class="row" style="padding-bottom: 50px; padding-top: 30px;">
              <div class="col-md-4 fix-margin-bottom">
                  <div class="card card-blog">
                      <div class="card-image">
                          <a> <img class="img img-raised" src="<?php bloginfo('template_directory');?>/image/covscan_banner_services.png"> </a>
                          <div class="ripple-cont"></div>
                      </div>
                      <div class="table">
                          <h4 class="card-caption" style="color: #24365E;">
                            <a class="oxygen-font">COVID-19 RT-PCR Testing</a>
                          </h4>
                          <p> We perform an FDA-authorized COVID-19 test (mycovscan) from respiratory swabs 
                            or saliva samples. Results are available within 24h.  </p>
                          <div style="font-size: 16px; color: #2CACE3" class="fix-bottom">
                            <a href="" style="color: #2CACE3">Explore all our Turn-Key Solutions</a>
                            <span><img src="<?php bloginfo('template_directory');?>/image/arrow2.png" style="width: 25px;"></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 fix-margin-bottom">
                  <div class="card card-blog">
                      <div class="card-image">
                          <a> <img class="img img-raised" src="<?php bloginfo('template_directory');?>/image/wgs_wes_banner_services.png"> </a>
                      </div>
                      <div class="table">
                          <h4 class="card-caption" style="color: #24365E;">
                            <a class="oxygen-font">WGS/WES</a>
                          </h4>
                          <p> If you not ready to run a genomic test today in your practice/health system, we offer 
                            a convenient and fast way to extend your in-house resources for WGS, WES, and 
                            other tests. </p>
                          <div style="font-size: 16px; color: #2CACE3" class="fix-bottom">
                            <a href="" style="color: #2CACE3">Explore all our Clinical Lab Services</a>
                            <span><img src="<?php bloginfo('template_directory');?>/image/arrow2.png" style="width: 25px;"></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card card-blog">
                      <div class="card-image">
                          <a> <img class="img img-raised" src="<?php bloginfo('template_directory');?>/image/virtual_geneticist_banner_services.png"> </a>
                      </div>
                      <div class="table">
                          <h4 class="card-caption" style="color: #24365E;">
                            <a class="oxygen-font">Virtual Geneticist</a>
                          </h4>
                          <p> We strongly believe that every care team can offer a seamless Precision Medicine 
                            experience to their patients. </p>
                          <div style="font-size: 16px; color: #2CACE3" class="fix-bottom">
                            <a href="" style="color: #2CACE3">Explore BTG SaaS</a>
                            <span><img src="<?php bloginfo('template_directory');?>/image/arrow2.png" style="width: 25px;"></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
          </div>
    </section>
    <section>
      <div style="background-image: url(<?php bloginfo('template_directory');?>/image/news_background.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="row" style="padding-top: 25px; font-size: 30px; color: #fff; padding-bottom: 25px;">
          <div class="text-center col-12">News & Events</div>
        </div>
        <div class="content-container pt-0" style="padding-bottom: 60px;">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-10 fix-margin pr-lg-5">
              <div class="column">
                <div style="margin-bottom: 20px; font-weight: bold;">
                  Webinars
                </div>
                <div class="row" style="margin: 0;">
                  <div class="col-10 col-lg-4 fix-margin" style="padding: 0">
                    <img src="<?php bloginfo('template_directory');?>/image/webinars_testimage.png" style="width: 100%; height: 200px;">
                  </div>
                  <div class="col-10 col-lg-8" style="font-size: 16px; text-align: justify;">
                    <div>
                      Entrepreneuarial vision with amazing technica vision with amazing technical expertise Entrepreneuarial vision with technical expertise.
                    </div><br>
                    <div style="color: #C64C9C;">
                    Entrepreneuarial vision with technical expertise.
                    </div>
                    <div>
                      <img src="<?php bloginfo('template_directory');?>/image/lady.png" style="width: 80%; height: auto;">
                    </div>
                    <div style="text-align: end; margin-top:15px">
                      <a href="#" style="color: #C64C9C;">
                        > Read more
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-10 fix-margin pl-lg-5">
              <div class="column">
                <div style="margin-bottom: 20px; font-weight: bold;">
                  Reference Materials
                </div>
                <div>
                  <div style="font-size: 16px; background: #2CACE3
                  ; color: #fff; min-height: 250px; position: relative; padding: 5%;">
                    <div style="text-align: center; font-size: 13px;">
                      <div style="font-size: 20px; font-weight: bolder;">The standard Lorem Ipsum passage, used since the 1500s</div>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    </div>
                    <div style="position: absolute; left: 5%; bottom: -17%; width: 100%;">
                      <span class="dot">1</span>
                      <span class="dot">2</span>
                      <span class="dot">3</span>
                      <span class="dot">4</span>
                      <span class="dot">5</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>
<?php get_footer();?>
