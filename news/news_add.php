<?php
include '../connection.php';

?>
<div class="alerts">
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="error" style="display:none;">
        Bu Hajm Birlik mavjud! Iltmos boshqa Hajm Birlik qo`shing
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success" style="display:none;">
        Hajm Birlik muvaffaqiyatli qo`shildi
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    // Get form data
    $title = $_POST['title'];
    $text = $_POST['tex'];
    $datetime = $_POST['datetime']; // Note: Assuming that the datetime is set in the form, adjust as needed



    // Create connection

    // Check connection
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO news (title, text, datetime) VALUES ('$title', '$text', '$datetime')";

    if ($link->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }

?>
    <script type="text/javascript">
        document.getElementById('error').style.display = "none";
        document.getElementById('success').style.display = "block";
        setTimeout(function() {
            window.location.href = "news_post.php";
        }, 3000);
    </script>
<?php

    // Close connection
    $link->close();
}
?>