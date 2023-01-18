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
            font-size: 28px;
            background-color: black;
            color:aliceblue
        }

       
    .innerbox{
      width:900px;
      top:50px;
      left:50px;
      padding: 10px;
      border:2px solid white;
      border-radius:10px;
        position:absolute;
    }

    img{
      float:left;
      width: 100%;
      margin 0px 0px;
      opacity: 0.25;
      height:850px;
    }
    .div{
      font-size:25px;

    }
</style>
</head>

<body>

    <div class="Box">
      <img src="https://img.onmanorama.com/content/dam/mm/en/kerala/top-news/images/2022/5/16/road-accident-shutterstock.jpg">
     <div class="innerbox">
      <div class="div">
     <h2> Data :</h2>
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
        
        $result=$_POST['type_accident'];
        if(strcmp($result,"hitnrun")==0){
           $sql="select *  from accident_type where Hit_n_run='Driver fled with high collatral damage' ";
           $res=mysqli_query($conn,$sql);
           $num=mysqli_num_rows($res);
           echo  "There are $num accidents with Hit and run type";
           echo "<br>";
           echo "<br>";
        }

        if(strcmp($result,"headoncollision")==0){
          $sql="select *  from accident_type where  head_on_collision='Low Impact on both vehicles' or head_on_collision='High Impact on both vehicles' ";
          $res=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($res);
          echo  "Total accidents concerned with head on collison are :$num";
          echo "<br>";
          echo "<br>";
       }

       if(strcmp($result,"Rearendcollision")==0){
        $sql="select *  from accident_type where  rear_end_collision='Driver inattention Impact: high' ";
        $res=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($res);
        echo  "Total accidents concerned with Rear end collison are :$num";
        echo "<br>";
        echo "<br>";
     }

     if(strcmp($result,"none")==0){
         echo " ";
   }


   $result=$_POST['cause'];
     
   if(strcmp($result,"Overspeeding")==0){
      $sql="select *  from accident_cause where  overspeeding <>'NIL' ";
      $res=mysqli_query($conn,$sql);
      $num=mysqli_num_rows($res);
      echo  "Total accidents due to Overspeeding : $num";
      echo "<br>";
      echo "<br>";
      }
   

   if(strcmp($result,"alcohol")==0){
      $sql="select *  from accident_cause where  drink_n_drive <> 'NIL' ";
      $res=mysqli_query($conn,$sql);
      $num=mysqli_num_rows($res);
      echo  "Total accidents due to alcohol consumption: $num";
      echo "<br>";
      echo "<br>";
      }

      if(strcmp($result,"phone")==0){
         $sql="select *  from accident_cause where  Phone_use <> 'NIL' ";
         $res=mysqli_query($conn,$sql);
         $num=mysqli_num_rows($res);
         echo  "Total accidents due to driver negligence : $num";
         echo "<br>";
         echo "<br>";
         }

         if(strcmp($result,"RoadCondition")==0){
            $sql="select *  from accident_cause where  specific_road_condition <> 'NIL' ";
            $res=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($res);
            echo  "Total accidents due to specific road condition : $num";
            echo "<br>";
            }

            if(strcmp($result,"none")==0){
               echo " ";
               echo "<br>";
               echo "<br>";
            }
               $result=$_POST['weather'];

               if(strcmp($result,"sunny")==0){
                  $sql="select *  from accident where  weather='sunny' ";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " Total accidents when weather was sunny: $num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"thunderstorm")==0){
                  $sql="select *  from accident where  weather='thunderstorm' ";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " Total accidents when weather was thunderstorm: $num";
                  echo "<br>";
                  echo "<br>";
               }
             

               if(strcmp($result,"foggy")==0){
                  $sql="select *  from accident where  weather='foggy' ";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " Total accidents when weather was foggy: $num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"none")==0){
                  echo " ";
               }

              
               $result=$_POST['license'];

               if(strcmp($result,"valid")==0){
                  $sql="select *  from person where  license_type='valid license' ";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " Total accidents  concerned with valid license: $num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"learner")==0){
                  $sql="select *  from person where  license_type='learner license'";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " Total accidents concerned with learner license $num";
                  echo "<br>";
                  echo "<br>";
               }
               if(strcmp($result,"invalid")==0){
                  $sql="select *  from person where  license_type='invlaid license'";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " Total accidents concerned with invalid license $num";
                  echo "<br>";
                  echo "<br>";
               }
               if(strcmp($result,"none")==0){
                  echo " ";
                  echo "<br>";
                  echo "<br>";
               }
              
               $result=$_POST['ged'];
               if(strcmp($result,"male")==0){
                  $sql="select *  from person where  sex='male' ";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  "Total accidents (gender is male): $num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"female")==0){
                  $sql="select *  from person where  sex='female' ";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " Total accidents(gender is female): $num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"none")==0){
                  echo " ";
                  echo "<br>";
                  echo "<br>";
               }
             

               $result=$_POST['unb'];
               if(strcmp($result,"urban")==0){
                  $sql="select *  from state where  Area_type='urban' ";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " Urban Area(total accidents): $num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"rural")==0){
                  $sql="select *  from state where Area_type='rural' ";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " Rural Area(total accidents): $num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"none")==0){
                  echo " ";
                  echo "<br>";
                  echo "<br>";
               }


               $result=$_POST['age'];
               if(strcmp($result,"a")==0){
                  $sql="select *  from person where  age<18 ";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " Less than 18 (age group): $num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"b")==0){
                  $sql="select *  from person where  age>=18  && age<=40";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " 18 to 40 age category : $num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"c")==0){
                  $sql="select *  from person where  age>40 && age<75";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " 40 to 75 age category :$num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"none")==0){
                  echo " ";
                  echo "<br>";
                  echo "<br>";
               }

               $result=$_POST['road'];
               if(strcmp($result,"p")==0){
                  $sql="select *  from road_juncton where  road_junction_type='T-junction' ";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " T junction: $num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"q")==0){
                  $sql="select *  from road_juncton where  road_junction_type='Y-junction' ";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  " Y- junction: $num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"r")==0){
                  $sql="select *  from road_juncton where  road_junction_type='Staggered junction' ";
                  $res=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($res);
                  echo  "  Staggered junction: $num";
                  echo "<br>";
                  echo "<br>";
               }

               if(strcmp($result,"none")==0){
                  echo " ";
                  echo "<br>";
                  echo "<br>";
               }
         }
  

?>
</div>
      </div>

</body>
</html>