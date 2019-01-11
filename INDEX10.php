<?php 
    include("db.php")
    ?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
 
<nav class="navbar navbar-inverse">

  <div class="container-fluid">

    <div class="navbar-header">

      <a class="navbar-brand" href="./">ToDo</a>

    </div>

    <ul class="nav navbar-nav">

      <li class="active"><a href="./">Home</a></li>

      <li><a href="add.php">Add</a></li>

    </ul>

  </div>

</nav>

  

<div class="container">
  

<div class="container">
  <h2>To Do List</h2>            
  <table class="table">
      <thead>

            <th> Name</th>
            <th> Start at</th>
           <th> Stop at</th>
            <th> Location</th>
            <th> action</th>
          </thead>

  <?php 
      /*print_r($con);
    $arr1=array("name"=>"Shubham","age"=>26,"Dateofbirth"=>15);
    
     foreach ($arr1 as $key => $value) {
      echo "$key: $value";
      echo "<br>";
    }
    print_r($arr1);*/
    $sql = "SELECT  * FROM tasks";
    $query = mysqli_query($con,$sql);
    //print_r($query);
   
   if(mysqli_num_rows($query)==0)
   {
      echo "no rows in a table";
   }
   else
   {
      while($row = mysqli_fetch_assoc($query)) //fetch the row form db one by one
      {
        //print_r($row);
        echo "<tr>";

        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["starttime"]."</td>" ;
        echo "<td>".$row["stoptime"]."<td>";
        echo "<td>".$row['location']."</td>" ;  
        echo "<td><a href='delete.php?taskid=".$row["taskid"]."'>Delete</a></td>";   }

   }

    
  ?>

  </tbody>
</table>

</div>



</body>

</html>