<?php
    class DataPush{
        public function pushData(){
            include_once"./connection.php";
            include_once"./dataFetch.php";
            $call=new ConnectionCreate;
            $conn=$call->dbConnect();

            $pull=new DataPull;
             $data=$pull->dataFetch();
             $name1=$data[0];
             $age1=$data[1];
             echo "name is $name1";

            $sql = "INSERT INTO info (name, age) VALUES ('$name1' , '$age1')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
        }
    }
     $pushObj=new DataPush;
     $pushObj->pushData();
?>