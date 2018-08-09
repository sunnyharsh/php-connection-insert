<?php
    class DataPush{
        public function pushData(){
            include_once"./connection.php";
            include_once"./dataFetch.php";
            $call=new ConnectionCreate;
            $conn=$call->dbConnect();
            if(isset($_POST['save'])){
                $pull=new DataPull;
                $data=$pull->dataFetch();
                $name1=$data[0];
                $address=$data[1];
                if(strlen($name1)>1 && strlen($address)>1){
                    echo "data is $data[0]";
                    $sql = "INSERT INTO info (name , address) VALUES ('$name1' , '$address')";
                    if ($conn->query($sql) === TRUE) {
                        header('Location: ./getMethod.php');
                        echo "New record created successfully";
                        
                        exit;
                        $conn->close();
                        
                    }
                }
            }
            
            else if(isset($_POST['delete'])){

                header('Location: ./welcome.php');
            }
            
           
    }
   
}
     $pushObj=new DataPush;
     $pushObj->pushData();
?>