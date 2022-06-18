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
    <title>Chesterfield</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="svg(2).ico" type="image/x-icon" />
    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">

    <!-- personal css  -->
    <link rel="stylesheet" href="chesterfield.css">
    <title>Chesterfield</title>
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
    <section class="text-gray-600 body-font" id="Catalogue">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                    Before they sold out <br class="hidden lg:inline-block" />readymade
                    gluten
                </h1>
                <p class="mb-8 leading-relaxed">
                    Copper mug try-hard pitchfork pour-over freegan heirloom neutra air
                    plant cold-pressed tacos poke beard tote bag. Heirloom echo park
                    mlkshk tote bag selvage hot chicken authentic tumeric truffaut
                    hexagon try-hard chambray.
                </p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg"
                        onclick="window.location.href='Products.php';">
                        View Catalogue
                    </button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero"
                    src="https://source.unsplash.com/700x600/?furniture" />
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                        Glimpse of our collection.
                    </h1>
                    <div class="h-1 w-20 bg-red-500 rounded"></div>
                </div>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">
                    Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical
                    gentrify, subway tile poke farm-to-table. Franzen you probably
                    haven't heard of them man bun deep jianbing selfies heirloom prism
                    food truck ugh squid celiac humblebrag.
                </p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                            src="https://source.unsplash.com/720x400/?sofa" alt="content" />
                        <h3 class="tracking-widest text-red-500 text-xs font-medium title-font">
                            SUBTITLE
                        </h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                            Chichen Itza
                        </h2>
                        <p class="leading-relaxed text-base">
                            Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                            hexagon disrupt edison bulbche.
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                            src="https://source.unsplash.com/720x400/?bed" alt="content" />
                        <h3 class="tracking-widest text-red-500 text-xs font-medium title-font">
                            SUBTITLE
                        </h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                            Colosseum Roma
                        </h2>
                        <p class="leading-relaxed text-base">
                            Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                            hexagon disrupt edison bulbche.
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                            src="https://source.unsplash.com/720x400/?hall" alt="content" />
                        <h3 class="tracking-widest text-red-500 text-xs font-medium title-font">
                            SUBTITLE
                        </h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                            Great Pyramid of Giza
                        </h2>
                        <p class="leading-relaxed text-base">
                            Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                            hexagon disrupt edison bulbche.
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                            src="https://source.unsplash.com/720x400/?bedroom" alt="content" />
                        <h3 class="tracking-widest text-red-500 text-xs font-medium title-font">
                            SUBTITLE
                        </h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                            San Francisco
                        </h2>
                        <p class="leading-relaxed text-base">
                            Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                            hexagon disrupt edison bulbche.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font" id="testimonial">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial"
                            class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
                            src="https://source.unsplash.com/720x400/?dog" />
                        <p class="leading-relaxed">
                            Edison bulb retro cloud bread echo park, helvetica stumptown
                            taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee
                            ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut
                            adaptogen squid fanny pack vaporware.
                        </p>
                        <span class="inline-block h-1 w-10 rounded bg-red-500 mt-6 mb-4"></span>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">
                            HOLDEN CAULFIELD
                        </h2>
                        <p class="text-gray-500">Senior Product Designer</p>
                    </div>
                </div>
                <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial"
                            class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
                            src="https://source.unsplash.com/720x400/?woman" />
                        <p class="leading-relaxed">
                            Edison bulb retro cloud bread echo park, helvetica stumptown
                            taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee
                            ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut
                            adaptogen squid fanny pack vaporware.
                        </p>
                        <span class="inline-block h-1 w-10 rounded bg-red-500 mt-6 mb-4"></span>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">
                            ALPER KAMU
                        </h2>
                        <p class="text-gray-500">UI Develeoper</p>
                    </div>
                </div>
                <div class="lg:w-1/3 lg:mb-0 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial"
                            class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
                            src="https://source.unsplash.com/720x400/?boy" />
                        <p class="leading-relaxed">
                            Edison bulb retro cloud bread echo park, helvetica stumptown
                            taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee
                            ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut
                            adaptogen squid fanny pack vaporware.
                        </p>
                        <span class="inline-block h-1 w-10 rounded bg-red-500 mt-6 mb-4"></span>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">
                            HENRY LETHAM
                        </h2>
                        <p class="text-gray-500">CTO</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font" id="contact">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                    Contact Us
                </h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                    Didn't find your dream furniture? Provide your feedback here.
                </p>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-1/2">
                        <div class="">
                            <label for="username" class="leading-7 text-sm text-gray-600">Userame</label>
                            <input type="text" id="username" name="username"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                        </div>
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="">
                            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="">
                            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                            <textarea id="message" name="message"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <button
                            class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"
                            name="contact" type="submit">
                            Submit
                        </button>
                    </div>
                    <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                        <a class="text-red-500 cursor-pointer">example@email.com</a>
                        <p class="leading-normal my-5">
                            49 Smith St. <br />Saint Cloud, MN 56301
                        </p>
                        <span class="inline-flex">
                            <a class="text-gray-500" href="https://facebook.com">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-4 text-gray-500" href="https://twitter.com">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-4 text-gray-500" href="https://instagram.com">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-800">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="chesterfield.php" class="flex items-center mb-4 sm:mb-0">
                <img src="svg.svg" class="mr-3 h-8" alt="Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Chesterfield</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="chesterfield.php"
                class="hover:underline">Chesterfield™</a>. All Rights Reserved.
        </span>
    </footer>

    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
</body>

</html>