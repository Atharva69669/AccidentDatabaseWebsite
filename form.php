
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
 #imgg{
  width: 1600px;
  height: 1500px;
 }
  .Box{
    position:absolute;
    top: 0px;
    left: 0px;
    margin:auto;
  }
 
  .form1{
    padding: 10px;
    top: 20px;
    position: absolute;
  }
  body{
    background-color:rgba(3, 21, 72, 0.806)
  }

  .innerbox{
    font-size: 25px;
    border: 3px solid white;
    position: absolute;
    top:100px;
    left: 8px;
    width: 1500px;
    height: 800px;
    background-color: rgb(0, 0, 0);
   border-radius: 5px;
   color: aliceblue;
   opacity: 0.55;
   
  }
  input[type='text']{
    width:300px;
  height: 30px; 
  border-radius: 5px;
}

input[type='submit']{
    width:75px;
  height: 30px; 
  border-radius: 5px;
}
input[type='text']:hover{
    background-color: rgb(137, 137, 137);
}
input[type='submit']:hover{
    background-color: rgb(136, 136, 136);
}
 


  .innerbox:hover{
    opacity: 1.0;
  }
</style>
</head>
<body>
 
  <div class="out">
    
    <div class="Box">
      <img src="https://images.unsplash.com/photo-1611716524065-622312678d68?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1111&q=80" id="imgg">

      
      <div class="innerbox">
        
        <form action="mysql1.php" method="post" class="form1" id="imgg">
          <h1>Accident database</h1>
          <b > Enter the Accident id:</b>
           <input type="text" name="input" placeholder="A1113">
           <br><br>
            
  
           <b > Enter the Corresponding Vehicle id:</b>
           <input type="text" name="vehicle" placeholder="B1113">
           <br><br>

  <hr>

  <label for="cars">Accident Cause:</label>
            <select name="cause">
            <option value="overspeeding">Over Speeding</option>
              <option value="drink_n_drive">Alcohol Consumption</option>
              <option value="Phone_use">Driver negligence</option>
              <option value="specific_road_condition">Road Condition</option>
              <option value="none">None</option>
            </select>
            <br><br>
            
           <label for="cars">Accident Damage:</label>
            <select name="damage">
            <option value=10000>Less than 10k</option>
              <option value=100000>Less than 100k</option>
              <option value=1000000>Less than 1000k</option>
              <option value="none">None</option>
            </select>

          

          
<hr>

          <label for="cars">Accident Weather:</label>
            <select name="weather">
            <option value="sunny">Sunny</option>
              <option value="thunderstorm">Thunderstorm</option>
              <option value="foggy">Foggy </option>
              <option value="none">None</option>
            </select>


            <br><br>
            <label for="cars">State:</label>
            <select name="state">
            <option value="Goa">Goa</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Gujarat">Gujarat</option>
              <option value="PUNJAB">Punjab</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="none">None</option>
            </select>
            <hr>
           <input type="submit" value="View data">
        </form>
      </div>

  </div>
   <br><br>
  
  
   
   
   
  </div>
    
      
</body>
</html>
