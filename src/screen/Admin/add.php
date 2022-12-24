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

 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $nameV=$_POST['name'];
  $ageV=$_POST['age'];
  $addV=$_POST['address'];
  if($nameV=="" || $ageV=="" || $addV==""){
    echo "
      <script>
        alert('all field cannot empty');
      </script>
    ";
  }
  else{
  $sql="INSERT INTO users(name,age,address) VALUES ('$nameV','$ageV','$addV')";
  $res =$connect->query($sql);
  if(!$res){
    die("error add data to db");
  }
  header('location: ./show.php');


 }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body>

  <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md mt-[10%] mx-auto w-full">
    <h1 class="text-2xl text-center font-bold mb-4">Register</h1>
    <form method="POST">
      <div class="grid grid-cols-1 gap-4 ">
        <div class="form-group mb-6 ">
          <input type="text" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123" name="name"
            aria-describedby="emailHelp123" placeholder="Name">
        </div>

      </div>
      <div class="form-group mb-6">
        <input type="number" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="age" placeholder="age">
      </div>
      <div class="form-group mb-6">
        <input type="password" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="address"
          placeholder="Address">
      </div>

      <button type="submit" class="
      w-full
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Sign up</button>
    </form>
  </div>
</body>

</html>