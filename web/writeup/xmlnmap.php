<?php
if(isset($_POST['submit']) && ($_SERVER['REQUEST_METHOD'] === 'POST'))
{
   # local host의 경우 실제 IP 주소값 가져오기 
   if ($_POST['ip'] == "127.0.0.1"){
      $addr = gethostbyname(php_uname('n'));
      $ip_addr = $addr[0];
   }
   else{
      $ip_addr = $_POST['ip'];
   }
   $ip = preg_replace("/[^a-z0-9.-:]/i", "", $ip_addr);
   $min_port = $_POST['min_port'];
   $max_port = $_POST['max_port'];
   if(!empty($ip) && function_exists("socket_create"))
   {
       if(isset($min_port) && isset($max_port))
       {
           $socket = @socket_create(AF_INET, SOCK_STREAM, 0);
           echo "<h4 style='color:#BEEFFF'>Scanning ..." . $ip . "</h4>\n";
           
           for($p = $min_port ; $p <= $max_port ; $p = $p+1)
           {
               $num = preg_replace("/[^0-9]/", "", $p);
               if($num)
               {
                   $result = @socket_connect($socket, $ip, $p);
                   if($result)
                   {
                     echo "<h4 style='color:white;' >" . $p . "</h6>\n";
                   }
               }
               else
               {
                   echo "<font color='red'>Socket Connection Error</font>\n";
               }
            
           }
           @socket_close($socket);
       }   
   }
   else{
       echo "<font color='red'>IP is empty!</font>\n";
   }

}
echo '<pre>';
# print_r($output          
 ?>