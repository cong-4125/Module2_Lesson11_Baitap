<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  method="post">
<textarea name="textarea"  placeholder="Phone Number"></textarea>
<button type="submit">Phan loai</button>
</form>
<?php
$Viettel = array();
$Vina = array();
$Mobi = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phoneNumber = explode(",",$_POST["textarea"]);


    for ($i = 0; $i < count($phoneNumber); $i++) {
        $x = substr($phoneNumber[$i], 0, 3);
        if ($x == "098" || $x == '097' || $x == '03') {
            array_push($Viettel, $phoneNumber[$i]);
        }elseif ($x == "091"|| $x == '094' || $x == '08'){
            array_push($Vina,$phoneNumber[$i]);
        }else {
            array_push($Mobi,$phoneNumber[$i]);
        }
    }
}
 echo "<pre>";
print_r($Viettel);
var_dump($Vina);
var_dump($Mobi);
echo "</pre>";
?>
</body>
</html>
