<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Port Scanner</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="./images/barcode.PNG" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <!-- fontawesome -->
      <script src="https://code.jquery.com/jquery-latest.min.js"></script>
      <script src="https://kit.fontawesome.com/6604ab134b.js" crossorigin="anonymous"></script>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="index.html">Home</a>
         <a href="login.php">Login</a>
         <a href="#PortScan">Port Scan</a>
         <a href="#about">About</a>
         <a href="#we_Do">We Do</a>
         <a href="#team">Our Team</a>
         <a href="#findus">Find Us</a>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div id="header" class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                     <div class="sea_icon d_none ">
                        <a href="#findus"><i class="fa-solid fa-angles-down" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col logo_section">
                     <div class="full">
                           <div class="logo">
                              <a href="index.html"><img src="./images/logo_re.png" alt="#" /></a>
                           </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                     <div class="right_bottun">
                        <button class="openbtn" onclick="openNav()"><img src="images/menu_icon.png" alt="#"/> </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1>&nbspPort</h1>
                           <span>&nbspScanner</span>
                           <a class="read_more" href="#PortScan">start</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1>&nbsp포트</h1>
                           <h2>&nbsp스캐너</h2>
                           <a class="read_more" href="#PortScan">start</a>                         
                        </div>
                     </div>
                  </div>
               </div>              
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- Port Scanner section -->
      <div id="PortScan" class="software">
         <div class="container-change-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage">
                     <br>
                     <h2>Port Scan</h2>
                     <div id="ip-container">
	                     <form method="post" id = "ip-form" name="ip-form" >
		                     <div class="ip-form-group">
			                     <label for="ip" class="ip-form-label" >IP: </label>
			                     <input type="text" name="ip" class="ip-form-input" id="ip" pattern="^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$" autofocus required placeholder="ex) example.com or ip address">
		                     </div>
                           <?php if(isset($_SESSION['user_id']) || isset($_SESSION['user_name'])) { ?>
                           <div class="ip-form-group">
			                     <label for="min_port" class="ip-form-label">MIN PORT</label>
			                     <input type="number" name="min_port" class="ip-form-input" id="min_port" min="1" max="65535" value="1">
		                     </div>
		                     <div class="ip-form-group">
			                     <label for="max_port" class="ip-form-label">MAX PORT</label>
			                     <input type="number" name="max_port" class="ip-form-input" id="max_port" min="1" max="65535" value="1024">
		                     </div>
                           <?php } else { ?>
                           <input class= "user-ip-btn" id ="btn" type="button" value="User IP" >
                           <script>
                              $(document).ready(function(){
                                 $('.user-ip-btn').click(function(){
                                    $.getJSON("https://api.ipify.org?format=jsonp&callback=?", function(json) {
                                       $('#ip').val(json.ip);
                                    });
                                 })
                              })
                           </script>
                           <?php } ?>
		                        <button id = "btn" name ="submit" type="submit">Submit</button>
	                     </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="software-itme_conteiner">
            <h2>Result</h2>
            <div class="result-container">
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
            # print_r($output);

            ?>
            </div>
         </div>
      </div>
      <!-- Port Scanner section -->
      <!-- about section -->
      <div id="about" class="about">
         <div class="container">
            <div class="row ">
               <div class="col-md-5">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="titlepage">
                           <h2>About</h2>
                           <p> 포트스캔이란, 컴퓨터 네트워크를 통해 서버의 포트(port)를 스캔하여 서버가 제공하고 있는 서비스들을 찾아내는 것 입니다.
                               해커들이 컴퓨터의 취약점을 찾기 위한 공격으로도 사용됩니다. </p>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="about_img">
                           <figure><img src="./images/수정.png" alt="#"/></figure>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_right">
                     <figure><img src="images/about_right.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <!-- software section -->
      <div class="software">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage">
                     <h2>Outline</h2>
                     <p>&nbsp&nbsp우리가 사용하고 있는 모든 소프트웨어 서비스는 네트워크에서 통신합니다. 네트워크상에서 데이터를 전송할 때는 목적지를 IP 주소를 통해 지정합니다. 명확한 데이터 전송을 위해서는 데이터가 어떤 프로세스로 이뤄졌는지 지정해야 합니다. 이때 필요한 것이 포트 번호입니다. 포트 번호는 0번에서 65535번까지 존재하며 0번에서 1023번까지는 잘 알려진 포트로 서비스가 지정되어 있습니다. 예로 80은 http이며, 443은 https입니다. 
                        <br>&nbsp&nbsp보안의 측면에서 포트 번호는 중요한 정보가 됩니다. IT 관계자는 포트 스캔을 통해 대상의 IP가 사용 중인 서비스를 파악하고, 서비스 내에 데이터를 송수신하는지 파악할 수 있습니다. 또한 취약한 서버를 인지하고 추가적인 보안 진단 및 조치를 할 수 있도록 도와줍니다.  
                     </p>
                  </div>
               </div>
               <div class="col-md-6 padding_right2">
                  <div class="software_img">
                     <figure><img src="images/software_img.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- software section -->
      <!-- We Do section -->
      <div id="we_Do" class="we_do">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>What We Do</h2>
                     <p>Ultimately, we purpose to create a secure network environment with port scanning capabilities that are fast and convenient for both individuals and businesses. </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div id="hover_color" class="we_box">
                     <span>1</span>                     
                     <h3>Importance</h3>
                     <br>
                     <p>포트 스캐너는 스캔을 통해 회사 네트워크 또는 시스템 내의 기존 취약점을 알릴 수 있으며, 공격자는 이를 악용하여 무단 엑세스를 얻을 수 있습니다. &nbsp피해 규모는 피해 대상에 따라 다르며, 공격을 예방하기 위해서 네트워크 내에 주기적인 서비스점검이 필요합니다. </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_color" class="we_box">
                     <span>2</span>
                     <h3>Technological Effectiveness</h3>
                     <p>포트 스캔은 콘솔 내 명령어와 다양한 옵션의 조합으로 실행됩니다. 명확한 정보를 얻기 위해서는 별도의 스캐닝 도구를 요구하기도 합니다. 포트 스캐닝 웹사이트는 사용자의 복잡한 사용 과정을 줄여주고, 깔끔한 UI 디자인을 채택함으로써 정보의 접근성을 높입니다. </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="hover_color" class="we_box">
                     <span>3</span>
                     <h3>Utilization plan</h3>
                     <br>
                     <p>o 기업 : 포트 스캐닝 기술을 사용하여 특정 패킷을 보내고 잠재적인 취약점에 대한 응답을 분석<br>
                        o 사용자 : 자신의 서버의 네트워크 서비스들을 점검하기 위해 사용<br>
                        o 학생 : 보안 허점을 발견하고 방어 침투 테스트를 통한 보안 공부를 통해 전공 학습 능력을 향상 </p>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!-- end We Do section -->
      <!-- Our  team section -->
      <div id="team" class="team">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Team</h2>
                     <p>"We are Electric pot." 
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="team_box">
                     <figure><img src="./images/프로필사진img.jpg.png" alt="#"/></figure>
                     <div class="social_box">                       
                        <h3>김다경(조장)</h3>
                        <li>정보통신공학부(정보보안학과) 3학년</li>
                        <li><p>포트 스캐너 개발</p></li>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="team_box">
                     <figure><img src="./images/고양이.jpg" alt="#"/></figure>
                     <div class="social_box">
                        <h3>김주영</h3>
                        <li>정보통신공학부(정보보안학과) 3학년</li>
                        <li><p>프론트엔드</p></li>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="team_box">
                     <figure><img src="./images/서은.jpg" alt="#"/></figure>
                     <div class="social_box">
                        <h3>장서은</h3>
                        <li>정보통신공학부(정보보안학과) 3학년</li>
                        <li><p>백엔드 개발</p></li>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our  team section -->
      
     
      <!--  footer -->
      <footer>
         <div id="findus" class="footer">
            <div class="container">
               <div class="row">                 
                  <div class="col-md-4">
                     <div class="fid_box">
                        <h3>Find us  </h3>
                        <ul class="location_icon">
                           <li><a target="_blank" href="https://goo.gl/maps/FbBvMFUaioWfrYbc6"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> 조선대학교 IT융합대학 <br>정보통신공학부(정보보안전공) </li>
                           <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br>
                              062.230.7081<br> 062.230.6037
                           </li>
                           <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> hwanseo6417@naver.com</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="fid_box">
                        <h3>Map  </h3>
                        <div class="map" id="inf">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.6743586064276!2d126.93187741520097!3d35.13979908032417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35718d6edd641411%3A0xbda86fe2b5d5056f!2z7KGw7ISg64yA7ZWZ6rWQIElU7Jy17ZWp64yA7ZWZ!5e0!3m2!1sko!2skr!4v1673505194968!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <div class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                  <div class="sea_icon d_none ">
                     <a href="#header"><i class="fa-solid fa-angles-up" aria-hidden="true"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidepanel").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
         }
      </script>
      
   </body>
</html>
