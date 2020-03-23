<?php
   include 'db_connection.php'; 
   $conn = OpenCon();
   echo "connection sucessful";
   CloseCon($conn);

        echo("<h1>CONTACT INFO SUBMITTED</h1><br/>");
        echo(" welcome <br/> "); 
      
      
 print_r($_POST); 


if ( isset( $_POST['submit'] ) ) { 
 $full_name = $_POST['full_name']; 
 $user_name = $_POST['user_name']; 
 $email = $_POST['email']; 
 $message = $_POST['message'];   
 // display the results
echo '<h3>contact form details</h3>'; 
echo 'fullname is : ' . $full_name . ' <br/>' ;
echo 'username is : ' . $user_name . ' <br/>' ;
echo 'user email is : ' . $email . ' <br/>' ;
echo 'message written is : ' . $message . ' <br/>' ;
exit; } 


              if(isset($_POST['full_name']))
              {
              $data=$_POST['full_name'];
              $fp = fopen('infotxt', 'a');
              fwrite($fp, $data);
              fclose($fp);
              }
              if(isset($_POST['user_name']))
              {
              $data=$_POST['user_name'];
              $fp = fopen('info.txt', 'a');
              fwrite($fp, $data);
              fclose($fp);
              }
              if(isset($_POST['email']))
              {
              $data=$_POST['email'];
              $fp = fopen('info.txt', 'a');
              fwrite($fp, $data);
              fclose($fp);
              }
              if(isset($_POST['message']))
              {
              $data=$_POST['message'];
              $fp = fopen('info.txt', 'a');
              fwrite($fp, $data);
              fclose($fp);
              }
              
              ?>

<?php
if(isset($_POST['submit'])){
if(!empty($_POST['knower'])) {
echo "<span>You have selected :</span><br/>";
foreach ($_POST['knower'] as $select)
{
echo "<span><b>".$select."</b></span><br/>";
}
}
else { echo "<span>Please Select Atleast One Color.</span><br/>";}
}
?>  

