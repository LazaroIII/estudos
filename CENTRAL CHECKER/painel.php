<?php 
//include 'dbc.php';
//page_protect();
$login_usuario = $_SESSION['user_name']; 
$con = @mysqli_connect("localhost","priv8_user","@@#!*admin239311","priv8_tech");if (mysqli_connect_errno()){echo "Falha ao conectar ao MySQL" . mysqli_connect_error();}
$sql22 = 'SELECT * FROM users WHERE full_name="'.$login_usuario.'"';
$result22=mysqli_query($con,$sql22);
$row=mysqli_fetch_assoc($result22);
$data_finalsql = $row['data_expira'];
$nome = $row['full_name'];
mysqli_close($con);
$data_inicial = date('Y-m-d');
$data_final = $data_finalsql;
$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);
$diferenca = $time_final - $time_inicial;
$dias = (int)floor( $diferenca / (60 * 60 * 24));/*
echo "A diferença entre as datas ".$data_inicial." e ".$data_final." é de <strong>".$dias."</strong> dias";*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <script language="javascript">
function click() {
if (event.button==2||event.button==3) {
oncontextmenu='return false';
}
}
document.onmousedown=click
document.oncontextmenu = new Function("return false;")
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="TECHNOLOGY CHECKER">
    <meta name="keyword" content="TECHNOLOGY, CHECKER, CHECADOR DE LOJAS, CHECKER PHP">
    <title>TECHNOLOGY CHECKER V3.0 - MADE IN BRAZIL PHP</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="painel.php" class="logo"><b>TECHNOLOGY CHECKER v3.0</b>  | <b style="color:red">MAIOR CENTRAL BRASILEIRA PRIV8!</b> |<b>VENCIMENTO: <?php echo $dias; ?> DIAS</b> </a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">1</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">MENSAGENS DO PAINEL</p>
                            </li>
                            <li>
                                <a href="painel.php">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Technology Checker</span>
                                    <span class="time">27/10/2015</span>
                                    </span>
                                    <span class="message">
                                        MAIOR CENTRAL BRASILEIRA PRIV8!
                                    </span>
                                </a>
                            </li>
                          </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Sair</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
         
              	  <p class="centered"><a href="painel.php"><img src="assets/img/mao_tecnologia.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $nome; ?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="painel.php">
                          <i class="fa fa-dashboard"></i>
                          <span>INICIO</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>CHECADORES</span>
                      </a>
                      <ul class="sub">
                          <li><a target="quadrado" href="lojas.php">LOJAS</a></li>
                          <li><a target="quadrado" href="saldos.php">SALDOS</a></li>
						  <li><a target="quadrado" href="emails.php">EMAIL</a></li>
                          <li><a target="quadrado" href="passagens.php">PASSAGENS</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>FERRAMENTAS</span>
                      </a>
                      <ul class="sub">
                          <li><a target="quadrado" href="phps/tools/bin.php">BIN CHECKER</a></li>
                          <li><a target="quadrado" href="phps/tools/separador.php">SEPARADOR DE EMAIL</a></li>
                          <li><a target="quadrado" href="http://cybergames-mt2.com.br/tmp/cpf/01/">EXTRATOR CPF E SENHA 01</a></li>
						  <li><a target="quadrado" href="http://cybergames-mt2.com.br/tmp/cpf/02">EXTRATOR CPF E SENHA 02</a></li>
						  <li><a target="quadrado" href="http://cybergames-mt2.com.br/tmp/cpf/03">EXTRATOR CPF E SENHA 03</a></li>
						  <li><a target="quadrado" href="phps/tools/index.php">EXTRATOR CPF E SENHA 04</a></li>
                          <li><a target="quadrado" href="phps/tools/amecpf.php">EXTRATOR CPF E SENHA 05</a></li>						  
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>CONSULTAS</span>
                      </a>
                      <ul class="sub">
                          <li><a target="quadrado" href="phps/consulta/index.php">CPF</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>BATE PAPO</span>
                      </a>
                      <ul class="sub">
                          <li><a target="quadrado" href="phps/xat/index.php">XAT</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  
      <section id="main-content">
          <section class="wrapper">
        
                      
                      <div class="row mt">
          
					<center>
<iframe height="510" name="quadrado" src="assets/img/banner03.jpg" width="1100"></iframe>
						</center>
                    </div><!-- /row -->
                    
   
					
					
					
                  <!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
               
         
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              SKYPE: TECHNOLOGY580 | SEM CX2 | SERVIÇO 99,9% UPTIME | SUPORTE SEGUNDA A SÁBADO
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
			  <script src="http://static.tumblr.com/8l2gpxb/lcllulgcn/snowstorm.js"></script>
          </div>
      </footer>
      <!--footer end-->
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Estamos todo dia trazendo novidades! Fique atentos.',
            // (string | mandatory) the text inside the notification
            text: 'Bem Vindo Somos a Maior e Mais Completa Central de Brasil 1 Ano no Mercado de Muito Clientes Satisfeitos! <a href="http://www.technologypriv8.com" target="_blank" style="color:#ffd777">TechnologyChecker</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });
        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  
  </body>
</html>