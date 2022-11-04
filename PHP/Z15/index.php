<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function sum(int $x, int $y) {
        $z = $x + $y;
        return $z;
      }
      echo "5 + 10 = " . sum(5,10) . "<br>";
      echo "7 + 13 = " . sum(7,13) . "<br>";
      echo "2 + 4 = " . sum(2,4) . "<br><br><br>";

      function odejmowanie(int $x, int $y) {
        $z = $x - $y;
        return $z;
      }
      echo "5 + 10 = " . odejmowanie(5,10) . "<br>";
      echo "7 + 13 = " . odejmowanie(7,13) . "<br>";
      echo "2 + 4 = " . odejmowanie(2,4) . "<br><br><br>";

      function mnożenie(int $x, int $y) {
        $z = $x * $y;
        return $z;
      }
      echo "5 + 10 = " . mnożenie(5,10) . "<br>";
      echo "7 + 13 = " . mnożenie(7,13) . "<br>";
      echo "2 + 4 = " . mnożenie(2,4) . "<br>";

?>
</body>
</html>