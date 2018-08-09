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
            $address=$data[1];
            if(isset($_POST['save'])){
                if(strlen($name1)>1 && strlen($address)>1){
                    //$_POST['save']
                    echo "data is $data[0]";
                    $sql = "INSERT INTO info (name , address) VALUES ('$name1' , '$address')";
                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                        exit;
                        $conn->close();
                    }
                }
            }
    }
}
     $pushObj=new DataPush;
     $pushObj->pushData();
?>