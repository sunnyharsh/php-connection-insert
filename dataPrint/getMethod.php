<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<html>
   <body>
   <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        include_once"./connection.php";
        $call=new ConnectionCreate;
        $conn=$call->dbConnect();
        $result=mysqli_query($conn , "select * from info");
        while ($row = $result->fetch_assoc()) {  
            ?>
            <tr>
                <td><?php echo $row['name']; ?> </td>
                <td><?php echo $row['address']; ?></td>
                <td>
                    <a href="#">Add</a>
                </td>
                <td>
                    <a href="#">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

      <form action = "crudOperation.php" method = "POST">
        <div class="input-group">
            <label for="">Name</label> <br>
            <input type="text" name="name">
        </div>
         <div class="input-group">
            <label for="">Address</label> <br>
            <input type="text" name="address">
        </div>
         <div class="input-group">
            <button type="submit" name="save" class="btn">Save</button>
            <button type="submit" name="delete" class="btn">DEL</button>
        </div>
      </form>
   </body>
</html>
<?php
 include_once"./crudOperation.php";
    $name; $address; $data; $conn; $nameErr=""; $name1; 
    
?>
</body>
</html>