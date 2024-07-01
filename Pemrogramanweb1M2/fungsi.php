<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nama Keluarga</h1>
<?php
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Jani", "1999");
familyName("Hege", "2000");
familyName("Stale", "2001");
familyName("Kai Jim", "2002");
familyName("Borge", "2003");
?>
</body>
</html>