#
# This is the user-interface definition of a Shiny web application. You can
# run the application by clicking 'Run App' above.
#
# Find out more about building applications with Shiny here:
#
#    http://shiny.rstudio.com/
#


inputUserid <- function(inputId, value='') {
  #   print(paste(inputId, "=", value))
  tagList(
    singleton(tags$head(tags$script(src = "js/md5.js", type='text/javascript'))),
    singleton(tags$head(tags$script(src = "js/shinyBindings.js", type='text/javascript'))),
    tags$body(onload="setvalues()"),
    tags$input(id = inputId, class = "userid", value=as.character(value), type="text", style="display:none;")
  )
}

inputIp <- function(inputId, value=''){
  tagList(
    singleton(tags$head(tags$script(src = "js/md5.js", type='text/javascript'))),
    singleton(tags$head(tags$script(src = "js/shinyBindings.js", type='text/javascript'))),
    tags$body(onload="setvalues()"),
    tags$input(id = inputId, class = "ipaddr", value=as.character(value), type="text", style="display:none;")
  )
}


######################Defines Dashboard Page##########
dashboardPage(
  skin="yellow",
  
  dashboardHeader(
    title=tags$a(href="http://codeforprinceton.org/",alt="Code for Princeton",tags$i(class="icon-codeforprinceton-3", style="font-size:50px;",   onMouseOver="this.style.color='rgb(34, 45, 50)'",
                                                                                     onMouseOut="this.style.color='rgb(255, 255, 255)'")),
    # Dynamic Message
    # dropdownMenuOutput("messageMenu"),
    
    #Disable Header Bar
    # disable = F,
    
    dropdownMenu(
      
      icon = icon("users"),
      type = "message",
      messageItem(
        icon=icon("user"),
        from = "Jiahuan KANG",
        message = " "
      ),
      messageItem(
        icon=icon("user"),
        from = "Manbir Mohindru",
        message = " "
      ),
      messageItem(
        icon=icon("user"),
        from = "CHris Hefele",
        message = "New member"
      ),
      messageItem(
        icon=icon("user"),
        from = "Paz Tarrio",
        message = "New member"
      ),
      messageItem(
        icon=icon("user"),
        from = "Deva Prasad",
        message = "New member"
      ),
      messageItem(
        icon=icon("user"),
        from = "Vijay Appasamy",
        message = "New member"
      ),
      messageItem(
        icon=icon("user"),
        from = "Ashok Khandelwhl",
        message = "New member"
      ),
      messageItem(
        icon=icon("user"),
        from = "Fred Kelly",
        message = "New member"
      )
      
    )
    
  ),
  
  
  ################Defines Dashboard Sidebar#############
  dashboardSidebar(
    sidebarMenu(id="sidebarMenu",
                
                # menuItem("Control Panel",tabName = "Dashboard",icon = icon("dashboard")),
                menuItem("Home",tabName = "Home",icon = icon("home")),
                
                menuItem("Car", tabName = "Car", icon=icon("th"),badgeLabel = "updating", badgeColor = "green"),
                menuItem("Bike", tabName = "Bike", icon=icon("th"),badgeLabel = "updating", badgeColor = "green"),
                menuItem("Speed Sign", tabName = "SpeedSign", icon=icon("th"),badgeLabel = "updating", badgeColor = "green"),
                menuItem("Code for Princeton",icon=icon("th"),href="http://codeforprinceton.org/",newtab =F),
                menuItem("Github",icon=icon("th"),href="https://github.com/codeforprinceton/uncrash",newtab = F)
    )
  ),
  
  
  
  ######################Dashboard Body#################################
  dashboardBody(
    useShinyjs(),
    
  ###Header
    
    tags$head(
      tags$link(rel = "stylesheet", type = "text/css", href = "NJcrash.css"),
      tags$link(rel = "stylesheet", type = "text/css", href = "icon/css/font-awesome.min.css"),
      tags$link(rel = "stylesheet", type = "text/css", href = "https://file.myfontastic.com/M27ntRiDvYmgVMSDV8e5Qj/icons.css")
    ),
    
  
    
    
  ###TabItems
  tabItems(
    #tab 0
    tabItem(tabName="select"    ),
    
    #tab 1
    tabItem(
      
      tabName="Home",
      
      br(),
      
      br(),
      
##Index box######      
      fluidPage(
        fluidRow(
          column(width = 12,
                 valueBoxOutput("usViBox", width = 3),
                 valueBoxOutput("highestViBox", width = 3),
                 valueBoxOutput("usAnnualBox", width = 3),
                 valueBoxOutput("highestAnnualBox", width = 3)
          )),
        
        
      
        
        
##Image and Overview box####
      fluidRow(width="100%",
              
               
               column(width = 7,
                      box(
                        title = "Vehicle Accident Fatality by Day of Week ",
                        status = "primary",
                        width = 12,
                        solidHeader = FALSE,
                        collapsible = TRUE,
                        plotlyOutput("Fatal2", width = "100%", height = "400px")
                      )
                      # ,
                      # box(
                      #   title = "Top 10 Cities by Annual Home Value Growth",
                      #   status = "primary",
                      #   width = 12,
                      #   height = 255,
                      #   solidHeader = FALSE,
                      #   collapsible = TRUE,
                      #   showOutput("top10CitiesBar", "nvd3")
                      # ) #End of Box
               ),
               
               column(width=5,
                      
                      img(src='car.jpg', align = "center"),    
                                             
                      box(width="100%", collapsible = TRUE, background="black", status="info",title = list(icon("dashboard"),"Overview"), solidHeader = TRUE,
                                   
                                   
                                   
                                   h4("From 2001 to 2014, 9,058 people were killed and 1,386,636 people injured in 4,062,688 car accidents in NJ,
                        that is, on average, 647 people killed and 99,045 people injured per year. With latest data analysis technology, we have found solutions that may reduce these numbers.
                        "),
                                   hr(),
                                   p("The Uncrash team took a look to the traffic accidents in NJ from 2001 to 2014. 
                       The data was analyzed in different ways to look for patterns that would help us to reach conclusions that would ultimately lead to raise awareness about the factors more frequently associated with traffic crashes to avoid/be mindful of those and hopefully diminish the incidence of car crashes.
                       
                       The data analyzed identified geographical points with higher incidence of crashes. Those point coincide most of the times with street intersections.
                       
                       Males are more frequently involved in car crashes than females.
                       
                       Younger population are more frequently involved in car crashes involving only one car.
                       
                       The team propose different ways to visualize these data and different approaches to look at the data from statewide information to street-wide information in the following approach:
                       "),
                                   tags$ol(
                                     tags$li("Big areas - Heatmaps showing areas of high accident frequency"),
                                     tags$li("Accident density map focusing on Route 1. It is the largest contribute to accidents in our local area."),
                                     tags$li("Street level maps showing precise locations of high incidence of crushes (i.e. clusters)")
                                   ) ,
                                   p("Between 2001 and 2014, the traffic crash that involved a higher number of cars in NJ was in Monmouth County, on August 27, 2003.")
                                   
                                   
                               )
                      )
     
               
               ),
        
        fluidRow(width=12,
          tabBox(
            id="tabset2",
            width = "100%",
            tabPanel("Car Crashes",collapsible=TRUE,solidHeader=TRUE,status="warning",
                     # box(width=12,status = "warning",  title=list(tags$i(class="fa fa-map-o")," ","Accidents in Princeton Intersections"),collapsible = TRUE,collapsed = F,
                     p("This street-level maps show the exact locations
                       of accidents in the Princeton/West-Windsor area
                       between 2001 and 2014.  Each accident is represented
                       with a dot. If there were multiple accidents
                       at a specific location, the dots are aggregated
                       and the count shown within a larger circle. 
                       When looking at this street-level detail, it's
                       clear that intersections along major roads 
                       are the most frequent location for accdeints."),
                     
                     
                     htmlOutput("frame")
                     
                     
                     # )
                     ),
            
            tabPanel("Bike Crashes",collapsible=TRUE,solidHeader=TRUE,status="warning",
                     # box(width=12,status = "warning",  title=list(tags$i(class="fa fa-map-o")," ","Accidents in Princeton Intersections"),collapsible = TRUE,collapsed = F,
                     p("This street-level maps show the exact locations
                       of accidents in the Princeton/West-Windsor area
                       between 2001 and 2014.  Each accident is represented
                       with a dot. If there were multiple accidents
                       at a specific location, the dots are aggregated
                       and the count shown within a larger circle. 
                       When looking at this street-level detail, it's
                       clear that intersections along major roads 
                       are the most frequent location for accdeints."),
                     
                     
                     htmlOutput("frame2")
                     
                     
                     # )
                     ),
            
            tabPanel("ArcGIS map",collapsible=TRUE,solidHeader=TRUE,status="warning",
                     # box(width=12,status = "warning",  title=list(tags$i(class="fa fa-map-o")," ","Accidents in Princeton Intersections"),collapsible = TRUE,collapsed = F,
                     p("This street-level maps show the exact locations
                       of accidents in the Princeton/West-Windsor area
                       between 2001 and 2014.  Each accident is represented
                       with a dot. If there were multiple accidents
                       at a specific location, the dots are aggregated
                       and the count shown within a larger circle. 
                       When looking at this street-level detail, it's
                       clear that intersections along major roads 
                       are the most frequent location for accdeints."),
                     
                     
                     htmlOutput("frame3")
                     
                     
                     # )
                     )
            
            )
            )
        ,
        
        fluidRow(
          fluidRow(
            column(6, 
                   # box(width=12,status = "success",collapsible = TRUE,collapsed = F,
                   #        plotlyOutput("pie", width = "auto", height = "auto"),
                   #        box(width = 12, status = "warning",
                   #            h4("County Accident"),
                   #            p("Accidents by County charts shows the porportion of accidents in NJ by County. 
                   #              Of all the counties in NJ, Essex, Bergen, Middlesex county have the most accidents, which accounts to 1/3 of all accidents in NJ")
                   #            )
                   #        ),
                   
                   box(width = 12, status = "primary",
                       img(src="heatmap.png"),
                       box(width = 12, status = "warning",
                           h4("Accident Heat Map"),
                           p("This plot is a heatmap showing accident \"hot-spots\" 
                             in the Princeton & West Windsor areas from 2001-2014. 
                             US Route 1 (the long diagonal line near the
                             center of the image) and downtown Princeton 
                             (the red cluster at the top of the map)
                             are the largest contributors to local accidents.
                             Local and residential streets are not.")
                           
                           )
                       )
                   ),
            
            column(6,
                   box(width = 6, status = "primary",collapsible = TRUE,collapsed = F,
                       img(src="US1.png"),
                       box(width = 12, status = "warning",
                           h4("US Route 1 Chart"),
                           p("This plot shows the accident density on US Route 1
                             in the Princeton, NJ area (as derived from 
                             NJ DOT accident data 2001-2014). 
                             The major cross-streets are shown on the bottom;
                             the correspondence of the peaks with the cross streets
                             shows that most accidents occur at major intersections, 
                             not *between* intersections.")
                         )
                     ),
                 
                 box(width = 6, status = "success",
                     img(src="NJ_Accdt.png"),
                     box(width = 12, status = "warning",
                         h4("Accidents in NJ"),
                         p("Each of the 7,000+ dots on this map represents a NJ 
                           accident with a fatality during the 
                           the pariod 2001-2014,  The main highways
                           can be seen in the pattern of dots, 
                           such as Routes 80 & Route 78 near the top of the plot, 
                           the Garden State Parkway near the right, 
                           Route 1 and the NJ Turnpike near the middle, and 
                           the Atlantic City Expressway near the bottom.
                           ")
                                 
                                 )
                             )
                             )
                  
                  
                             )       
                             ),

              
              # Add Approval box
              fluidRow(
                column(11," "),
                column(1,
                       valueBoxOutput("approvalBox", width="5%"),
                       actionButton("count","Click")
                       # h5(textOutput("counter"))
                       # textOutput("testtext")
                )
              )
        
      )
      
      
      
    ),
    
  
    # tab 5
    tabItem(tabName="Car",
            
            br(),
            
            br(),
            
            # ##Index box######      
            # fluidPage(
            #   fluidRow(
            #     column(width = 12,
            #            valueBoxOutput("usViBox", width = 3),
            #            valueBoxOutput("highestViBox", width = 3),
            #            valueBoxOutput("usAnnualBox", width = 3),
            #            valueBoxOutput("highestAnnualBox", width = 3)
            #     )),
              
              
              
              
              
              ##Image and Overview box####
              fluidRow(width="100%",
                       # column(width=12,
                              # box(width=12,status = "warning",  title=list(tags$i(class="fa fa-grav"),"What we discovered?"),collapsible = TRUE,solidHeader = TRUE,
                              
                              
                              # hr(),
                              # selectInput("trendtype", label = "What are you interested in?", 
                              #             choices = list("NJ Accidents by Gender" = 1, "NJ Accidents by Day of Week" = 2, "NJ Accidents by ..." = 3), 
                              #             selected = 1)
                              tabBox(
                                id="tabset1",
                                width = "100%",
                                
                                tabPanel("NJ Accident by Gender",collapsible=TRUE,solidHeader=TRUE,status="warning",plotlyOutput("trendline", width = "100%", height = "400px"),width="1280px",h5("Note: More accidents happen at the beginning and the end of the year.")),
                                tabPanel("Accidents by Day of Week",collapsible=TRUE,solidHeader=TRUE,status="warning",plotlyOutput("bar_DOW", width = "100%", height = "400px"),width="1280px",h5("Note: Friday has the most accidents while Sunday has the least.")),
                                tabPanel("Accidents by County",collapsible=TRUE,solidHeader=TRUE,status="warning",plotlyOutput("bar_County", width = "100%", height = "400px"),width="1280px",h5("Note: ** has the most accident vs population."))
                                ,
                                
                                # box(width = 12,
                                sliderInput("year", label = "Select Year:",min = 2001, max = 2014, value = 2001, sep="", step=NULL, animate=TRUE, width="100%")
                                # )
                                
                              )
                              
                              # ) 
                       # )
              )
      ), 
    
    # tab 6
    tabItem(tabName="Bike",
            h2("Widgets tab content")
            ),
    
    #tab 7
    tabItem(tabName="SpeedSign",
            h2("Widgets tab content")
    )
            
  )
    
  )
  

  
)

