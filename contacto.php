<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>

	<title>BIZCOM PER&Uacute; - Contacto</title>
	
	<meta charset="utf-8">
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="icono.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Archivo+Narrow|Oswald:400,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />  


    
</head>

<body>

<!-- top show hide --> 
<div class="slidingDiv" style="display: block !important;">

    <div class="top_contact_info">
    <?php include 'cabecera.php'; ?>
</div>
    
</div><!-- end top contact info -->


<!-- end top show hide --> 

<div class="site_wrapper">
<div class="boxed_wrapper">
	
    <div class="container_full">
    	
        <div class="top_section">
 
    		<div id="logo"><a href="inicio" class="site_logo"><img src="img/logo.gif" width="178" height="64"></a></div><!-- end logo -->
            	
               <nav id="access" class="access" role="Seleccionar p&aacute;gina">
                <div id="menu" class="menu">
                    
                    <ul id="tiny">
                    
                        <li><a href="inicio">Inicio</a></li>  
                        
                        <li><a href="nosotros" >Nosotros</a></li>
                        
                        <li><a href="productos">Productos</a>
                        
                        	<ul>
                                <?php include("listproductos.php"); ?>
                            </ul>
                        </li>
                        
                        <li><a href="clientes">Clientes</a></li>
                        
                        <li><i><a href="contacto" class="active">Contacto</a></i></li>
                        
                       
                    </ul>
                </div>
                
          </nav>      

	</div>
    
</div><!-- end top -->




<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1>Contacto</h1></div>
        <div class="reght_pagenation"><a href="inicio">Inicio</a> <i>/</i> Contacto</div>
	</div>
    
</div>



<div class="container">

	<div class="content_fullwidth">
    
    	<div id="content_area">
        
	

 <div class="one_full">
            <p>No dude en comunicarse con nostros o escr&iacute;bamos en nuestro formulario de contacto.
Por favor sea paciente mientras espera una respuesta.</p>
            <br>
            </div>
            
            
                       
                          
            
            <div class="one_half">
            
              <h2>Formulario de contacto</h2>
		
					 <form id="frmContacto" class="contactForm" method="POST" action=""> 
					<div id="status"></div>
						<fieldset>
						
						<label for="name" class="blocklabel">Nombre*</label>
						<p><input type="text" name="nombre" id="nombre" value="" class="input_bg required"/></p>
						
						
						<label for="email" class="blocklabel">E-Mail*</label>
						<p><input type="text" name="email" id="email" value="" class="input_bg required field email"/></p>
                                                
                                                <label for="telefono" class="blocklabel">Teléfono</label>
						<p><input type="text" name="telefono" id="telefono" value="" class="input_bg field"/></p>
						
						
						<label for="website" class="blocklabel">Asunto</label>
						<p><input type="text" name="asunto" id="asunto" value="" class="input_bg"/></p>
						
						
						<label for="message" class="blocklabel">Mensaje*</label>
						<p class=""><textarea id="mensaje" name="mensaje" value="" class="textarea_bg required" cols="20" rows="7" ></textarea></p>
						
						
						<p>
						
						<div class="clearfix"></div>
            <div id="divrespuestaContacto" style="color:#000; font-size:18px"></div> <br> 
																 
						<input type="submit" name="send" value="ENVIAR MENSAJE" class="button medium align" id="send"/></p>
						<div style="float:left; color:#333; padding-top:29px; margin-right:190px">* Campos obligatorios.</div>						
						</fieldset>
						
						</form> 
            
            </div>
              
            
            <div class="one_half last">	            
            
            <div class="address-info">
                    <h2>Datos de contacto</h2>
                        <ul>
                        <li>
                            <strong>BIZCOM PER&Uacute;</strong><br />
                        Tel: +511 256-6790 / +511 256-1058<br />
                        Cel.: +51 949 169 707  / +51 9999-59252<br />
                        E-mail: <a href="mailto:ventas@bizcomperu.com">ventas@bizcomperu.com</a><br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:info@bizcomperu.com">info@bizcomperu.com</a><br />
                        </li>
                        
                        
                    </ul>
                </div>
            
            
			</div>              
        
    </div>
    
    </div>

</div>




</div>
</div>


<!-- pie ================== -->

<?php include("pie.php"); ?>

<!-- end pie -->



<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->


    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/jquery.js"></script>

<!-- main menu -->
<script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mainmenu/selectnav.js"></script>

<script type="text/javascript" src="js/mainmenu/scripts.js"></script>


<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>


  <!--formulario-->
<link rel="stylesheet" href="css/form/foundation.min.css">
 <script src="javascripts/foundation.min.js"></script>
 <script src="js/form/jquery.validate.js"></script> 
        <script src="js/form/messages_es.js"></script> 
        <script src="js/form/main.js"></script> 



</body>
</html>

