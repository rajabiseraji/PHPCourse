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
<!--<form action="five.php" method="post">-->
<!--    <input type="text" name="value">-->
<!--    <input type="submit" value="enter">-->
<!--</form>-->

<form action="page.php" method="post">
    <input type="checkbox" name="check_list[]" value="value 1">
    <input type="checkbox" name="check_list[]" value="value 2">
    <input type="checkbox" name="check_list[]" value="value 3">
    <input type="checkbox" name="check_list[]" value="value 4">
    <input type="checkbox" name="check_list[]" value="value 5">
    <input type="submit" />
</form>
<?php
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
        echo $check; //echoes the value set in the HTML form for each checked checkbox.
        //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
        //in your case, it would echo whatever $row['Report ID'] is equivalent to.
    }
}
?>

</body>
</html>