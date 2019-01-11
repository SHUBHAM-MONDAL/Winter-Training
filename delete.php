<?php 
		include("db.php");
$taskid = $_GET['taskid'];
$sql ="DELETE FROM tasks WHERE taskid='$taskid'";

		if(mysqli_query($con,$sql))
			{
				echo "Delete Succesfully";

			}

			else
			{
				die(mysqli_error($con));
			}

		?>