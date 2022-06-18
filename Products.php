<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "chesterfield");
if (!isset($_SESSION['username'])) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
    <!-- personal css  -->
    <link rel="stylesheet" href="chesterfield.css">
</head>

<body>
    <header class="inset-x-0 flex justify-between text-gray-600 body-font bg-red-200">
        <div class="container mx-auto flex flex-wrap p-4 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:mr-auto">
                <a class="mr-5 hover:text-gray-900 cursor-pointer" href="chesterfield.php">Home</a>
                <a class="mr-5 hover:text-gray-900 cursor-pointer" href="#testimonial">About</a>
                <a class="mr-5 hover:text-gray-900 cursor-pointer" href="#contact">Contact Us</a>
            </nav>
            <a
                class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0 md:mr-auto">
                <img src="svg.svg" class="w-10 h-10 mr-1" alt="" />
                <span class="mr-3 text-xl text-center">Chesterfield</span>
            </a>
            <h4 class="m-2">Welcome <?php echo $_SESSION['username']; ?></h4>
            <form method="POST">
                <div class="">
                    <button name="logout"
                        class="bg-pink-500 hover:bg-pink-400 text-white font-bold py-2 px-4 border-b-4 border-pink-700 m-2 hover:border-pink-500 rounded">Logout</button>
                </div>
            </form>
            <?php
      if (isset($_POST['logout'])) {
        session_destroy();
        header("location: login.php");
      }
      ?>
        </div>
    </header>
    <section>
        <div class="container mx-auto flex px-1 py-3 md:3 flex-row flex-col items-center">
            <div class="grid grid-cols-4 grid-rows-4 gap-4">
                <div style="background-color: lightblue">
                    <img src="https://source.unsplash.com/700x600/?sofa" alt="" srcset="" />
                    <h1 class="m-2">Sofa</h1>
                    <p class="m-2">$100</p>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Buy
                    </button>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Go to cart
                    </button>
                </div>
                <div style="background-color: lightblue">
                    <img src="https://source.unsplash.com/700x600/?cupboard" alt="" srcset="" />
                    <h1 class="m-2">Cupboard</h1>
                    <p class="m-2">$99</p>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Buy
                    </button>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Go to cart
                    </button>
                </div>
                <div style="background-color: lightblue">
                    <img src="https://source.unsplash.com/700x600/?table" alt="" srcset="" />
                    <h1 class="m-2">Wooden Table</h1>
                    <p class="m-2">$120</p>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Buy
                    </button>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Go to cart
                    </button>
                </div>
                <div style="background-color: lightblue">
                    <img src="https://source.unsplash.com/700x600/?couch" alt="" srcset="" />
                    <h1 class="m-2">Velvet Couch</h1>
                    <p class="m-2">$50</p>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Buy
                    </button>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Go to cart
                    </button>
                </div>
                <div style="background-color: lightblue">
                    <img src="https://source.unsplash.com/700x600/?bed" alt="" srcset="" />
                    <h1 class="m-2">Bed</h1>
                    <p class="m-2">$45</p>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Buy
                    </button>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Go to cart
                    </button>
                </div>
                <div style="background-color: lightblue">
                    <img src="https://source.unsplash.com/700x600/?chair" alt="" srcset="" />
                    <h1 class="m-2">Chair</h1>
                    <p class="m-2">$180</p>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Buy
                    </button>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Go to cart
                    </button>
                </div>
                <div style="background-color: lightblue">
                    <img src="https://source.unsplash.com/700x600/?door" alt="" srcset="" />
                    <h1 class="m-2">Door</h1>
                    <p class="m-2">$56</p>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Buy
                    </button>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Go to cart
                    </button>
                </div>
                <div style="background-color: lightblue">
                    <img src="https://source.unsplash.com/700x600/?window" alt="" srcset="" />
                    <h1 class="m-2">Window</h1>
                    <p class="m-2">$25</p>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Buy
                    </button>
                    <button
                        class="m-3 inline-flex text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">
                        Go to cart
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>