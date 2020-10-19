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

<form method="post">
    Input Number: <br>
    <input type="text" name="inputNumber" placeholder="InputNumber"><br>
    <input type="text" name="checkNumber" placeholder="check"><br>

    <button type="submit">Submit</button>
    <button type="submit">Check</button>
</form>


<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $inputNumber = $_POST['inputNumber'];
    $check = $_POST['checkNumber'];


    function checkNumber($number, $arr)
    {
        $first = 0;
        $last = count($arr) - 1;
        while ($last >= $first) {
            $mid = (int)(($first + $last) / 2);

            if ($arr[$mid] > $number) {
                $last = $mid - 1;
                echo "Nhap so lon hon";
                echo "<br>";
            } elseif ($arr[$mid] < $number) {
                $first = $mid + 1;
                echo "Nhap so nho hon";
                echo "<br>";
            } else {
                return true;
            }
        }
        return false;
    }

    $arr = [];
    for ($i = 0; $i <= 100; $i++) {
        array_push($arr, $i);
    }


    if (checkNumber($inputNumber, $arr)) {
        echo "Tro choi ket thuc";
    } else {
        echo "Khong co gia tri";
    }

}
?>
</body>
</html>