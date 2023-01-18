
<?php session_start(); ?>
<?php 
            if(isset($_POST['submit']) && ($_SERVER['REQUEST_METHOD'] === 'POST')){
               $ip_addr = $_POST['ip'];
               // $ip = preg_replace("/[^a-z0-9.-:]/i", "", $ip_addr);
               $min_port = 1;
               $max_port = 80;
               $result_path = "~/Desktop/log/result_".$ip_addr.".xml";
               // $min_port = $_POST['min_port'];
               // $max_port = $_POST['max_port'];    
               $cmd = "/usr/bin/nmap -p ".$min_port."-".$max_port." ".$ip_addr." -oA ".$result_path." --open";
               $stream = popen($cmd,'r');
               $result  = array();

               $xml = new SimpleXMLElement($result_path, 0, true);
               $data_port = $result->nmaprun->host->ports->port;

               foreach($data_arr as $row){
                  echo $row['portid'];
               }
               // while (!feof($stream)) {
                  
               // //Make sure you use semicolon at the end of command
               //    $buf = fread($stream, 1024);
               //    array_push($output,  $buf);
               // }
               
               // $info_reg = "/(\d{1,5})\/(tcp|udp)\s+open/g";
               // preg_match_all($info_reg, $output[2],$matches);

               // echo $matches;

               pclose($stream);
            }

?>