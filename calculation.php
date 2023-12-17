<?php
include 'header.php';
?>

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
        <td>5 daqiqalik So’zlar</td>
        <td>words/153*1000</td>
        <td><input type="text" id="inputScore4" oninput="calculatePoints4()"></td>
        <td id="result4"></td>
      </tr>

      <tr>
        <td>10 daqiqalik Kartalar</td>
        <td>cards/589*1000</td>
        <td><input type="text" id="inputScore5" oninput="calculatePoints5()"></td>
        <td id="result5"></td>
      </tr>

      <tr>
        <td>15 daqiqalik Raqamlar</td>
        <td>digits/1385*1000</td>
        <td><input type="text" id="inputScore6" oninput="calculatePoints6()"></td>
        <td id="result6"></td>
      </tr>

      <tr>
        <td>5 daqiqalik Rasmlar</td>
        <td>images/567*1000</td>
        <td><input type="text" id="inputScore7" oninput="calculatePoints7()"></td>
        <td id="result7"></td>
      </tr>


      <tr>
        <td>5 daqiqalik Tarixiy sanalar</td>
        <td>dates/142*1000</td>
        <td><input type="text" id="inputScore8" oninput="calculatePoints8()"></td>
        <td id="result8"></td>
      </tr>

      <tr>
        <td>Ovozli Raqamlar</td>
        <td>&radic;(digits)*47,3</td>
        <td><input type="text" id="inputScore9" oninput="calculatePoints9()"></td>
        <td id="result9"></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td><b>Overall</b></td>
        <td id="overall"></td>
      </tr>
    </tbody>
  </table>
</section>

  <script>
  function calculatePoints() {
    updateResult('result', 'inputScore', 1550);
  }

  function calculatePoints2() {
    updateResult('result2', 'inputScore2', 95);
  }

  function calculatePoints3() {
    updateResult('result3', 'inputScore3', 649);
  }

  function calculatePoints4() {
    updateResult('result4', 'inputScore4', 153);
  }

  function calculatePoints5() {
    updateResult('result5', 'inputScore5', 589);
  }

  function calculatePoints6() {
    updateResult('result6', 'inputScore6', 1385);
  }

  function calculatePoints7() {
    updateResult('result7', 'inputScore7', 567);
  }

  function calculatePoints8() {
    updateResult('result8', 'inputScore8', 142);
  }

  function calculatePoints9() {
    var inputScore = document.getElementById('inputScore9').value;
    var result = Math.sqrt(inputScore) * 47.3;
    document.getElementById('result9').textContent = result ? result.toFixed(2) : "";
    calculateOverall();
  }

  function updateResult(resultId, inputId, divisor) {
    var inputScore = document.getElementById(inputId).value;
    var result = (inputScore !== "") ? (inputScore / divisor) * 1000 : "";
    document.getElementById(resultId).textContent = result ? result.toFixed(2) : "";
    calculateOverall();
  }

  function calculateOverall() {
    var results = [
      'result', 'result2', 'result3', 'result4',
      'result5', 'result6', 'result7', 'result8', 'result9'
    ];
    var overallResult = 0;
    var count = 0;

    for (var i = 0; i < results.length; i++) {
      var result = parseFloat(document.getElementById(results[i]).textContent) || 0;
      if (result !== 0) {
        overallResult += result;
        count++;
      }
    }

    overallResult = (count !== 0) ? overallResult / count : 0;

    document.getElementById('overall').textContent = overallResult.toFixed(2);
  }
</script>




</body>
</html>