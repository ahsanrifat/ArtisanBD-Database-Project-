<?php
session_start();

    if($_SERVER['REQUEST_METHOD']=='POST'){
        
    include 'dbConnect.php';
    
    $password=md5($_POST['password']);
   
    if($password!=$_SESSION['password']){
        
        $_SESSION["message"]='Incorrect Password, Login to continue';

        session_destroy();
        
        header("Location: LoginForm.php");
        
        
    }

    else {
    
        $editAddId=$_SESSION['getID'];

        
        if(!empty($_POST['addTitle'])){
            
            $title=$mysqli->real_escape_string($_POST['addTitle']);
            
            $updateQuery="update advertisement set addTitle='$title' where Id='$editAddId'";
            
            $executon= mysqli_query($mysqli, $updateQuery) or die($mysqli->error);

            echo "Add Title Edit Korta Hoyeche";
            
        }
            
        
            
        
                if(!empty($_POST['description'])){
                 
                    
            $title=$mysqli->real_escape_string($_POST['description']);
            
            $updateQuery="update advertisement set description='$title' where Id='$editAddId'";
            
            $executon= mysqli_query($mysqli, $updateQuery) or die($mysqli->error);
                    
                }
            
        
                if(!empty($_POST['slct1'])){
                    
            $title=$mysqli->real_escape_string($_POST['slct1']);
            
            $updateQuery="update advertisement set district='$title' where Id='$editAddId'";
            
            $executon= mysqli_query($mysqli, $updateQuery) or die($mysqli->error);          
                    
                    
                    
        }
                if(!empty($_POST['slct2'])){
                    
            $title=$mysqli->real_escape_string($_POST['slct2']);
            
            $updateQuery="update advertisement set area='$title' where Id='$editAddId'";
            
            $executon= mysqli_query($mysqli, $updateQuery) or die($mysqli->error);                    
                    
                    
                    
            
        }
                if(!empty($_POST['slct3'])){
                    
                    
            $title=$mysqli->real_escape_string($_POST['slct3']);
            
            $updateQuery="update advertisement set serviceCatagory='$title' where Id='$editAddId'";
            
            $executon= mysqli_query($mysqli, $updateQuery) or die($mysqli->error);                    
                    
                    
                    
                    
            
        }
                if(!empty($_POST['slct4'])){
                    
            $title=$mysqli->real_escape_string($_POST['slct4']);
            
            $updateQuery="update advertisement set serviceField='$title' where Id='$editAddId'";
            
            $executon= mysqli_query($mysqli, $updateQuery) or die($mysqli->error);                    
                    
                    
            
        }
                if(!empty($_POST['address'])){
                    
                    
            $title=$mysqli->real_escape_string($_POST['address']);
            
            $updateQuery="update advertisement set address='$title' where Id='$editAddId'";
            
            $executon= mysqli_query($mysqli, $updateQuery) or die($mysqli->error);                    
                    
                    
                    
                    
            
        }

        }
        
        $_SESSION["message"]='Ad updated Successfully';

        header("Location: profilePage.php");
        
                }
?>