<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
     .Box{
      position: relative;
      top:0px;
      height: 2000px;
         margin 0px 0px;
        font-weight :12px;

     }
      body{
            font-size: large;
            background-color: black;
            color:aliceblue
        }

       
    .innerbox{
      width:900px;
      top:50px;
      left:50px;
       font-size :25px;
       font-weight: 500;
        position:absolute;
    }

    .innerbox:hover{
      font-weight :700;
    }

    #imgg{
      position: absolute;
      float:left;
      width: 100%;
      margin 0px 0px;
      opacity: 0.25;
      height:1100px;
    }

    #imggg{
      top: 1600px;
      position: absolute;
      opacity: 0.8;
      margin-left:0px;
      width: 1000px;
    }
    .div{
      font-size:25px;

    }
    .images{
      position: relative;
      border:2px solid red;
    }

    #i1{
      opacity: 0.69;
      position: absolute;
      right: 0px;
      top: 1600px;
      width: 495px;
      height: 900px;

    }

    .msg{
      position: absolute;
      top: 2600px;
      left: 1110px;
      color:rgb(0, 0, 0);
      border:2px solid white;
      border-radius: 5px;
      padding: 80px;
      font-size: 22px;
      background-color: rgb(171, 171, 171);
    }
</style>
</head>

<body>

    <div class="Box">
      <img src="https://img.onmanorama.com/content/dam/mm/en/kerala/top-news/images/2022/5/16/road-accident-shutterstock.jpg" id="imgg">
     <div class="innerbox">
      <div class="div">
      <h1>Data :</h1>
   </div>
    <?php
//  echo "Welcome to sql and php";

 // ways to connect to mysql database

//  1.mysqli extension
//  2.pdo

//connecting to the database
$severname="localhost";
$username="root";
$password="8850856933@2004";
$database="accidents";

// create a connection
$conn=mysqli_connect($severname,$username,$password,$database);
  
   // echo "Data:";
   // echo "<br>";
   // echo "<br>";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['input'];

    $sql="select * from state where accident_id='$name'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        echo "State:"." ".$row['state_name'];
        echo "<br>";
        echo "<br>";

        echo "Area:"." ".$row['Area_type'];
        echo "<br>";
        echo "<br>";
        
        echo "Location:"." ".$row['state_location'];
        echo "<br>";
        echo "<br>";

       $sql="select * from accident where accident_id='$name'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        echo "Weather: "." ".$row['weather'];
        echo "<br>";
        echo "<br>";
        echo "Accident Date :"." ".$row['accident_time'];
        $sql="select * from accident_type where Accident_idt='$name'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        echo "<br>";
        echo "<br>";
        echo "Accident Data: ".$row['Hit_n_run'];
        echo $row['head_on_collision'];
        // echo "<br>";
        echo $row['rear_end_collision'];
        echo "<br>";
        echo "<br>";
        echo "Major Injuries:"." ".$row['major_injuries'];
        echo "<br>";
        echo "<br>";
        echo "Minor Injuries:"." ".$row['minor_injuries'];
        echo "<br>";
        echo "<br>";
        echo "Deaths :"." ".$row['deaths'];
        echo "<br>";
        echo "<br>";

        $sql="select * from road_juncton where accident_idr='$name'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        echo "Road junction :"." ".$row['road_junction_type'];
        echo "<br>";
        echo "<br>";


       


        $sql="select * from traffic_control where Accident_idttc='$name'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        echo "Traffic control:"." ".$row['Traffic_control_type'];
        echo "<br>";
        echo "<br>";

        $sql="select * from accident_consequence where accident_ids='$name'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        echo "Damage Rs :"." ".$row['damage'];
        echo "<br>";
        echo "<br>";

        $sql="select * from vehicle where accident_id='$name'";
        $res=mysqli_query($conn,$sql);
        $veh=mysqli_fetch_assoc($res);
        echo "Vehicle id :"." ".$veh['Vehicle_id'];
        echo "<br>";
        echo "<br>";

  
    


        $sql="select * from use_safety_device where accident_idd='$name'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        echo " Safety ignored  :"." ".$row['safety_device'];
        echo "<br>";
        echo "<br>";


        $name=$_POST['vehicle'];

        $sql="select * from person where vehicles_id='$name'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        echo "Age  :"." ".$row['age'];
        echo "<br>";
        echo "<br>";

        $sql="select * from person where vehicles_id='$name'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        echo "Gender  :"." ".$row['sex'];
        echo "<br>";
        echo "<br>";
      
        // $insu=$_POST['ins'];
        // $sql="select * from insurance_data where person_id='$insu'";
        // $res=mysqli_query($conn,$sql);
        // $row=mysqli_fetch_assoc($res);
        // echo "Third party insurance :"." ".$row['third_party_liability'];
        // echo "<br>";
        // echo "Collision Damage cover :"." ".$row['collision_damage_cover'];

        echo "<br>";
        echo "<br>";
        echo "<br>";
       echo "User Specific Queries:";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        $result1=$_POST['cause'];
        $result2=$_POST['damage'];
           $sql="select accident_cause.$result1,accident_consequence.damage from accident_cause inner join
             accident_consequence on accident_cause.accident_idc=accident_consequence.accident_ids where 
             accident_consequence.damage<$result2";
           $res=mysqli_query($conn,$sql);
           $num=mysqli_num_rows($res);
           echo  "No of accidents pertaining to particular cause and damage is less than $result2 are $num";
           echo "<br>";
           echo "<br>";
           
        
        
           $result1=$_POST['state'];
           $result2=$_POST['weather'];
              $sql="select state.state_name,accident.weather from accident inner join
                state on accident.accident_id=state.accident_id where 
                state.state_name='$result1' and accident.weather='$result2'";
              $res=mysqli_query($conn,$sql);
              $num=mysqli_num_rows($res);
              echo  "No of accidents in state $result1 when weather was $result2 are: $num";
              echo "<br>";
              echo "<br>";
   }



?>

</div class="images">
<img src="https://c8.alamy.com/comp/2ER5P11/road-and-traffic-safety-infographics-vector-template-highway-with-road-signs-and-map-pointers-graph-and-chart-of-crash-and-freeway-accident-statisti-2ER5P11.jpg" id="imggg">

<img src="https://static.toiimg.com/photo/msid-65765830/65765830.jpg" id="i1">
      </div>


      <div class="msg">
        DONT DIE ON ROADS
  </div>
</body>
</html>