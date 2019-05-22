	<?php

		session_start();

		include 'dbConnect.php';

		if($_SERVER['REQUEST_METHOD']=='POST'){

			$comment=$mysqli->real_escape_string($_POST['comment']);

			$email=$mysqli->real_escape_string($_SESSION['pemail']);

			$sql3="INSERT INTO `comment`(`emailId`, `comment`) VALUES ('".$email."','".$comment."')";

			//$dfgdg=mysqli_query($mysqli,$sql3) or die($mysqli->error);

			if((mysqli_query($mysqli,$sql3))){

				$_SESSION["message"]="Commented Successfully";

				header("Location: show-a-profile.php?id=<?php echo $email;?");
			}

			else{
				$_SESSION["message"]="Comment Cant Be Posted";
				header("Location: show-a-profile.php?id=$email");

			}
		}


    ?>
