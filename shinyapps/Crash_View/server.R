#
# This is the server logic of a Shiny web application. You can run the
# application by clicking 'Run App' above.
#
# Find out more about building applications with Shiny here:
#
#    http://shiny.rstudio.com/
#



######Begin Server Function######

shinyServer(function(input, output,session) {
  addClass(selector = "body", class = "sidebar-collapse")
  

#Render Index Box
  
  output$usViBox <- renderValueBox({
       valueBox("647", " Killed Per Year in Car Accidents ",
      icon = icon("heartbeat"), color = "red"
    )
  })
  
  # Highest Home Value Index by City Box
  output$highestViBox <- renderValueBox({
    valueBox("99045", " Injured Per Year in Car Accidents  ",
             icon = icon("ambulance"), color = "orange"
    )
  })
  
  # Render Annual Price Growth  Box
  output$usAnnualBox <- renderValueBox({
    current <- currentState[ which(currentState$State == "United States"), ]
    valueBox(
      paste0(round(current$Annual * 100,4), "%"), paste(current$State,
                                                        " Annual Change in Home Values"), icon = icon("bar-chart"), color = "red"
    )
  })
  
  
  
  
  # Render Top 10 States bar chart
  # output$Fatal <- renderChart({
  #   p <- nPlot(nn ~ year, group="Crash.Day.Of.Week",data=Fatal, type="discreteBarChart")
  #   # p$params$width <- 1000
  #   # p$params$height <- 200
  #   p$xAxis(staggerLabels = TRUE)
  #   p$yAxis(axisLabel = "Annual Growth (%)", width = 50)
  #   return(p)
  # })
  # 
  
  
  output$Fatal2 <- renderPlotly({
    
    z <-  plot_ly(Fatal,x=~year, y=~nn,color=~Crash.Day.Of.Week, type="bar",
                  height=400) %>%
      layout(title="Fatality by Day of Week",
             titlefont=list(
               color="grey"
             )
      )
    
    z
    
  })
  
  
  
  
  
##Create Trendlines
  output$trendline <- renderPlotly({
    
    m <- get(paste("Accbygender",input$year,sep = ""))[order(get(paste("Accbygender",input$year,sep = ""))$count,decreasing=TRUE)[1:5],]
    
    
    a <- list(
      x=m$date,
      y=m$count,
      text=paste(m$count,m$color,"Crashes on", m$date),
      xref="x",
      yref="y",
      showarrow=T,
      arrowhead=3,
      ax=20,
      zy=-40
    )
    
    
    p<-  plot_ly(get(paste("Accbygender",input$year,sep = "")),x=~date, y=~count,
                 height=400) %>% 
      add_lines(color=~color,colors=c('Male'="#2b8cbe", 'Female'="#feb24c",'Unknown'="#636363")) %>%
      add_markers(
        hoverinfo = "text",
        text = ~paste(count,color,"Crashes on",date),
        marker=list(line = list(color = "black",width=1), opacity=0.3)
      )%>%
      layout( title="NJ Accidents by gender from 2001 to 2014", 
              
              #Add annotations
              annotations=a,
              titlefont=list(
                color="grey",
                size=20
              ),
              xaxis = list(
                nticks=24,
                   color="grey",
                showticksuffix="all",
                titlefont=list(
                  color="black"
                  ),
                
                rangeselector = list(
                  buttons = list(
                    list(
                      count = 3, 
                      label = "3 mo", 
                      step = "month",
                      stepmode = "backward"),
                    list(
                      count = 6, 
                      label = "6 mo", 
                      step = "month",
                      stepmode = "backward"),
                    list(
                      count = 1, 
                      label = "1 yr", 
                      step = "year",
                      stepmode = "backward"),
                    list(
                      count = 1, 
                      label = "YTD", 
                      step = "year",
                      stepmode = "todate"),
                    list(step = "all")))
              ),
              yaxis=list(title="Number of drivers in accident per day")
      )
    p
  })
  
  
  
####Bar Chart#######
  
  output$bar_DOW <- renderPlotly({
    
    z <-  plot_ly(get(paste("AccDoW",input$year,sep = "")),x=~County.Name, y=~n,color=~Crash.Day.Of.Week, type="bar",
                  height=400) %>%
      layout(title="NJ Crash by Day of Week",
             titlefont=list(
               color="grey"
                  )
             )
    
    z
    
  })
  
  
  
  output$bar_County <- renderPlotly({
    
    z <-  plot_ly(barchart2001, x=~countyfreq$Var1, y=~countyfreq$Freq, type="bar",
                  height=400) %>%
      layout(title="Number of NJ Crash by County",
             titlefont=list(
               color="grey"
             )
      )
    
    z
    
  })
  
  
  #Insert the map app iframe
  
  output$frame <- renderUI({
    input$Member
    my_test <- tags$iframe(width="100%",height="520",frameborder="0",src="https://chefele1.carto.com/viz/127afc18-933d-11e6-93c5-0e233c30368f/embed_map")
    print(my_test)
    my_test
  })
  
  
  output$frame2 <- renderUI({
    input$Member
    my_test <- tags$iframe(width="100%",height="520",frameborder="0",src="https://chefele1.carto.com/viz/ed3e6638-06d7-11e7-af00-0ecd1babdde5/embed_map")
    print(my_test)
    my_test
  })
  
  output$frame3 <- renderUI({
    input$Member
    my_test <- tags$iframe(width="100%",height="520",frameborder="0",src="http://arcg.is/2kXqeSf")
    print(my_test)
    my_test
  })
  
  
  
  
  
  
  
})