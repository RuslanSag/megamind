<?php
include './header.php';
include './connection.php';
?>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="./css/main.css">


<section class="news_table">
<?php
$sql = "SELECT * FROM news";
$res = $link->query($sql);
if ($res->num_rows > 0) {
    while ($row = mysqli_fetch_array($res)) {
        $id = $row["id"];
        $title = $row["title"];
        $text = $row["text"];
        $datetime = $row["datetime"];
?>
        <div class="grid grid-cols-1 md:grid-cols-2 mt-5">
            <div class=" p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $title ?></h5>

                </div>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $text ?></p>
                <small>Posted: <?php echo $datetime ?></small>
                
            </div>
        </div>
        <?php
        ?>
<?php
    }
} else {
    echo "0 results";
}
?>
</section>
