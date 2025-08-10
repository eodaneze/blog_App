<?php 

   require_once('./config.php');

   try{

       loadEnv();

        $hostName = getenv('DB_HOST');
        $userName = getenv('DB_USER');
        $password = getenv('DB_PASSWORD');
        $dbName = getenv('DB_NAME');


        $conn = mysqli_connect($hostName, $userName, $password, $dbName);

        if(!$conn){
            echo "Failed to connect to db: " . mysqli_connect_error();
        }else{
             echo "Db connection was successful";
        }

   }catch(Exception $e){
       die("Error loading environment variables: ". $e->getMessage());
   }
 
?>