<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="../css/main.css">
<style>
    table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
</style>

<table>
    <thead>
        <tr>
            <th>Discipline</th>
            <th>Calculation formula</th>
            <th>Raw Score</th>
            <th>Championship points</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>5 daqiqalik binar raqamlari</td>
            <td>digits/1550*1000</td>
            <td><input type="text" id="inputScore" oninput="calculatePoints()"></td>
            <td id="result"></td>
        </tr>

        <tr>
            <td>5 daqiqalik Yuz va ismlar</td>
            <td>names/95*1000</td>
            <td><input type="text" id="inputScore2" oninput="calculatePoints2()"></td>
            <td id="result2"></td>
        </tr>

        <tr>
            <td>5 daqiqalik Raqamlar</td>
            <td>digits/649*1000</td>
            <td><input type="text" id="inputScore3" oninput="calculatePoints3()"></td>
            <td id="result3"></td>
        </tr>
        
        <!-- Add more rows for additional data -->
    </tbody>
</table>

<script>
    function calculatePoints() {
        // Get the input value
        var inputScore = document.getElementById('inputScore').value;

        // Perform the calculation
        var result = (inputScore / 1550) * 1000;

        // Update the result in the corresponding <td>
        document.getElementById('result').textContent = result.toFixed(2); // Adjust decimal places as needed
    }


    function calculatePoints2() {
        // Get the input value
        var inputScore = document.getElementById('inputScore2').value;

        // Perform the calculation
        var result = (inputScore / 95) * 1000;

        // Update the result in the corresponding <td>
        document.getElementById('result2').textContent = result.toFixed(2); // Adjust decimal places as needed
    }

    function calculatePoints3() {
        // Get the input value
        var inputScore = document.getElementById('inputScore3').value;

        // Perform the calculation
        var result = (inputScore / 649) * 1000;

        // Update the result in the corresponding <td>
        document.getElementById('result3').textContent = result.toFixed(2); // Adjust decimal places as needed
    }
</script>