<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
 include_once"./dataInsert.php";
    $name; $age; $data; $conn;
?>

<html>
   <body>
      <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
   </body>
</html>
</body>
</html>