<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'chesterfield');
if (isset($_POST['signup'])) {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $exists = FALSE;
  if ($password != $cpassword) {
    echo '<strong>Signup Failed!</strong>password are not same.';
    exit;
  }
  if ($password == $cpassword && $exists == FALSE) {
    $sql = "INSERT INTO users(username, email,address,password) VALUES ('$username','$email','$address','$password')";
    echo 'success';
    if (mysqli_query($conn, $sql)) {
      echo '<strong>Success!</strong> Your account is created succefully.';
    }
  }
  header("location:Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <style>
    body {
        background-image: url("https://source.unsplash.com/1000x1000/?furniture");
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100%;
    }
    </style>
</head>

<body>
    <header class="inset-x-0 flex justify-between text-gray-600 body-font bg-red-200">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a class="mr-5 hover:text-gray-900 cursor-pointer" href="chesterfield.php">Home</a>
                <a class="mr-5 hover:text-gray-900 cursor-pointer" href="#testimonial">About</a>
                <a class="hover:text-gray-900 cursor-pointer" href="#contact">Contact Us</a>
            </nav>
            <a
                class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
                <img src="svg.svg" class="w-10 h-10 ml-1" alt="" />
                <span class="ml-3 text-xl text-center">Chesterfield</span>
            </a>
            <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
                <a class="inline-flex items-center bg-red-500 text-white border-0 py-1 px-3 ml-2 focus:outline-none hover:bg-gray-300 text-gray-600 rounded text-base mt-4 md:mt-0"
                    href="Login.php">
                    Login
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a class="inline-flex items-center bg-red-500 text-white border-0 py-1 px-3 ml-2 focus:outline-none hover:bg-gray-300 text-gray-600 rounded text-base mt-4 md:mt-0"
                    href="Signup.php">
                    SignUp
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </header>
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    SignUp
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="" method="POST">
                <input type="hidden" name="remember" value="true" />
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="username" class="sr-only">Userame</label>
                        <input id="username" name="username" type="text" autocomplete="" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Userame" />
                    </div>
                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Email address" />
                    </div>
                    <div>
                        <label for="phone" class="sr-only">Phone Number</label>
                        <input id="phone" name="phone" type="text" autocomplete="" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Phone Number" />
                    </div>
                    <div>
                        <label for="address" class="sr-only">Address</label>
                        <input id="address" name="address" type="text" autocomplete="" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Address" />
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Password" />
                    </div>
                    <div>
                        <label for="cpassword" class="sr-only">Confirm Password</label>
                        <input id="cpassword" name="cpassword" type="password" autocomplete="current-password" required
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Confirm Password" />
                    </div>
                </div>
                <div>
                    <button name="signup" type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns=""
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        SignUp
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>