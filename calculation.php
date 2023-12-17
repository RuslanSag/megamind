<?php
include './header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.tailwindcss.com" rel="stylesheet">
  <link rel="stylesheet" href="./css/main.css">
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
</head>
<body>
  <section class="cal_table">
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
  
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td id="overall"></td>
        </tr>
      </tbody>
    </table>

  </section>


  <script>
    function calculatePoints() {
      // Get the input value
      var inputScore = document.getElementById('inputScore').value;

      // Perform the calculation
      var result = (inputScore / 1550) * 1000;

      // Update the result in the corresponding <td>
      document.getElementById('result').textContent = result.toFixed(2);
      
      // Recalculate the overall result
      calculateOverall();
    }

    function calculatePoints2() {
      // Get the input value
      var inputScore = document.getElementById('inputScore2').value;

      // Perform the calculation
      var result = (inputScore / 95) * 1000;

      // Update the result in the corresponding <td>
      document.getElementById('result2').textContent = result.toFixed(2);
      
      // Recalculate the overall result
      calculateOverall();
    }

    function calculatePoints3() {
      // Get the input value
      var inputScore = document.getElementById('inputScore3').value;

      // Perform the calculation
      var result = (inputScore / 649) * 1000;

      // Update the result in the corresponding <td>
      document.getElementById('result3').textContent = result.toFixed(2);
      
      // Recalculate the overall result
      calculateOverall();
    }

    function calculateOverall() {
      // Get individual results
      var result1 = parseFloat(document.getElementById('result').textContent);
      var result2 = parseFloat(document.getElementById('result2').textContent);
      var result3 = parseFloat(document.getElementById('result3').textContent);

      // Calculate overall result
      var overallResult = (result1 + result2 + result3) / 3;

      // Update the overall result in the corresponding <td>
      document.getElementById('overall').textContent = overallResult.toFixed(2);
    }
  </script>

</body>
</html>
