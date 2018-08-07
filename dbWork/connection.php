<?php
     
   class ConnectionCreate{
        public function dbConnect(){
            echo "hello";
            $conn = new mysqli('localhost', 'root', '', 'Demo');
                if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 } 
                 return $conn;
            } 
   } 
?>