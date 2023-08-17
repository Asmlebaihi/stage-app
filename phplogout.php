<?php 

if(isset(["logout"])) {    
    session_start();  
    session_destroy();  
    header("Location: login.html");
     
} 
?>