<?php
 $host="localhost";
 $username="root";
 $pass="";
 $db="test";
 $connect=new mysqli($host,$username,$pass,$db);
 if($connect->connect_error){
  die("error connecting to db".$connect->connect_error);
 }
 $nameV="";
 $ageV="";
 $addV="";
 if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql="DELETE FROM users WHERE id=$id";
  $res=$connect->query($sql);
  if(!$res){
    die("errorr delete table in db");
  };
 }
header("location: ./show.php");
?>
<section class="add-user">
  <h2>Edit user</h2>

  <form method="">
    <input placeholder="Name ... " name="name" value="" />
    <input placeholder="Age ... " name="age" value="" />
    <input placeholder="Address ... " name="address" value="" />
    <button type="sumit">sumit</button>
  </form>
</section>