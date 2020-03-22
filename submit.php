<?php
   include 'db_connection.php'; 
   $conn = OpenCon();
   echo "connection sucessful";
   CloseCon($conn);

        echo("<h1>CONTACT INFO SUBMITTED</h1><br/>");
        echo(" welcome <br/> "); 
      

        
 print_r($_POST); 
?>
    