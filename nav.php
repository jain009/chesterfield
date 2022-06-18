<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chesterfield</title>
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="svg(2).ico" type="image/x-icon" />
  </head>
  <body>
  <header
      class="inset-x-0 flex justify-between text-gray-600 body-font bg-red-200"
    >
      <div
        class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
      >
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
          <a class="mr-5 hover:text-gray-900 cursor-pointer" href="#Catalogue"
            >Home</a
          >
          <a class="mr-5 hover:text-gray-900 cursor-pointer" href="#testimonial"
            >About</a
          >
          <a class="hover:text-gray-900 cursor-pointer" href="#contact"
            >Contact Us</a
          >
        </nav>
        <a
          class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0"
        >
          <img src="svg.svg" class="w-10 h-10 ml-1" alt="" />
          <span class="ml-3 text-xl text-center">Chesterfield</span>
        </a>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
          <!-- <button
            class="inline-flex items-center bg-red-500 text-white border-0 py-1 px-3 ml-2 focus:outline-none hover:bg-gray-300 text-gray-600 rounded text-base mt-4 md:mt-0"
            type="button"
            data-dropdown-toggle="dropdown"
          >
            Login
            <svg
              class="w-4 h-4 ml-2"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
              ></path>
            </svg>
          </button> -->
          <!-- Dropdown menu
          <div
            class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4"
            id="dropdown"
          >
            <ul class="py-1" aria-labelledby="dropdown">
              <li>
                <a
                  href="Admin1.html"
                  class="text-sm hover:bg-red-100 text-gray-700 block px-4 py-2"
                  >Admin</a
                >
              </li>
              <li>
                <a
                  href="login.html"
                  class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"
                  >User</a
                >
              </li>
            </ul>
          </div> -->
          <a
            class="inline-flex items-center bg-red-500 text-white border-0 py-1 px-3 ml-2 focus:outline-none hover:bg-gray-300 text-gray-600 rounded text-base mt-4 md:mt-0"
            href="Login.php"
          >
            Login
            <svg
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="w-4 h-4 ml-1"
              viewBox="0 0 24 24"
            >
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <a
            class="inline-flex items-center bg-red-500 text-white border-0 py-1 px-3 ml-2 focus:outline-none hover:bg-gray-300 text-gray-600 rounded text-base mt-4 md:mt-0"
            href="Signup.php"
          >
            SignUp
            <svg
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="w-4 h-4 ml-1"
              viewBox="0 0 24 24"
            >
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <!-- <a
            class="inline-flex items-center bg-red-500 text-white border-0 py-1 px-3 ml-2 focus:outline-none hover:bg-gray-300 text-gray-600 rounded text-base mt-4 md:mt-0"
            href="logout.php"
          >
            Logout
            <svg
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              class="w-4 h-4 ml-1"
              viewBox="0 0 24 24"
            >
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a> -->
        </div>
      </div>
    </header>
  </body>