<!DOCTYPE html>
<html>
<body>

<?php  
$cars = array("Avanza","Fortuner","Brio");
var_dump($cars);
$motor = array("Revo", "Vario", "Aerox");
var_dump($motor);
?>  
<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
?>
<?php  
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;

var_dump($myCar);
?>  
</body>
</html>