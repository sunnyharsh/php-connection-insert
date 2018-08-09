<?php
        class DataPull{
            function dataFetch(){
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                     if(isset($_POST['save'])){
                        $name=$_POST["name"];
                        $address=$_POST["address"];
                        echo "name is $name and address is $ $address";
                        $data = array("$name" , "$address");
                      return $data;
                     }
                    
                } 
            }
        }     
?>