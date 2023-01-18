<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          .form2{
            font-weight:550;
            font-size:27px;
            padding:10px;
        top: 45px;
        position: absolute;
  }
 body{
   background-color: rgb(0, 0, 62);
 }
        b{
          font-size:28px;
        }
  .category{
    margin: 0px;
    color:rgb(255, 255, 253);
    background-color:black;
     width: 2000px;
  }
#imggg
{
  opacity: 0.6;
   width: 2000px;
}
    </style>
</head>
<body>
    <br><br>
   <div class="category">
    <img src="https://images.unsplash.com/photo-1668162456452-11e6ca7c8608?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="fd" id="imggg">
            <form action="mysql2.php" method="post" class="form2">
              <h2>Access Data By Category</h2>
              <br>
            <label for="cars">Accident Type:</label>

            <select name="type_accident">
            <option value="hitnrun">Hit & run</option>
              <option value="headoncollision">Head on Collision</option>
              <option value="Rearendcollision">Rear End Collision</option>
              <option value="none">None</option>
            </select>
            
            <br><br>
  
            <label for="cars">Accident Cause:</label>
            <select name="cause">
            <option value="Overspeeding">Over Speeding</option>
              <option value="alcohol">Alcohol Consumption</option>
              <option value="phone">Phone Use</option>
              <option value="RoadCondition">Road Condition</option>
              <option value="none">None</option>
            </select>
  
            <br><br>
            <label for="cars">Accident Weather:</label>
            <select name="weather">
            <option value="sunny">Sunny</option>
              <option value="thunderstorm">Thunderstorm</option>
              <option value="foggy">Foggy </option>
              <option value="none">None</option>
            </select>
  
            <br><br>
  
            <label for="cars">Accident Damage:</label>
            <select name="damage">
            <option value="1lakh">0-100000</option>
              <option value="1lakhpls">100000-1000000</option>
              <option value="10lakhpls">more than 1000000</option>
              <option value="none">None</option>
            </select>
            <br><br>
            
            <label for="cars">License Type:</label>
            <select name="license">
            <option value="valid">Valid License</option>
              <option value="learner">Learner License</option>
              <option value="invalid">Invalid License</option>
              <option value="none">None</option>
            </select>
  
            <br><br>
            <label for="cars">Area Type:</label>
            <select name="unb">
            <option value="urban">Urban</option>
              <option value="rural">Rural</option>
              <option value="none">None</option>
            </select>

            <br><br>
            <label for="cars">Gender:</label>
            <select name="ged">
            <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="none">None</option>
            </select>

            <br><br>
            <label for="cars">Age group:</label>
            <select name="age">
            <option value="a">Below 18</option>
              <option value="b">18-40</option>
              <option value="c">40-75</option>
              <option value="none">None</option>
            </select>

            
            <br><br>
            <label for="cars">Road Junction:</label>
            <select name="road">
            <option value="p">T junction</option>
              <option value="q">Y junction</option>
              <option value="r">Staggered junction</option>
              <option value="none">None</option>
            </select>
            <br><br>
             <input type="submit" value="view data">
            </form>
          </div>
</body>
</html>