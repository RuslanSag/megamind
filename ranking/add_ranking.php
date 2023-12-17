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
    $name = $_POST['name'];
    $country = $_POST['country'];
    $overall = $_POST['overall']; // Note: Assuming that the datetime is set in the form, adjust as needed
    $score1 = $_POST['score1']; // Note: Assuming that the datetime is set in the form, adjust as needed
    $score2 = $_POST['score2']; // Note: Assuming that the datetime is set in the form, adjust as needed
    $score3 = $_POST['score3']; // Note: Assuming that the datetime is set in the form, adjust as needed



    // Create connection

    // Check connection
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO ranking (name, country, overall, score1, score2, score3) VALUES ('$name', '$country', '$overall', '$score1', '$score2', '$score3')";

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
            window.location.href = "post_ranking.php";
        }, 3000);
    </script>
<?php

    // Close connection
    $link->close();
}
?>