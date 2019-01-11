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

 <form action="add.do.php" method="post">
 <div class="form-group">
  <label for="starttime">Task name</label>
  <input type="text" class="form-control" id="name" name="name">
  </div>


  <div class="form-group">
  <label for="description">Description</label>
  <input type="text" class="form-control" id="description" name="description">
  </div>




  <div class="form-group">
  <label for="endtime">Start time</label>
  <input type="date" class="form-control" id="starttime" name="starttime">
  </div>



  <div class="form-group">
  <label for="stopat">Stopat</label>
  <input type="date" class="form-control" id="stoptime" name="stoptime">
</div>



  <div class="form-group">

    <label for="location">Location</label>

    <input type="text" class="form-control" id="location" name="location">

  </div>

  

  <button type="submit" class="btn btn-default">Submit</button>

</form>
     
          
  <?php
     // $sql = "INSERT INTO `tasks` (`taskid`, `name`, `description`, `starttime`, `stoptime`, `location`, `status`) VALUES (NULL, \'task 1\', \'asd\', \'2019-01-02\', \'2019-01-15\', \'asd\', \'0\')";
    ?>
</div>
  





</body>

</html>