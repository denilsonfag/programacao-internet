<?php
  session_start();
  if(!isset($_SESSION['user'])) {
    header('location:../');
    die();
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    *{
      font-family: Arial, sans-serif;
      font-size: 19px;
      text-align: center;
    }

    .join{
      display: inline;
    }
  </style>
  <script type="text/javascript">
    function calcular() {
      var numero1 = parseFloat(document.getElementById('n1').value);
      var numero2 = parseFloat(document.getElementById('n2').value);
      var total = 0;

      if (document.getElementById('opt').value == "sum") {
        total = numero1 + numero2;
      } else if (document.getElementById('opt').value == "sub") {
        total = numero1 - numero2;
      } else if (document.getElementById('opt').value == "mul") {
        total = numero1 * numero2;
      } else if (document.getElementById('opt').value == "div") {
        total = numero1 / numero2;
      }
      document.getElementById('result').innerHTML = total;
    }
  </script>
</head>
<body>
  <form action="#">
    <p>Valor 1</p>
    <p>
      <input id="n1" type="number" name="number1">
    </p>
    
    <p>Operação</p>
    <p>
      <select id="opt" name="Operation" onchange="calcula-js.html">
        <option value="sum">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
      </select>
    </p>

    <p>Valor 2</p>
    <p>
      <input id="n2" type="number" name="number2">
    </p>
    <p class="join">Resultado = </p>
    <p id="result" class="join">0</p>
    <p>
      <input type="button" value="Calcular" onclick="calcular();">
    </p>
  </form>
</body>
</html>