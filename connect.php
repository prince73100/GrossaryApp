<?php
   $localhost = "127.0.0.1";
   $username = "root";
   $password = "";
   $dbname = "grocerydb";

   $conn = mysqli_connect($localhost,$username,$password,$dbname);

   if(!$conn){
    echo "can not connect with database! try again ";
   }
?>