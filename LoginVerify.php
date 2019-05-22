<?php
                session_start();
                
                include 'dbConnect.php';
                
                if($_SERVER['REQUEST_METHOD']=='POST')
                    
                {
                    
                    $email=$mysqli->real_escape_string($_POST['email']);
                    
                    $getUserInfo="select * from userinfo where emailId='$email'";
                    
                    $userinfo=mysqli_query($mysqli,$getUserInfo) or die($mysqli->error);
                    
                    if($userinfo->num_rows==0){
                        
                        $_SESSION["message"]="The User does not exist";
                        
                         header("Location: LoginForm.php");
                         
                    }
                    else{
                        
                        $user=$userinfo->fetch_assoc();
                        
                        
                        
                        $pass=md5 ($_POST['password']);
                        
                        
                        
                        if($pass== $user['uerPassword']){
                            
                            $_SESSION["message"]="Login Successful";
                            
                            $_SESSION['firstName']=$user['firstName'];
                            
                            $_SESSION['lastName']=$user['lastName'];
                            
                            $_SESSION['avatar']=$user['proPic'];
                            
                            $_SESSION['email']=$user['emailId'];
                            
                            $_SESSION['password']= $user['uerPassword'];
                            
                            $_SESSION['isLogIn']='yes';
                            
                            header("Location: profilePage.php");
                            
                           
                        }
                        
                        else{
                            
                            
                            $_SESSION["message"]="Wrog password";
                            
                            header("Location: LoginForm.php");
                        }
                        
                    }
                }
                
                else{
                    
                   $_SESSION["messsage"]= 'Login Error';
                   
                   header("Location: LoginForm.php");
                   
                }
                
                
            ?>

