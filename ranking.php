<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grid List with Tailwind CSS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-image: url(img/books.jpg);  background-repeat: no-repeat;">
<div class="container mt-10 mx-auto p-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 xl:grid-cols-5 gap-4 dark:bg-slate-800/90 p-4">

        <div class="text-white text-center flex items-center flex-col justify-center p-4 rounded-md">
            <a href="#">
                <i class="text-3xl fas fa-list-ol"></i>
                <h1 class="text-bold text-sm">World Ranking</h1>
            </a>
        </div>
        <div class="text-white text-center flex items-center flex-col justify-center p-4 rounded-md">
            <a href="#">
                <i class="text-3xl fas fa-globe-americas"></i>
                <h1 class="text-bold text-base">Natsional Ranking</h1>
            </a>
        </div>
        <div class="text-white text-center flex items-center flex-col justify-center p-4 rounded-md">
            <a href="#">
                <i class="text-3xl far fa-star"></i>
                <h1 class="text-bold text-sm">Records</h1>
            </a>
        </div>
        <div class="text-white text-center flex items-center flex-col justify-center p-4 rounded-md">
            <a href="#">
                <i class="text-3xl fas fa-user-alt"></i>
                <h1 class="text-bold text-sm">Compotitors</h1>
            </a>
        </div>
        <div class="text-white text-center flex items-center flex-col justify-center p-4 rounded-md">
            <a href="#">
                <i class="text-3xl fas fa-calendar-alt"></i>
                <h1 class="text-bold text-sm">Compotitons</h1>
            </a>
        </div>
        <div class="text-white text-center flex items-center flex-col justify-center p-4 rounded-md">
            <a href="#">
                <i class="text-3xl fas fa-calculator"></i>
                <h1 class="text-bold text-sm">Score Calculator</h1>
            </a>
        </div>
    </div>



</div>
  

</body>
</html>
