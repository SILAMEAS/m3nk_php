<?php
 $host="localhost";
 $username="root";
 $pass="";
 $db="shop";
 $connect=new mysqli($host,$username,$pass,$db);
 if($connect->connect_error){
  die("error connecting to db".$connect->connect_error);
 }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<style>
.hide {
  display: none;
}
</style>

<body>

  <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8 ">
        <div class="overflow-hidden ">
          <button class='btn btn-primary add-btn absolute bottom-0 right-0'><a href='./addProducts.php'
              class='nav-link'>Add more product</a></button>
          <table class="min-w-full text-center">
            <thead class="border-b bg-gray-800">
              <tr>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                  #
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                  Name
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                  Qty
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                  Price
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                  Category
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                  Handle
                </th>
              </tr>
            </thead class="border-b">
            <tbody>
              <?php
                $sql="SELECT * FROM product";
                $res=$connect->query($sql);
                if(!$res){
                  die("error getting data form db");
                }
                while($row=$res->fetch_assoc()){
                  echo "
                  <tr>
        
                  <td >$row[Id]</td>
                  <td >$row[Name_pro]</td>
                  <td >$row[Qty]</td>
                  <td >$row[Price]</td>
                  <td >$row[Category]</td>
                  <td>
                    <div>
                     
                      <button class='btn btn-success edit-btn'><a class='nav-link' href='./edit.php?id=$row[Id]'>Edit</a></button>
                      <button class='btn btn-danger'><a class='nav-link' href='./delete.php?id=$row[Id]'>Delete</a></button>
                    </div>
                  </td>
                </tr>
                  ";
                }
              ?>
              <!-- <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Mark
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Otto
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  @mdo
                </td>
              </tr class="bg-white border-b"> -->

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>