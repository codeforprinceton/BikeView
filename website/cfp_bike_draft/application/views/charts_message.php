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
    
    <!-- Start of D3 styles -->
    <link rel='stylesheet' href='<?=  base_url();?>/nvd3/css/nv.d3.css'>
    <link rel='stylesheet' href='<?=  base_url();?>/nvd3/css/rNVD3.css'>

    <script src='<?=  base_url();?>/nvd3/js/jquery-1.8.2.min.js' type='text/javascript'></script>
    <script src='<?=  base_url();?>/nvd3/js/d3.v3.min.js' type='text/javascript'></script>
    <script src='<?=  base_url();?>/nvd3/js/nv.d3.min-new.js' type='text/javascript'></script>
    <script src='<?=  base_url();?>/nvd3/js/fisheye.js' type='text/javascript'></script>

    <style>
    .rChart {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 1100px;
      height: 500px;
    }
    </style>
    <!-- End of D3 styles -->






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
                            <h1>Data Analysis</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">For Data Analysts</a></li>
                                <li class="active">Data Analysis</li>
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
                            <h2 class="heading-underline" style="padding-top: 10px; padding-bottom: 10px;">NJ Bicycle Crashes Visualized</h2>
                        </div>

                        <div class="row" style="font-size: 14px;">
                            <div class="container"><!-- start of tab contents container -->
                                
                                <ul class="nav nav-tabs responsive"> <!-- Tab Menu -->
                                  <li class="active"><a href="#tab_a" data-toggle="tab">By Month</a></li>
                                  <li><a href="#tab_b" data-toggle="tab">By Week</a></li>
                                  <li><a href="#tab_c" data-toggle="tab">By Day of the Week</a></li>
                                  <li><a href="#tab_d" data-toggle="tab">On Street Intersections</a></li>
                                  <li><a href="#tab_e" data-toggle="tab">D3</a></li>

                                </ul> <!-- end of Tab Menu -->
                               
                                <div class="tab-content"> <!-- start of contents of tabs -->
                                        




                                         <div class="tab-pane active" id="tab_a">
                                            <h4><br>Crashes by Month </h4>
                                            <p><iframe width="100%" height="500px" frameBorder= "0" src="https://plot.ly/~jacqzwy/4.embed"></iframe></p>
                                        <br></p>
                                        </div>

                                        <div class="tab-pane" id="tab_b">
                                            <h4><br>Crashes by Week</h4>
                                            <p><iframe width="100%" height="500px" frameBorder = "0" src="https://plot.ly/~jacqzwy/2.embed"></iframe></p>
                                        </div>
                                        <div class="tab-pane" id="tab_c"> <!-- start of tab a active and contents -->
                                            <h4><br> Crashes by day of the week</h4>
                                            <p>
                                            <iframe width="100%" height="500px" frameBorder="0" src="<?= base_url() ?>/Accident_day_of_week.html"></iframe
                                            </p>
                                        </div> <!-- end of tab a active and contents -->

                                        <div class="tab-pane" id="tab_d"> <!-- start of tab b active and contents -->
                                            <h4><br> Crashes on street intersection</h4>
                                            <p></p>

                                           
                                        </div><!-- end of tab b active and contents -->


                                        <div class="tab-pane fade" id="tab_e">
                                            <h4><br>D3 </h4>
                                            <p>
                                                
                                            <div id="container">

<div id = 'chart198e45be5' class = 'rChart nvd3' style="width: 1100px; height: 500px;"></div></div>
                                            </p>
    <script type='text/javascript'>
 $(document).ready(function(){
      drawchart198e45be5()
    });
    function drawchart198e45be5(){
      var opts = {
 "dom": "chart198e45be5",
"width":    1100,
"height":    500,
"x": "year",
"y": "nn",
"group": "Crash.Day.Of.Week",
"type": "multiBarChart",
"groupSpacing":      5,
"id": "chart198e45be5"
},
        data = [
 {
 "Crash.Day.Of.Week": "F ",
"nn": 112,
"year": 2001
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 111,
"year": 2001
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 126,
"year": 2001
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 129,
"year": 2001
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 89,
"year": 2001
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 72,
"year": 2001
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 86,
"year": 2001
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 102,
"year": 2002
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 72,
"year": 2002
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 86,
"year": 2002
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 95,
"year": 2002
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 91,
"year": 2002
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 92,
"year": 2002
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 71,
"year": 2002
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 109,
"year": 2003
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 105,
"year": 2003
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 102,
"year": 2003
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 124,
"year": 2003
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 106,
"year": 2003
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 92,
"year": 2003
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 113,
"year": 2003
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 127,
"year": 2004
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 88,
"year": 2004
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 138,
"year": 2004
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 122,
"year": 2004
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 104,
"year": 2004
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 65,
"year": 2004
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 94,
"year": 2004
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 132,
"year": 2005
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 84,
"year": 2005
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 135,
"year": 2005
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 110,
"year": 2005
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 115,
"year": 2005
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 78,
"year": 2005
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 97,
"year": 2005
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 124,
"year": 2006
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 99,
"year": 2006
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 132,
"year": 2006
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 115,
"year": 2006
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 98,
"year": 2006
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 90,
"year": 2006
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 87,
"year": 2006
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 113,
"year": 2007
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 91,
"year": 2007
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 115,
"year": 2007
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 133,
"year": 2007
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 75,
"year": 2007
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 86,
"year": 2007
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 97,
"year": 2007
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 97,
"year": 2008
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 78,
"year": 2008
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 81,
"year": 2008
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 121,
"year": 2008
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 95,
"year": 2008
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 68,
"year": 2008
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 73,
"year": 2008
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 103,
"year": 2009
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 73,
"year": 2009
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 70,
"year": 2009
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 110,
"year": 2009
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 80,
"year": 2009
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 73,
"year": 2009
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 68,
"year": 2009
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 103,
"year": 2010
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 72,
"year": 2010
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 102,
"year": 2010
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 90,
"year": 2010
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 73,
"year": 2010
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 66,
"year": 2010
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 61,
"year": 2010
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 77,
"year": 2011
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 86,
"year": 2011
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 94,
"year": 2011
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 118,
"year": 2011
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 81,
"year": 2011
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 91,
"year": 2011
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 62,
"year": 2011
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 86,
"year": 2012
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 78,
"year": 2012
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 83,
"year": 2012
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 96,
"year": 2012
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 67,
"year": 2012
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 78,
"year": 2012
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 87,
"year": 2012
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 89,
"year": 2013
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 69,
"year": 2013
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 80,
"year": 2013
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 93,
"year": 2013
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 71,
"year": 2013
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 68,
"year": 2013
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 68,
"year": 2013
},
{
 "Crash.Day.Of.Week": "F ",
"nn": 71,
"year": 2014
},
{
 "Crash.Day.Of.Week": "M ",
"nn": 67,
"year": 2014
},
{
 "Crash.Day.Of.Week": "S ",
"nn": 86,
"year": 2014
},
{
 "Crash.Day.Of.Week": "SA",
"nn": 102,
"year": 2014
},
{
 "Crash.Day.Of.Week": "TH",
"nn": 82,
"year": 2014
},
{
 "Crash.Day.Of.Week": "TU",
"nn": 73,
"year": 2014
},
{
 "Crash.Day.Of.Week": "W ",
"nn": 69,
"year": 2014
}
]

      if(!(opts.type==="pieChart" || opts.type==="sparklinePlus" || opts.type==="bulletChart")) {
        var data = d3.nest()
          .key(function(d){
            //return opts.group === undefined ? 'main' : d[opts.group]
            //instead of main would think a better default is opts.x
            return opts.group === undefined ? opts.y : d[opts.group];
          })
          .entries(data);
      }

      if (opts.disabled != undefined){
        data.map(function(d, i){
          d.disabled = opts.disabled[i]
        })
      }

      nv.addGraph(function() {
        var chart = nv.models[opts.type]()
          .width(opts.width)
          .height(opts.height)

        if (opts.type != "bulletChart"){
          chart
            .x(function(d) { return d[opts.x] })
            .y(function(d) { return d[opts.y] })
        }

       d3.select("#" + opts.id)
        .append('svg')
        .datum(data)
        .transition().duration(500)
        .call(chart);

       nv.utils.windowResize(chart.update);
       return chart;
      });
    };
</script>

                                        
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






