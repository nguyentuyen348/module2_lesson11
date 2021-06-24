<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<form method="post">
     Enter telephone number:<br>
    <label>
<textarea  rows="4" cols="50" name="telephoneNumber">
</textarea>
    </label><br>
    <input type="submit" name="submit">
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $arr = $_POST['telephoneNumber'];
    $arrTelephoneNums = explode(",", $arr);
    $viettels=[];
    $vinaphones=[];
    foreach ($arrTelephoneNums as $value) {
        $arrTelephoneNum = substr($value, 0, 2);

        if ($arrTelephoneNum == '09') {
             $value;
             array_push($viettels,$value);

        }
        elseif ($arrTelephoneNum == '08'){
            $value;
            array_push($vinaphones,$value);
        }
    }

    $vietteldata = implode(",", $viettels);
    echo "viettel: ". $vietteldata."<br>";
    $vinaphonedata = implode(',',$vinaphones);
    echo "vinaphone: ".$vinaphonedata;


}


