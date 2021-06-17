<?php 
/* Template Name: About Us - Mission Core*/
get_header();
?>
<section>
        <nav style="position: absolute; display: inherit; top: 0; left: 0; z-index: 10; right: 0;" class="navbar navbar-light content-container pt-0">
          <div class="row" style="justify-content: space-between; padding-top: 1%;">
            <a href="<?php echo get_site_url(); ?>" class="navbar-brand col-lg-4 col-6">
              <img  class="img-fluid" src="<?php bloginfo('template_directory');?>/image/BTG_logo_white.png">
            </a>
            <div class="navbar-toggler col-lg-2 col-4" style="border: none; text-align: end;">
              <img src="<?php bloginfo('template_directory');?>/image/search_icon.png" style="width: 23%; padding-top: 20px;">&nbsp;&nbsp;
              <img data-toggle="collapse" class="nav-button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="width: 30%; padding-top: 20px;" src="<?php bloginfo('template_directory');?>/image/menu_lines.png">
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
                <a href="#" class="dropdown-item">Partners</a>
                <a href="#" class="dropdown-item">Lab Accreditations & Licenses</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px; cursor: pointer;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                End-to-End Solutions
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                <a href="<?php echo get_site_url(); ?>/ends-to-ends-solution" class="dropdown-item">End-to-End Solutions</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px; cursor: pointer;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                NGS Clinical Lab
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink3">
                <a href="<?php echo get_site_url(); ?>/ngs-clinical-lab" class="dropdown-item">NGS Clinical Lab</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px; cursor: pointer;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Clinical Interpretation Services
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink3">
                <a href="#" class="dropdown-item">Clinical Interpretation Services</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a style="padding-left: 15px; padding-right: 15px; cursor: pointer;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Contact us
              </a>
              <div class="dropdown-menu fix-dropdown" aria-labelledby="navbarDropdownMenuLink4">
                <a href="#" class="dropdown-item">Contact us</a>
              </div>
            </li>
          </ul>
        </div>
    </section>
    <section>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"
                        style="background-image: url(<?php bloginfo('template_directory');?>/image/mission_banner.png); background-repeat: no-repeat; background-size: cover; background-position: center; height: 550px;">
                        <div class="content-container pt-0">
                            <div class="fix-padding-top-banner" style="text-align: end; padding-top: 200px; padding-right: 20%">
                                <div class="oxygen-font" style="color: #fff; font-weight: 500; font-size: 45px; margin-bottom: 20px;">
                                    Breakthrough Genomics. <br>
                                    We help you to break through the noise.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section class="content-container">
    <table>
      <tr>
        <td style="text-align: center; color: #2CACE3; font-weight: bold; font-size: 24px;">
          MISSION
        </td>
        <td></td>
      </tr>
      <tr>
        <td style="text-align: center; vertical-align: baseline; padding-top: 10px; width: 10%">
          <img src="<?php bloginfo('template_directory');?>/image/mission.png" alt="" width="80%">
        </td>
        <td>
          <p class="table-content-text">
            Breakthrough Genomics has been on a mission to <strong>enable Precision Health experiences at scale</strong>. We serve providers and clinical labs that want to offer the state-of-the-art solutions in clinical genomics and improve the care outcomes of their communities.<br><br>
            In the COVID-pandemic era, providers had to find new trusted technology partners, integrate their solutions into their workflows, and continue to care. We have selected as a trusted partner. We serve providers across California to deploy high-quality, high-value solutions and avoid the market noise. Read our COVID success story here.<br><br>
            Our goal is to continue on this path. Our mission is to offer high-quality, innovative solutions that enable all care teams and health systems to uptake new technology and offer better services that improve outcomes and revenues.<br><br>
            Our team with deep understanding of Genomics and Precision Medicine brings together expertise in Clinical Lab, AI, and Health IT to deliver what you and your patients deserve - a better healthcare.
          </p>
          <a href="#" style="padding-left: 20px;" class="read-more">
            Read our COVID success story here <span style="margin-left: 4px;"><img style="width: 25px;"
                src="<?php bloginfo('template_directory');?>/image/arrow_magenta.png" alt=""></span>
          </a>
        </td>
      </tr>
      <tr>
        <td style="text-align: center; color: #2CACE3; font-weight: bold; font-size: 24px;">
          VALUES
        </td>
        <td></td>
      </tr>
      <tr>
        <td style="text-align: center; vertical-align: baseline; padding-top: 10px; width: 10%">
          <img src="<?php bloginfo('template_directory');?>/image/values.png" alt="" width="80%">
        </td>
        <td>
          <p class="table-content-text">
            Shared vision<br>
            Cutting Edge Technology<br>
            Solution-oriented Team<br>
            Flexible and dynamic
          </p>
        </td>
      </tr>
    </table>
    <p class="content-text mt-5">
      We collaborate with clinical teams across different care environments to design and create a unique
      experience for everyone who is looking for a high-quality, scalable solution in clinical genomics.
    </p>
  </section>
  <div style="clear: both; height: 25px"></div>
<?php get_footer();?>
