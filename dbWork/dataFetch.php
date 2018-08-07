<?php
        class DataPull{
            function dataFetch(){
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // name field pull from front end
                    if (empty($_POST["name"])) {
                        $nameErr = "Name is required";
                      } else {
                        $name=$_POST["name"];
                        // echo "<br> name is $name <br>";
        
                      }
                      //age field pull from front end
                      if(empty($_POST["age"])){
                          $ageErr="age is required";
                      }else{
                          $age=$_POST["age"];
                        //   echo "age is $age";
                      }
                      $data = array($name , $age);
                      return $data;
                }
                
            }
        }
        
?>