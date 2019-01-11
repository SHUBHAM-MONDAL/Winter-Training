<?php 
		include("db.php");
		print_r($_POST);
		$name =$_POST['name'];
		$starttime = $_POST['starttime'];
		$stoptime =$_POST['stoptime'];
		$location =$_POST['location'];
		$description =$_POST['description'];
		$insert = "INSERT INTO `tasks`(name,starttime,stoptime,location,description) VALUES ('$name','$starttime','$stoptime','$location','$description')";
		echo $sql;
		/*$sql="INSERT INTO `tasks`(`taskid`, `name`, `description`, `starttime`, `stoptime`, `location`, `status`) VALUES (NULL, \'task 1\', \'asd\', \'2019-01-02\', \'2019-01-15\', \'asd\', \'0\')";*/

			if(mysqli_query($con,$insert))
			{
				echo "Succesfully Executed";

			}

			else
			{
				die(mysqli_error($con));
			}
    
		?>