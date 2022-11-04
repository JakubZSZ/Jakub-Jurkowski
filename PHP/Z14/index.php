<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function familyName($fname, $year) {
        echo "$fname Refsnes. Born in $year. <br>";
    }
    familyName("Raw", "1941");
    familyName("Stale", "2002");
    familyName("Kai", "1944");
    ?>
</body>
</html>