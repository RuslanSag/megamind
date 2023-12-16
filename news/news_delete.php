<?php
    include "../connection.php";
    $id = $_GET["id"];
    mysqli_query($link, "delete from news where id = $id");
?>

<script type="text/javascript">
    window.location="news.php"
    
</script>