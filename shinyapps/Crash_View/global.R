# Crash View
# NJ Accident Analysis
# Jiahuan Kang
# Date: Mar 17, 2017

# global.R

###############################################################################
#                         LOAD PACKAGES AND MODULES                          #
###############################################################################
require(magrittr)
require(plotly)
require(plyr)
require(dplyr)
require(shiny)
require(DT)
require(shinydashboard)
require(shinyjs)
require(rCharts)
require(ggplot2)

###############################################################################
#                               LOAD DATA                                     #
###############################################################################


#Index Box data
load("data/fatality_car.Rda")


#Fatality data
  load("data/Fatal.Rda")


#Trendline data
for (yr in 2001:2014){
  load(paste("data/Accbygender",yr,".Rda",sep=""))
  assign(paste("Accbygender",yr,sep=""), Accbygender)
}
#Bar chart data
for (yr in 2001:2014){
  load(paste("data/AccDoW",yr,".Rda",sep=""))
  assign(paste("AccDoW",yr,sep=""), barchart0)
}

#Piechart data
load("data/piechart.Rda")

#Barchart data
load(paste("data/barchart",".Rda",sep=""))
assign(paste("barchart",2001,sep=""), barchart)


