<?php
 $host="localhost";
 $username="root";
 $pass="";
 $db="test";
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
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link href="../dist/output.css" rel="stylesheet" />

</head>
<style>
.hide {
  display: none;
}
</style>

<body>
  <section class="h-full gradient-form bg-gray-200 md:h-screen">
    <div class="container py-8 px-6 h-full  lg:overflow-y-hidden">
      <div class="flex justify-center items-center flex-wrapg-6 text-gray-800">
        <div class="xl:w-10/12">
          <div class="block bg-white shadow-lg rounded-lg">
            <div class="lg:flex lg:flex-wrap g-0">
              <div class="lg:w-6/12 px-4 md:px-0">
                <div class="md:p-12 md:mx-6">
                  <div class="text-center">
                    <img class="mx-auto w-48"
                      src="https://m3nk.netlify.app/pic/Screenshot_2022-09-10_225607-removebg-preview.png" alt="logo" />
                    <h4 class="text-xl font-semibold mt-1 mb-12 pb-1">Welcome to Admin Page</h4>
                  </div>
                  <form name="Login">
                    <p class="mb-4">Please login to your account</p>
                    <div class="mb-4">
                      <input type="text" name="nameA"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleFormControlInput1" placeholder="Username" />
                    </div>
                    <div class="mb-4">
                      <input type="password" name="passwordA"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleFormControlInput1" placeholder="Password" />
                    </div>
                    <div class="text-center pt-1 mb-12 pb-1">
                      <a href="./screen/Product/showProducts.php">
                        <button
                          class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                          type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" style="
                        background: linear-gradient(
                          to right,
                          #ee7724,
                          #d8363a,
                          #dd3675,
                          #b44593
                        );
                      ">
                          Log In as Admin Page
                        </button>
                      </a>

                    </div>
                    <!-- <div class="flex items-center justify-between pb-6">
                      <p class="mb-0 mr-2">Don't have an account?</p>
                      <button type="button"
                        class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                        data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <a href="./i.html">Register</a>
                      </button>
                    </div> -->
                  </form>
                </div>
              </div>
              <div class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none" style="
                background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
              ">
                <img class="w-[70%] h-[50%] mx-auto" src="./IMG/semiPic.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
</body>

</html>