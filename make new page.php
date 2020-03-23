<?php
            
              if(isset($_POST['full_name']))
              {
              $data=$_POST['full_name'];
              $fp = fopen('data.txt', 'a');
              fwrite($fp, $data);
              fclose($fp);
              }
              if(isset($_POST['user_name']))
              {
              $data=$_POST['user_name'];
              $fp = fopen('data.txt', 'a');
              fwrite($fp, $data);
              fclose($fp);
              }
              if(isset($_POST['email']))
              {
              $data=$_POST['email'];
              $fp = fopen('data.txt', 'a');
              fwrite($fp, $data);
              fclose($fp);
              }
              if(isset($_POST['message']))
              {
              $data=$_POST['message'];
              $fp = fopen('data.txt', 'a');
              fwrite($fp, $data);
              fclose($fp);
              }
              
              ?>
              
              