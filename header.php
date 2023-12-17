<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>Your Website</title>
</head>

<body>
  <!-- HEADER -->
  <header class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">

      <!-- Logo -->
      <div class="text-2xl font-bold">
        <a href="#" class="text-white">Your Logo</a>
      </div>

      <!-- Navigation -->
      <nav class="hidden md:flex space-x-4">
        <a href="./index.php" class="hover:text-gray-300">Bosh sahifa</a>
        <a href="./posted_news.php" class="hover:text-gray-300">Yangiliklar</a>
        <a href="./ranking.php" class="hover:text-gray-300">Reyting</a>
        <a href="./calculation.php" class="hover:text-gray-300">Kalkulyatsiya</a>
        <a href="./rules.php" class="hover:text-gray-300">Qoidalar</a>
        <a href="#" class="hover:text-gray-300">Federatsiya haqida</a>
      </nav>

      <!-- Mobile Menu Button (Hidden on Larger Screens) -->
      <div x-data="{ open: false }" class="relative md:hidden">
        <button @click="open = !open" class="text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
        <!-- Mobile Menu (Hidden on Larger Screens) -->
        <div x-show="open" x-transition
          class="absolute top-9 right-0 w-60 p-4 mt-2 bg-white bg-opacity-25 rounded-md shadow-md backdrop-blur-md">
          <a href="#"
            class="block text-white py-2 hover:text-gray-200 transition delay-150 duration-300 ease-in-out">Bosh
            sahifa</a>
          <a href="#"
            class="block text-white py-2 hover:text-gray-200 transition delay-150 duration-300 ease-in-out">Yangiliklar</a>
          <a href="#"
            class="block text-white py-2 hover:text-gray-200 transition delay-150 duration-300 ease-in-out">Reyting</a>
          <a href="#"
            class="block text-white py-2 hover:text-gray-200 transition delay-150 duration-300 ease-in-out">Kalkulyatsiya</a>
          <a href="#"
            class="block text-white py-2 hover:text-gray-200 transition delay-150 duration-300 ease-in-out">Qoidalar</a>
          <a href="#"
            class="block text-white py-2 hover:text-gray-200 transition delay-150 duration-300 ease-in-out">Federatsiya
            haqida</a>
        </div>
      </div>
    </div>
  </header>