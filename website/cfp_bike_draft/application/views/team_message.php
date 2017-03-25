<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Bike View NJ - Data, Visualizations, Safety for Everybody</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        
        <link rel="stylesheet" type="text/css" href="<?=  base_url(); ?>/css/styles.css" media="screen" />
        
    </head>
    <body>
        <!-- page container -->
        <div class="page-container">
            
            <!-- page header -->
            <div class="page-header">
                
                <!-- page header holder -->
                <div class="page-header-holder">
                    
                    <!-- page logo -->
                    <div class="logo">
                        <a href="<?= base_url()?>">Bike View - Data, Visualizations and Safety</a>
                    </div>
                    <!-- ./page logo -->

                    
                    <!-- nav mobile bars -->
                    <div class="navigation-toggle">
                        <div class="navigation-toggle-button"><span class="fa fa-bars"></span></div>
                    </div>
                    <!-- ./nav mobile bars -->

                    <!-- navigation -->
                    <ul class="navigation">
                        <li>
                            <a href="<?=  base_url(); ?>" style="font-size: 16px;">Home</a>

                        </li>
                        <li>
                            <a href="#" style="font-size: 16px;">About Us</a>
                            <ul>
                                <li><a href="<?=  base_url()?>index.php/LoadView/team" style="font-size: 14px;">The Team</a></li>
                                <li><a href="<?=  base_url()?>index.php/LoadView/contact" style="font-size: 14px;">Contact Us</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" style="font-size: 16px;">For Data Analysts</a>
                            <ul>
                                <li><a href="<?=  base_url()?>index.php/LoadView/streetmap" style="font-size: 14px;"> Street Map - Bike Crashes</a></li>
                                <li><a href="<?=  base_url()?>index.php/LoadView/carstreetmap" style="font-size: 14px;"> Street Map - Car Crashes</a></li>
                                <li><a href="<?=  base_url()?>index.php/LoadView/charts" style="font-size: 14px;">Data Analysis</a></li>                                
                            </ul>
                        </li>

                        <li>
                            <a href="#" style="font-size: 16px;">For Bikers</a>
                            <ul>
                                <li>
                            <a href="<?=  base_url()?>index.php/LoadView/reportincident" style="font-size: 14px;">Report an Incident</a>
                                </li>
                                <li><a href="<?=  base_url()?>index.php/LoadView/safety" style="font-size: 14px;"> Safety 101</a></li>
                                <li><a href="https://play.google.com/store/apps/details?id=net.andromo.dev618807.app592325&hl=en" target="_blank" style="font-size: 14px;">Get Mobile <strong> Safety </strong> app</a></li>                               
                            </ul>
                        </li>
                        <li>
                            <a href="#" style="font-size: 16px;">For the Gov't</a>
                            <ul>
                                <li>
                            <a href="<?=  base_url()?>index.php/LoadView/masterplan" style="font-size: 14px;">NJ Bike Master Plan</a>
                                </li>
                                <li>
                            <a href="<?=  base_url()?>index.php/LoadView/overlays" style="font-size: 14px;">Route Overlays</a>
                                </li>
                                <li><a href="<?=  base_url()?>index.php/LoadView/login" style="font-size: 14px;"> Login/Register</a></li>
                                                             
                            </ul>
                        </li>
                        
                    </ul>
                    <!-- ./navigation --> 
                    
                </div>
                <!-- ./page header holder -->
                
            </div>
            <!-- ./page header -->
            
            <!-- page content -->
            <div class="page-content">
                
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    <!-- page content holder -->
                    <div class="page-content-holder no-padding">
                        <!-- page title -->
                        <div class="page-title">                            
                            <h1>About Us</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="<?= base_url(); ?>">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li class="active">The Team</li>
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
                               
                

                <!-- page content wrapper -->
                <div class="page-content-wrap">
                                        
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">                        
                        
                        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
                            <h2 class="heading-underline">Meet Our Team</h2>
                            <div class="block-heading-text">
                                Project Bike View team came together from members of Code for Princeton, Princeton’s Bicycle Advisory Committee and the municipality of Princeton to participate at Coding for Community.
                            </div>
                        </div>
                        
                        <div class="row">
                            
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                    <img src="<?= base_url(); ?>assets/img/users/jack.jpg" alt="Jack K" class="img-circle">
                                    </div>
                                    <h5>Jiahuan Kang</h5>
                                    <div class="text-column-subtitle"> Project Lead <br></div>
                                    <p class="text-center"> 
                                       
                                       <a href="https://www.linkedin.com/in/jiahuankang/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                                        <a href="https://twitter.com/jackking11111" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                                        <a href="https://github.com/jackking11111111" target="_blank"><i class="fa fa-github-square fa-2x"></i></a>
                                        <i class="fa fa-globe fa-2x"></i>
                                        </p>
                                    <!--<div class="text-column-info">
                                        <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    </div> -->
                                </div>
                            </div>
                            
                           <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                    <img src="<?= base_url(); ?>assets/img/users/erika.jpg" alt="Erika S" class="img-circle">
                                    </div>
                                    <h5>Erika Serrano</h5>
                                    <div class="text-column-subtitle"> Web Development Lead <br></div>
                                    <p class="text-center"> 
                                       
                                       <a href="https://www.linkedin.com/in/akireserrano/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                                        <a href="https://twitter.com/akireserrano" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                                        <a href="https://github.com/akireserrano86" target="_blank"><i class="fa fa-github-square fa-2x"></i></a>
                                        <a href="http://www.photosbyakire.com" target="_blank"><i class="fa fa-globe fa-2x"></i></a>
                                        </p>
                                    <!--<div class="text-column-info">
                                        <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    </div> -->
                                </div>
                            </div>
                            
                           <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                    <img src="<?= base_url(); ?>assets/img/users/ashok.jpg" alt="Ashok K" class="img-circle">
                                    </div>
                                    <h5>Ashok Khandelwal</h5>
                                    <div class="text-column-subtitle"> Data Visualization/ Analyst <br></div>
                                    <p class="text-center"> 
                                       
                                       <a href="https://www.linkedin.com/in/khandelwal-ashok-1032628/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                                        <a href="https://twitter.com/ashoknj" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                                        <a href="https://github.com/ashoknj" target="_blank"><i class="fa fa-github-square fa-2x"></i></a>
                                        <i class="fa fa-globe fa-2x"></i>
                                        </p>
                                    <!--<div class="text-column-info">
                                        <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    </div> -->
                                </div>
                            </div>
                            
                           <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                    <img src="<?= base_url(); ?>assets/img/users/chris.jpg" alt="Chris H" class="img-circle">
                                    </div>
                                    <h5>Christopher Hefele</h5>
                                    <div class="text-column-subtitle"> Data Visualization/ Analyst <br></div>
                                    <p class="text-center"> 
                                       
                                       <a href="https://www.linkedin.com/in/christopherhefele/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                                        <a href="https://twitter.com/ChrisHefele" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                                        <a href="https://github.com/chrishefele" target="_blank"><i class="fa fa-github-square fa-2x"></i></a>
                                        <i class="fa fa-globe fa-2x"></i>
                                        </p>
                                    <!--<div class="text-column-info">
                                        <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    </div> -->
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                    <img src="<?= base_url(); ?>assets/img/users/jacq.jpg" alt="Jacqueline Z" class="img-circle">
                                    </div>
                                    <h5>Jacqueline Zhou</h5>
                                    <div class="text-column-subtitle"> Data Visualization/ Analyst<br></div>
                                    <p class="text-center"> 
                                       
                                       <a href="https://www.linkedin.com/in/jacqueline-zhou-9ab52384/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                                       <i class="fa fa-twitter fa-2x"></i>
                                       <i class="fa fa-github-square fa-2x"></i>
                                       <i class="fa fa-globe fa-2x"></i>
                                        </p>
                                    <!--<div class="text-column-info">
                                        <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    </div> -->
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                    <img src="<?= base_url(); ?>assets/img/users/no-image.jpg" alt="Nick H" class="img-circle">
                                    </div>
                                    <h5>Nicholas Heath</h5>
                                    <div class="text-column-subtitle"> Mobile Application Lead <br></div>
                                    <p class="text-center"> 
                                       
                                       <a href="https://www.linkedin.com/in/nicholas-heath-7693b313a/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                                        <i class="fa fa-twitter fa-2x"></i>
                                        <a href="https://github.com/Nickcoder7" target="_blank"><i class="fa fa-github-square fa-2x"></i></a>
                                        <i class="fa fa-globe fa-2x"></i>
                                        </p>
                                    <!--<div class="text-column-info">
                                        <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    </div> -->
                                </div>
                            </div>
                            
                            
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                    <img src="<?= base_url(); ?>assets/img/users/paz.jpg" alt="Paz Tarrio" class="img-circle">
                                    </div>
                                    <h5>Paz Tarrio</h5>
                                    <div class="text-column-subtitle"> Visual Designer/ Artist <br></div>
                                    <p class="text-center"> 
                                       
                                       <a href="http://www.linkedin.com/in/paztarrio" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                                        <i class="fa fa-twitter fa-2x"></i>
                                        <i class="fa fa-github-square fa-2x"></i>
                                        <i class="fa fa-globe fa-2x"></i>
                                        </p>
                                    <!--<div class="text-column-info">
                                        <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    </div> -->
                                </div>
                            </div>
                            


                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                    <img src="<?= base_url(); ?>assets/img/users/hema.jpg" alt="Hema W" class="img-circle">
                                    </div>
                                    <h5>Hema Waghray</h5>
                                    <div class="text-column-subtitle"> Community Consultant/ Code for Princeton - Director <br></div>
                                    <p class="text-center"> 
                                       
                                       <a href="https://www.linkedin.com/in/maliwagh" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                                        <a href="https://twitter.com/maliwagh" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                                        <a href="https://github.com/HemaMaliniW" target="_blank"><i class="fa fa-github-square fa-2x"></i></a>
                                        <i class="fa fa-globe fa-2x"></i>
                                        </p>
                                    <!--<div class="text-column-info">
                                        <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    </div> -->
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                    <img src="<?= base_url(); ?>assets/img/users/tineke.jpg" alt="Tineke T" class="img-circle">
                                    </div>
                                    <h5>Tineke Thio</h5>
                                    <div class="text-column-subtitle"> Princeton Bicycle Advisory Committee <br></div>
                                    <p class="text-center"> 
                                       
                                        <i class="fa fa-linkedin fa-2x"></i>
                                        <a href="https://twitter.com/PrincetonBike" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                                        <i class="fa fa-github-square fa-2x"></i>
                                        <a href="http://pjpbac.blogspot.com"><i class="fa fa-globe fa-2x"></i></a>
                                        </p>
                                    <!--<div class="text-column-info">
                                        <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    </div> -->
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                    <img src="<?= base_url(); ?>assets/img/users/no-image.jpg" alt="Christina R" class="img-circle">
                                    </div>
                                    <h5>Christina R</h5>
                                    <div class="text-column-subtitle"> Community Consultant <br></div>
                                    <p class="text-center"> 
                                       
                                        <i class="fa fa-linkedin fa-2x"></i>
                                        <i class="fa fa-twitter fa-2x"></i>
                                        <i class="fa fa-github-square fa-2x"></i>
                                        <i class="fa fa-globe fa-2x"></i>
                                        </p>
                                    <!--<div class="text-column-info">
                                        <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
                </div>                
                <!-- ./page content wrapper -->
                
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                                                
                        <div class="row">
                            
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeInLeft">
                                    <div class="text-column-icon">
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <h4>Team Goals</h4>
                                       <i class="fa fa-check-square"></i>&nbsp;Download and clean raw data from NJDOT 
                                       <br>
                                        <i class="fa fa-check-square"></i>&nbsp;Create interactive data visualizations
                                       <br> 
                                        <i class="fa fa-check-square"></i>&nbsp; Real-time accident reporting and feeds.                      
                                        <br>                  
                                        <i class="fa fa-check-square"></i>&nbsp;Email feedback forms.
                                        <br>
                                        <i class="fa fa-check-square"></i>&nbsp;Mobile app components.
                                        <br>
                                        <i class="fa fa-check-square"></i>&nbsp;Dynamic weather information for bicycle users
                                        
                                </div>                                
                            </div>
                            
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeInUp">
                                    <div class="text-column-icon">
                                        <span class="fa fa-hand-o-up"></span>
                                    </div>
                                    <h4>Our Skills</h4>
                                        <i class="fa fa-check-plus"></i>&nbsp;Data Analysis and Visualization - R, Shiny, D3 
                                       <br>
                                        <i class="fa fa-check-plus"></i>&nbsp;Mapping - ArcGIS
                                       <br> 
                                        <i class="fa fa-check-plus"></i>&nbsp; Web Development - HTML, CSS, JS, PHP
                                        <br>                  
                                        <i class="fa fa-check-plus"></i>&nbsp;Database - MySQL
                                        <br>
                                        <i class="fa fa-check-plus"></i>&nbsp;Mobile development - Java, AndroidSDK
                                        <br>
                                        <i class="fa fa-check-plus"></i>&nbsp;Bicycle planning and policies
                                </div>                                
                            </div>
                            
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeInRight">
                                    <div class="text-column-icon">
                                        <span class="fa fa-clock-o"></span>
                                    </div>
                                    <h4>Work Progress</h4>
                                        We are currently on our pilot program for our web tool as well as mobile application covering bicycle crashes only in NJ. 
                                        <p>We would like to expand this project to include vehicle crashes and pedestrian-related incidents </p>
                                   
                                </div>                                
                            </div>
                            
                        </div>
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
            </div>
            <!-- ./page content -->
            
             <!-- page footer -->
            <div class="page-footer">
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-dark-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder page-footer-holder-main">
                                                
                        <div class="row">
                            
                            <!-- about -->
                            <div class="col-md-3">
                                <h3>About Us</h3>
                                <p>Project Bike View team came together from members of Code for Princeton, Princeton’s Bicycle Advisory Committee and the municipality of Princeton to participate at Coding for Community.</p>
                            </div>
                            <!-- ./about -->
                            
                            <!-- quick links -->
                            <div class="col-md-3">
                                <h3>Quick links</h3>
                                
                                <div class="list-links">
                                    <a href="<?=  base_url(); ?>">Home</a>                                    
                                    <a href="<?=  base_url()?>index.php/LoadView/streetmap">Visualizations</a>
                                    <a href="<?=  base_url()?>index.php/LoadView/reportincident">Report an Incident</a>
                                    <a href="https://play.google.com/store/apps/details?id=net.andromo.dev618807.app592325&hl=en" target="_blank">Get the App</a>
                                </div>                                
                            </div>
                            <!-- ./quick links -->
                            
                           
                            
                            <!-- contacts -->
                            <div class="col-md-3">
                                <h3>Contacts</h3>
                                
                                <div class="footer-contacts">
                                    <div class="fc-row">
                                        <span class="fa fa-home"></span>
                                        City of Princeton, NJ<br/> 
                                        
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-globe"></span>
                                        <a href="http://www.codeforprinceton.org" target="_blank">www.codeforprinceton.org</a>
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>
                                        <strong>Code for Princeton</strong><br>
                                        <a href="mailto:codeforprinceton@gmail.com">codeforprinceton@gmail.com</a>
                                    </div>                                    
                                </div>
                                
                            </div>
                            <!-- ./contacts -->
                            <!-- about -->
                            <div class="col-md-3">
                              <p class="text-center"> <img src="<?= base_url();?>/img/cfp_logo.png" /></p>
                               <p>We are a group of techies and community members interested in open government and civic hacking. We host hack nights, workshops, and talks plus work with the municipal government to provide open datasets.</p>
                            </div>
                        </div>
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-darken-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder">
                        
                        <!-- copyright -->
                        <div class="copyright">
                            &copy; 2017 <a href="http://www.codeforprinceton.org" target="_blank"> Code for Princeton  </a>  
                        </div>
                        <!-- ./copyright -->
                        
                        <!-- social links -->
                        <div class="social-links">
                            <a href="https://www.facebook.com/codeforprinceton" target="_blank"><span class="fa fa-facebook"></span></a>
                            <a href="https://twitter.com/codeprinceton" target="_blank"><span class="fa fa-twitter"></span></a>
                            <a href="https://github.com/codeforprinceton" target="_blank"><span class="fa fa-github-square"></span></a>
                            <a href="http://codeforprinceton.slack.com/" target="_blank"><span class="fa fa-slack"></span></a>
                            <a href="https://www.meetup.com/codeforprinceton/" target="_blank"><span class="fa fa-meetup"></span></a>
                        </div>                        
                        <!-- ./social links -->
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
            </div>
            <!-- ./page footer -->
            
        </div>        
        <!-- ./page container -->
        
        <!-- page scripts -->
        <script type="text/javascript" src="<?=  base_url(); ?>/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?=  base_url(); ?>/js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?=  base_url(); ?>/js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="<?=  base_url(); ?>/js/plugins/appear/jquery.appear.js"></script>
        
        <script type="text/javascript" src="<?=  base_url(); ?>/js/actions.js"></script>                
        <!-- ./page scripts -->
    </body>
</html>






