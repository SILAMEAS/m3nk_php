<?php
 $host="localhost";
 $username="root";
 $pass="";
 $db="test";
 $connect=new mysqli($host,$username,$pass,$db);
 if($connect->connect_error){
  die("error connecting to db".$connect->connect_error);
 }
 if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql="DELETE FROM users WHERE id=$id";
  $res=$connect->query($sql);
  if(!$res){
    die("errorr delete table in db");
  }
 }
header("location: ./show.php");
?>