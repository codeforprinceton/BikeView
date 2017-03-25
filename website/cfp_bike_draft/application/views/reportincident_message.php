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
                            <h1>Report a Bicycle Crash Incident</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="<?= base_url(); ?>">Home</a></li>
                                <li><a href="#">For Bikers</a></li>
                                <li class="active">Report an Incident</li>
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
                            <h2 class="heading-underline">Report a Bicycle Crash Incident</h2>
                            <div class="block-heading-text">
                               <h3>If anyone is injured, CALL <strong style="color: red;">9-1-1</strong> now</h3>
                            </div>
                        </div>
                        
                        <div class="row">
                            
                            <div class="col-md-12">

                            <form>
                            <div class="form-group"">
                            <br>
                            <label for="yearText">What year did it happen?</label> 
                            <input type="number" min="1900" max="2099" step="1" name="in_year" id="yearText" aria-describedby="YearText" value="2017" />
                             </div>



                             <div class="form-group">
                        <label for="monthSelect">What month did it happen?</label>
                        <select class="form-control" name="in_month" id="monthSelect">
                          <option>January</option>
                          <option>February</option>
                          <option>March</option>
                          <option>April</option>
                          <option>May</option>
                          <option>June</option>
                          <option>July</option>
                          <option>August</option>
                          <option>September</option>
                          <option>October</option>
                          <option>November</option>
                          <option>December</option>
                          <option>Can't remember</option>
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="timeday">What time of day?</label>
                        <select multiple class="form-control" name="in_timeday" id="timeday">
                          <option>Morning (between 6am and 11am)</option>
                          <option>Afternoon (between 12nn and 6pm)</option>
                          <option>At Night (between 6pm and 11pm)</option>
                          <option>Late Night(between 12mn and 5am)</option>
                          <option>Can't remember</option>
                        </select>
                      </div>
                    <div class="form-group">
                        <label for="weather">What was the weather like that day?</label>
                        <select multiple class="form-control" name="in_wx" id="weather">
                          <option>Clear, no haze</option>
                          <option>Overcast, no haze</option>
                          <option>Hazy condition</option>
                          <option>Some form of precipitation (Snow, Rain etc)</option>
                          <option>Can't remember</option>
                        </select>
                      </div>

                       <div class="form-group">
                        <label for="causeSelect">What was the cause of the incident?</label>
                        <select class="form-control" name="in_cause" id="causeSelect">
                          <option>Another vehicle</option>
                          <option>Potholes, Street posts, Street cracks</option>
                          <option>Fallen debris (trees, rocks, mud, etc)</option>
                          <option>Another cyclist</option>
                          <option>Pedestian</option>
                          <option>Wildlife</option>
                          <option>Bad road condition due to weather (snow, slush, rain, etc)</option>
                        </select>
                      </div>

                    <div class="form-group">
                        <label for="injurySelect">Were there injuries?</label>
                        <select class="form-control" name="injury" id="injurySelect">
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                    </div>




                    <div class="form-group">
                        <label for="injurySelect">Was the incident reported to the police or any government agencies?</label>
                        <select class="form-control" name="in_reported" id="reportedSelect">
                          <option>Yes</option>
                          <option>No</option>
                        </select>
                    </div>
                     
                     <fieldset class="form-group">
                        <legend>What was your reason for traveling?</legend>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_reason" id="optionreason" value="work" checked> Going to School
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_reason" id="optionreason" value="work" checked> Going to Work
                          </label>
                        </div>
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_reason" id="optionreason2" value="recreation"> Recreation (i.e. exercise, weekend with family, etc)
                          </label>
                        </div>
                      </fieldset>


                      <div class="form-group">
                        <label for="countySelect">What County do you belong to?</label>
                        <select class="form-control" name="in_county" id="countySelect">
                          <option>Atlantic</option>
                          <option>Bergen</option>
                          <option>Burlington</option>
                          <option>Camden</option>
                          <option>Cape May</option>
                          <option>Cumberland</option>
                          <option>Essex</option>
                          <option>Gloucester</option>
                          <option>Hudson</option>
                          <option>Hunterdon</option>
                          <option>Mercer</option>
                          <option>Middlesex</option>
                          <option>Monmouth</option>
                          <option>Morris</option>
                          <option>Ocean</option>
                          <option>Passaic</option>
                          <option>Salem</option>
                          <option>Somerset</option>
                          <option>Sussex</option>
                          <option>Union</option>
                          <option>Warren</option>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="remarks">Any additional information that you would like to share?</label>
                        <textarea class="form-control" name="in_rmks" id="remarks" rows="2"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="in_contact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>


                       <fieldset class="form-group">
                        <legend>What is your ethnicity?</legend>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_eth" id="optionA" value="Asian" checked> Asian
                          </label>
                        </div>
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_eth" id="optionAA" value="AA"> Black or African American
                          </label>
                        </div>
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_eth" id="optionH" value="Hispanic"> Hispanic or Latino
                          </label>
                        </div>
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_eth" id="optionPI" value="PI"> Native Hawaiian or other Pacific Islander
                          </label>
                        </div>
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_eth" id="optionMulti" value="Multi"> Multiracial
                          </label>
                        </div>
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_eth" id="optionW" value="White"> White
                          </label>
                        </div>

                        <div class="form-group"">
                            <br>
                            <label for="ageText">What is your age?</label> 
                            <input type="number" min="8" max="99" step="1" name="in_age" id="ageText" aria-describedby="ageText" value="" />
                             </div>

                      </fieldset>
                      <input type="submit" class="btn btn-primary" value="Submit Report" />
                    </form>
















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






