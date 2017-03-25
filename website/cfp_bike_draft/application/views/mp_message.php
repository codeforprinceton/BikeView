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
        
        <link rel="stylesheet" type="text/css" href="<?=  base_url();?>/css/styles.css" media="screen" /> 
    
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
                            <h1>Safety 101</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">For the Gov't</a></li>
                                <li class="active">NJ Bike Master Plan</li>
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
                    <div class="page-content-holder padding-v-30">

                    <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
                            <h2 class="heading-underline" style="padding-top: 10px; padding-bottom: 10px;">NJ Bike Master Plan</h2>
                        </div>

                        <div class="row" style="font-size: 14px;">
                            <div class="container"><!-- start of tab contents container -->
                                
                                <ul class="nav nav-tabs responsive"> <!-- Tab Menu -->
                                  <li class="active"><a href="#tab_a" data-toggle="tab">Pre-Ride Checklist</a></li>
                                  <li><a href="#tab_b" data-toggle="tab">It's the Law!</a></li>
                                  <li><a href="#tab_c" data-toggle="tab">Gear up</a></li>
                                  <li><a href="#tab_d" data-toggle="tab">Riding Tips</a></li>
                                </ul> <!-- end of Tab Menu -->
                               
                                <div class="tab-content"> <!-- start of contents of tabs -->
                                        

                                         <div class="tab-pane active" id="tab_a">
                                            <h4><br>Pre-Ride Checklist</h4>
                                            <p></p>
                                        <br></p>
                                        </div>

                                        <div class="tab-pane" id="tab_b">
                                            <h4><br></h4>
                                            <p>
                                                <script type="text/javascript">
                                                function ShowHideDiv(chkPassport) {
                                                    var dvPassport = document.getElementById("dvPassport");
                                                    dvPassport.style.display = chkPassport.checked ? "block" : "none";
                                                }
                                                 function ShowHideDiv2(chkPassport2) {
                                                    var dvPassport2 = document.getElementById("dvPassport2");
                                                    dvPassport2.style.display = chkPassport2.checked ? "block" : "none";
                                                }
                                            </script>
                                            <div id="nj" style="font-size: 17px; font-color: #aaa;">
                                            <label for="chkPassport">
                                                <input type="checkbox" id="chkPassport" onclick="ShowHideDiv(this)" />
                                                NJ State Law
                                            </label> </div>

                                            <div id="princeton" style="font-size: 17px;">
                                            <label for="chkPassport2">
                                                <input type="checkbox" id="chkPassport" onclick="ShowHideDiv2(this)" />
                                                Princeton Ordinances
                                            </label>
                                            </div>
                                            <hr />
                                            <div id="dvPassport" style="display: none; font-size: 16px; font-weight: bold;">
                                            <br>
                                                NJ State Law

                                            </div>
                                            <div id="dvPassport2" style="display: none; font-size: 16px; font-weight: bold">
                                                <br>
                                               

                                                Princeton Ordinances

                                            </div>



                                            </p>
                                        </div>
                                        <div class="tab-pane" id="tab_c"> <!-- start of tab a active and contents -->
                                            <h4><br> Gear Up</h4>
                                            <p>
                                            
                                            </p>
                                        </div> <!-- end of tab a active and contents -->

                                        <div class="tab-pane" id="tab_d"> <!-- start of tab b active and contents -->
                                            <h4><br> Riding Tips</h4>
                                            <p></p>

                                           
                                        </div><!-- end of tab b active and contents -->


                                        <div class="tab-pane fade" id="tab_e">
                                            <h4><br>D3 </h4>
                                            <p>
                                                
                                        
                                            </p>
              
                                        </div>





                                       
                                </div><!-- tab content -->
                                </div><!-- end of container -->


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






