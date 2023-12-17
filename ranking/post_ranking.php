<?php
include '../header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
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
</head>

<body>

    <section class="cal_table">
        <form action="add_ranking.php" method="POST">
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
                    <tr>
                        <td id="rank"></td>
                        <td><input type="text" name="name" id="name"></td>
                        <td><input type="text" name="country" id="country"></td>
                        <td><input type="text" name="overall" id="overall" readonly></td>
                        <td><input type="text" name="score1" id="score1" oninput="calculateAverage()"></td>
                        <td><input type="text" name="score2" id="score2" oninput="calculateAverage()"></td>
                        <td><input type="text" name="score3" id="score3" oninput="calculateAverage()"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button class="add" type="submit" name="submit">Add</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </section>

    <script>
        function calculateAverage() {
            var scores = [];
            var overallInput = document.getElementById('overall');
            var overallValue = 0;

            // Get all non-empty scores
            for (var i = 1; i <= 3; i++) {
                var score = parseFloat(document.getElementById('score' + i).value);
                if (!isNaN(score)) {
                    scores.push(score);
                }
            }

            // Calculate average
            if (scores.length > 0) {
                overallValue = scores.reduce((a, b) => a + b) / scores.length;
            }

            // Update overall value
            overallInput.value = overallValue.toFixed(2);
        }
    </script>
</body>

</html>