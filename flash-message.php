<?php
if(isset($_SESSION["message"])){
                
                echo ('<p style="height:35px; color: white; background-color: #EB3F00; font-size:25px; margin: 0px; ">'.$_SESSION["message"].'<a href="'.$_SERVER['REQUEST_URI'].'"style="color: white; margin-left:100px; border: 1.5px solid white; border-radius: 8px; padding:4px; background-color: #8D0000 ; color:white; font-size: 20px; text-decoration: none;">Close</a>'."</p>\n");
                

                unset($_SESSION["message"]);
                
            }



?>            