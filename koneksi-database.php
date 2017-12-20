<?php
  $host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'himover';  
 
  $connection=mysql_connect($host, $user, $password);
 
  $sql = mysql_select_db($database) ;
?>