<?php

session_start();
include 'dbConnect.php';

if($_SERVER['REQUEST_METHOD']=='POST')
{

//matching both password first
    
if($_POST['password']==$_POST['confirmPassword']){
       
    $firstName=$mysqli->real_escape_string($_POST['firstName']);
    
    $lastName=$mysqli->real_escape_string($_POST['lastName']);
    
    $password=md5($_POST['password']);
    
    $gender=$mysqli->real_escape_string($_POST['gender']);
    
    $email=$mysqli->real_escape_string($_POST['email']);
    
    //changing image name
    
    $imageNmae=$_FILES['avatar']['name'];
    
    $extension=explode(".",strtolower($imageNmae));
    
    $imagetype=end($extension);
    
    $fileNewName=rand(1000000,99999999999).".".$imagetype;
    
    $avatar_path =$mysqli->real_escape_string('image/'.$fileNewName);
    
    
    //checking if there is already an account with thid emailID
    
    $checkMailId="select * from userinfo where emailId='$email'";
    
    $resultMailId= mysqli_query($mysqli,$checkMailId) or die();
   
    
    if($resultMailId->num_rows>0){
        
        $_SESSION["error"]= 'There is already an account with this email address.';
        
        header("Location: index.php");
        
    }
    
    if(preg_match(("!image!"),$_FILES['avatar']['type'])){ //making shure fie is image
        
        //copy image to folder
        
        if(copy($_FILES['avatar']['tmp_name'],$avatar_path)){
       
            $insert="INSERT INTO `userinfo` (`emailId`,  `uerPassword`,  `gender`, `proPic`, `lastName`, `firstName`) VALUES ('$email', '$password', '$gender', '$avatar_path', '$lastName', '$firstName')";
            
            if(mysqli_query($mysqli,$insert)){
                
           
                $_SESSION['firstName']=$firstName;
                
                $_SESSION['lastName']=$lastName;
                
                $_SESSION['email']=$email;
                
                $_SESSION['avatar']=$avatar_path;
                
                $_SESSION['password']=$password;
                
                $_SESSION['isLogIn']='yes';
                            
                
                $_SESSION["success"]="Login Successfully.";
                
                header("Location: profilePage.php");
                
            }
            else{
                
                $_SESSION["error"]="failed to upload.";
                
                 header("Location: index.php");
            }
        }
        
    }else{
        
        $_SESSION["error"]='not an image.';
    }
    
}else{
    
    $_SESSION["error"]= 'password did not matched.';
    
    header("Location: index.php");
   
}    
    
}

?>