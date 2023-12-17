<?php
include '../header.php';
include '../connection.php';
?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    input {
        border: 0.5px solid #999;
    }
</style>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="../css/main.css">

<section class="news_grid">
    <table>
        <thead>
            <tr>
                <th>Rank</th>
                <th>Competitor</th>
                <th>Country</th>
                <th>Average</th>
                <th>Score 1</th>
                <th>Score 2</th>
                <th>Score 3</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT id, name, country, overall, score1, score2, score3 FROM ranking ORDER BY CAST(overall AS DECIMAL(10,2)) DESC";
            $res = $link->query($sql);
            if ($res->num_rows > 0) {
                $counter = 0; // Initialize the counter
                $previousOverall = null; // Variable to store the previous overall score

                while ($row = mysqli_fetch_array($res)) {
                    $id = $row["id"];
                    $name = $row["name"];
                    $country = $row["country"];
                    $overall = $row["overall"];
                    $score1 = $row["score1"];
                    $score2 = $row["score2"];
                    $score3 = $row["score3"];

                    // Increment the counter only if the overall score changes
                    if ($overall !== $previousOverall) {
                        $counter++;
                    }
            ?>

                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $country; ?></td>
                        <td><?php echo $overall; ?></td>
                        <td><?php echo $score1; ?></td>
                        <td><?php echo $score2; ?></td>
                        <td>
                            <div class="flex justify-between">
                                <?php echo $score3; ?>
                                <div class="flex">
                                    <a href="./edit_ranking.php?id=<?php echo $row["id"]; ?> " class="warning"><img src="../img/edit.svg" alt=""></a>
                                    <a href="./delete_ranking.php?id=<?php echo $row["id"]; ?> " class="danger ms-2"><img src="../img/trash.svg" alt=""></a>
                                </div>
                                </div>
                        </td>
                    </tr>

            <?php
                    // Update the previous overall score for the next iteration
                    $previousOverall = $overall;
                }
            } else {
                echo "0 results";
            }
            ?>
        </tbody>
    </table>
</section>