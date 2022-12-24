<?php
 $host="localhost";
 $username="root";
 $pass="";
 $db="shop";
 $connect=new mysqli($host,$username,$pass,$db);
 if($connect->connect_error){
  die("error connecting to db".$connect->connect_error);
}

 $Pro_name="";
 $Pro_qty="";
 $Pro_price="";
 $Pro_category="";

 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $Pro_name=$_POST['name'];
  $Pro_qty=$_POST['qty'];
  $Pro_price=$_POST['price'];
  $Pro_category=$_POST['category'];
  if($Pro_name=="" || $Pro_qty=="" || $Pro_price=="" || $Pro_category==""){
    echo "
      <script>
        alert('all field cannot empty');
      </script>
    ";
  }
  else{
  $sql="INSERT INTO product(Name_pro,Qty,Price,Category) VALUES ('$Pro_name','$Pro_qty','$Pro_price','$Pro_category')";
  $res =$connect->query($sql);
  if(!$res){
    die("error add data to db");
  }
  header('location: ./showProducts.php');


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
            aria-describedby="emailHelp123" placeholder="Product Name">
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
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="qty" placeholder="Qty">
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
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="price" placeholder="Price">
      </div>
      <div class="form-group mb-6">

        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
          option</label>
        <select id="countries" name="category"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

          <option value="US">United States</option>
          <option value="CA">Canada</option>
          <option value="FR">France</option>
          <option value="DE">Germany</option>
        </select>

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
      ease-in-out">ADD Product</button>
    </form>
  </div>
</body>

</html>