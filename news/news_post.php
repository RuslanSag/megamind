<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="../css/main.css">

<form action="news_add.php" method="POST">
    <div class="m-5 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow  dark:border-gray-700 dark:hover:bg-gray-700">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" id="first_name" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sarlavha" required>
        </div>

        <div class="mt-5 mb-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Text</label>
            <textarea id="message" name="tex" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
        </div>


        <div class="flex justify-between">
            <small>
                Posted: <br>
                <input type="text" name="datetime" value=" <?php date_default_timezone_set('Asia/Karachi');
                                                            $currentDateTime  = date('Y-m-d H:i');
                                                            echo $currentDateTime; ?>">
            </small>
            <button class="add" type="submit" name="submit">Add</button>
        </div>
    </div>

</form>

<?php
// Set the default time zone (you can set it to your specific time zone)
date_default_timezone_set('UTC');

// Get the current date and time
$currentDateTime = date('Y-m-d H:i');

// Output the result

?>