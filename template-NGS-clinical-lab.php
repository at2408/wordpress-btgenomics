<?php
/*Template Name: NGS Clinical Labs*/
get_header();
?>
<section>
        <nav style="position: absolute;" class="navbar navbar-light fixed-top content-container pt-0">
          <div class="row" style="justify-content: space-between; padding-top: 1%;">
            <a href="<?php echo get_site_url(); ?>" class="navbar-brand col-lg-4 col-6">
              <img class="img-fluid" src="<?php bloginfo('template_directory');?>/image/BTG_logo_white.png">
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
                <div class="carousel-item active"
                    style="background-image: url(<?php bloginfo('template_directory');?>/image/banner1.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 500px;">
                    <div class="content-container pt-0">
                        <div style="text-align: end; padding-top: 130px;">
                            <div style="margin-bottom: 20px;">
                                <img class="img-width" src="<?php bloginfo('template_directory');?>/image/mycovscan_logo.png" style="width: 33%;">
                            </div>
                            <div style="color: #fff; font-weight: 500; font-size: 35px; margin-bottom: 20px;">
                                COVID-19 Testing <br>
                                through Breakthrough Genomics
                            </div>
                            <div style="color: #C64C9C;">
                                EXPLORE ALL OUR TURN-KEY SOLUTIONS
                                <span><img src="<?php bloginfo('template_directory');?>/image/arrow_magenta.png" style="width: 40px;"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item"
                    style="background-image: url(<?php bloginfo('template_directory');?>/image/banner2.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 500px;">
                    <div class="content-container pt-0">
                        <div class="fix-width"
                            style="padding-top: 130px; width: 35%; margin-left: auto; margin-right: 0;">
                            <div style="margin-bottom: 20px; font-size: 40px; font-weight: 500;">
                                Diagnose accurately.<br>
                                Care better
                            </div>
                            <div style="color: #C64C9C; margin-bottom: 20px;">
                                END THE DISEASE DIAGNOSIS <br>
                                FOR PATIENTS IN ONE STEP<span><img src="<?php bloginfo('template_directory');?>/image/arrow_magenta.png"
                                        style="width: 40px;"></span>
                            </div>
                            <div style="color: #2CACE3; text-align: end;">
                                <span><img src="<?php bloginfo('template_directory');?>/image/arrow_blue.png" style="width: 40px;"></span>
                                SCHEDULE CONSULT
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item"
                    style="background-image: url(<?php bloginfo('template_directory');?>/image/virtual_geneticist_banner.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 500px;">
                    <div class="content-container pt-0">
                        <div class="fix-padding-top" style="padding-top: 160px;">
                            <div class="fix-display mb-md-3" style="display: flex;">
                                <img class="img-width-2" src="<?php bloginfo('template_directory');?>/image/virtual_geneticist_logo.png"
                                    style="width: 30%; ">&nbsp;&nbsp;&nbsp;
                                <div style="font-weight: 600; font-size: 35px;">
                                    One platform.<br>
                                    Many Applications<br>
                                    tailored to your needs
                                </div>
                            </div>
                            <div style="color: #C64C9C;">
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

  <section class="content-container-gray">
    <h2 class="content-title">
      CLIA Services
    </h2>
    <div class="end-to-end-container pb-5">
      <div class="clearfix">
        <img id="covid-img" style="float: right;" src="<?php bloginfo('template_directory');?>/image/end-to-end.JPG" alt="">
        <p class="content-text">
          Our clinical lab is CLIA certified by The Centers for Medicare & Medicaid Services
          (CMS) and accredited by the College of American Pathologists (CAP) for clinical
          NGS and Sanger sequencing, and we are routinely instepcted by CAP for
          accrediations renewal. Our commitment to providing reliable, cost-effective
          services and high-quality results remain paramount for our CLIA service portfolio.<br>
          We treat all customer information study-related data, and intellectual propery,
          with the same degree of care and security that we do for our own. This allows our
          customers at both top-tier pharmaceutical companies and biothechnology start-
          ups the flexibility to utilize our regulatore services, while trusting in our
          commitment to quality and communication.
        </p>
      </div>
    </div>
  </section>
  <section class="content-container">
    <h2 class="content-title-blue">
      Features & Benefits
    </h2>
    <div class="row">
      <div class="col-md-6">
        <div class="clearfix">
          <img style="float: right;" src="<?php bloginfo('template_directory');?>/image/badge1.JPG" alt="">
          <p class="features-text">
            Superior data quality that exceeds
            manufacturer's benchmarks
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="clearfix">
          <img style="float: right;" src="<?php bloginfo('template_directory');?>/image/badge2.JPG" alt="">
          <p class="features-text">
            Custom CLIA Validations to support
            specific clinical trials
          </p>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-6">
        <div class="clearfix">
          <img style="float: right;" src="<?php bloginfo('template_directory');?>/image/badge3.JPG" alt="">
          <p class="features-text">
            Ph.D.-level support during the entire
            project, including free consultations
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="clearfix">
          <img style="float: right;" src="<?php bloginfo('template_directory');?>/image/badge4.JPG" alt="">
          <p class="features-text">
            Complementary NGS and Sanger
            services provide variant discovery-to-
            validation workflows
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="content-container">
    <div class="background-pink">
      <h4 class="m-0 inquire-title">Inquire about custom CLIA validations for specific arrays or sample types</h4>
    </div>
    <div class="background-gray">
      <div class="container-fluid">
        <div class="row inquire-wrapper p-3">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <img class="inquire-img" src="<?php bloginfo('template_directory');?>/image/covid_testing.JPG" alt="">
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <img class="inquire-img" src="<?php bloginfo('template_directory');?>/image/screening.JPG" alt="">
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <img class="inquire-img" src="<?php bloginfo('template_directory');?>/image/rare_diseases.JPG" alt="">
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <img class="inquire-img" src="<?php bloginfo('template_directory');?>/image/customize.JPG" alt="">
          </div>
        </div>
      </div>


    </div>
  </section>
  <section class="content-container">
    <h2 class="content-title">
      Who is using our services
    </h2>
    <!-- <div class="row client"> -->
    <div class="">
      <div class="container-fluid p-0">
        <img style="width: 100%;" src="<?php bloginfo('template_directory');?>/image/services.JPG" alt="">
      </div>
      <!-- <div class="auto-feature-clients-start">
          <a class="featured-clients-container" style="display: flex;width: 20%">
            <div class="feature-image"
              style="background-image: url('https://savvycom.vn/wp-content/uploads/2018/12/1-4.png');"></div>
          </a>
          <a class="featured-clients-container" style="display: flex;width: 20%">
            <div class="feature-image"
              style="background-image: url('https://savvycom.vn/wp-content/uploads/2018/12/1-4.png');"></div>
          </a>
          <a class="featured-clients-container" style="display: flex;width: 20%">
            <div class="feature-image"
              style="background-image: url('https://savvycom.vn/wp-content/uploads/2018/12/1-4.png');"></div>
          </a>
          <a class="featured-clients-container" style="display: flex;width: 20%">
            <div class="feature-image"
              style="background-image: url('https://savvycom.vn/wp-content/uploads/2018/12/1-4.png');"></div>
          </a>
          <a class="featured-clients-container" style="display: flex;width: 20%">
            <div class="feature-image"
              style="background-image: url('https://savvycom.vn/wp-content/uploads/2018/12/1-4.png');"></div>
          </a>
          <a class="featured-clients-container" style="display: flex;width: 20%">
            <div class="feature-image"
              style="background-image: url('https://savvycom.vn/wp-content/uploads/2018/12/1-4.png');"></div>
          </a>
          <a class="featured-clients-container" style="display: flex;width: 20%">
            <div class="feature-image"
              style="background-image: url('https://savvycom.vn/wp-content/uploads/2018/12/1-4.png');"></div>
          </a>
          <a class="featured-clients-container" style="display: flex;width: 20%">
            <div class="feature-image"
              style="background-image: url('https://savvycom.vn/wp-content/uploads/2018/12/1-4.png');"></div>
          </a>
          <a class="featured-clients-container" style="display: flex;width: 20%">
            <div class="feature-image"
              style="background-image: url('https://savvycom.vn/wp-content/uploads/2018/12/1-4.png');"></div>
          </a>
          <a class="featured-clients-container" style="display: flex;width: 20%">
            <div class="feature-image"
              style="background-image: url('https://savvycom.vn/wp-content/uploads/2018/12/1-4.png');"></div>
          </a>
        </div> -->
    </div>
  </section>
  <div style="clear: both; height: 25px"></div>
<?php
get_footer();
?>