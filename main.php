<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="vedant">
    <meta name="'description" content="ROAD ACCIDENT DATA OF INDIA">
    <title>ACCIDENT DATA</title>
    <link rel="stylesheet">
    <style>
        .column {
    float: left;
    width: 32.5%;
    padding: 5px;
    
  }
p{
    font-weight: 600;
    color: rgb(228, 228, 228);
}
  .row::after {
    content: "";
    clear: both;
    display: table;    
  }
  body {
    text-align: center;
    padding: 5px;
    background-color:#080034;
    font-size: 30px;
  }

h2{
    font-size: 30px;
    color:#8c1c13;
}

  
ul{
    color: #ffffff;
    display:flex;
    flex-direction:row;
    text-decoration: none;
    list-style: none;

}

li{
   
    padding: 10px;
}
.options{
    opacity: 0.5;
    border: 2px solid rgb(200, 227, 255);
    border-radius: 4px;
    color:rgb(1, 1, 1);
    background-color: rgb(200, 227, 255);
   
}
#imgg{
    top: 0px;
    opacity:0.8;
    width:1500px;
    height: 750px;
}
.inside{
    position: absolute;
    top: 600px;
}
.out{
    position: relative;
}

.t{
    /* top:0px; */
    font-weight: 400;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-decoration: none;
    color:rgb(0, 0, 0);
}
.t:hover{
    font-weight: 750;
}
#i1 ,#i2 ,#i3{
    opacity: 0.742;
}

    </style>
</head>

<body>
    <div class="out">
        <nav class="options">
            <ul>
             <li > <a class="t" href="main.php">Home</a></li>
             <li > <a class="t" href="about.php">About Us</a></li>
             <li >
                 <a class="t" href="form.php">
                     DATA 1
                 </a></li>

                 <li ><a class="t" href="form2.php">
                     DATA 2
                 </a></li>
                
            </ul> 
        
</nav>
        <img src="https://assets.telegraphindia.com/telegraph/2022/Mar/1647830915_accident1.jpg" id="imgg">
        <div class="inside">
          

        <br><br><br><br><br><br><br><br><br>
            <main>
                <div class="row">
                    <div class="column">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUGSul6QAuEgmzLAq1r1M69rZYQEFtbmnK0A&usqp=CAU"
                            alt="acc1" style="width:300px" id="i1">
                    </div>
                    <div class="column">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyl5Rg8T-7_sfCfeSieclVmPWGwDs4XPm2eQ&usqp=CAU"
                            alt="acc2" style="width:300px" id="i2">
                    </div>
                    <div class="column">
                        <img src="data:image/png;base64,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"
                            alt="acc3" style="width:60%" id="i3">
                    </div>
                </div>
        
                <br><br>
                <div>
                    <p>Traffic collisions in India are a major source of deaths, injuries and property damage every year. 
                        The
                        National Crime Records Bureau (NCRB) 2021 report states that there were 155,622 fatalities, highest
                        since 2014, out of which 69,240 deaths were due to two-wheelers.A study by IIT Delhi points out that the
                        national highways constitute only 2% of the length of roads in India, but they account for 30.3% of
                        total road accidents and 36% of deaths.</p>
                    <img src="https://www.rushlane.com/wp-content/uploads/2020/06/road-deaths-india-report-corona-lockdown.jpg" alt="STATISTICS" width="1350px" height="500px" style="opacity: 0.75;">
                    <p>Tamil Nadu records the highest road collisions for a decade and its capital Chennai has more collisions
                        than any other city in India. 
                        The city has had the dubious distinction of having one of the highest
                        rates of death from road accidents globally from as far back as the 1960s at a time when the number of
                        vehicles in the city was a minuscule fraction of that in larger metropolises of the world such as New
                        York and Tokyo.In New Delhi, the capital of India, the frequency of traffic collisions is 40 times
                        higher than the rate in London, the capital of the United Kingdom.
                        Traffic collision-related deaths increased from 13 per hour in 2008 to 14 per hour in 2009.In 2015, 15 people per hour die due to road accident according to NGO 'Indians for Road Safety'.
                        More than 40% of these casualties are associated
                        with motorcycles and trucks. 
                        In India, there are 295 million cars in 2019, 272 million in 2018,
                        according to Transport Ministry data.The most collision-prone time on Indian roads is during the peak
                        hour at afternoon and evening.According to road traffic safety experts, the actual number of casualties
                        may be higher than what is documented, as many traffic collisions go unreported. Moreover, victims who
                        die some time after the collision, a span of time which may vary from a few hours to several days, are
                        not counted as car crash victims.</p>
                </div>
            </main>
        
            
                <p>
                    <a href="#">Back to Top</a>
                </p>
           
     </div>
        
        

           
    </div>
    
</body>

</html>