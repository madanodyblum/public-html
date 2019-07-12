<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>

	<title>BIZCOM PERÚ - Delimitador vial</title>
	
	<meta charset="utf-8">
	<meta name="description" content="" />
    
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
		
     <!-- tabs css -->
	<link rel="stylesheet" type="text/css" href="js/tabs/tabs-style2.css" />
    <link rel="stylesheet" type="text/css" href="js/tabs/tabs.css" />
    
    <!-- portfolio css -->
    <link rel="stylesheet" href="js/portfolio/prettyPhoto.css" type="text/css" media="screen" /> 
    
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
                        
                       <li><i><a href="productos" class="active">Productos</a></i>
                        
                        	<ul>
                                <?php include("listproductos.php"); ?>
                            </ul>
                        </li>
                        
                        <li><a href="clientes" >Clientes</a></li>
                        
                        <li><a href="contacto">Contacto</a></li>
                        
                       
                    </ul>
                </div>
                
          </nav>      

	</div>
    
</div><!-- end top -->




<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1>Delimitador vial</h1></div>
        <div class="reght_pagenation"><a href="inicio">Inicio</a> <i>/</i> <a href="productos">Productos</a> <i>/</i> Delimitador vial</div>
	</div>
    
</div>



<div class="container">

	<div class="content_left">

  <div class="one_fill">
            <ul class="gallery clearfix">
            <li>
                <ul class="gallery clearfix">
                    <li class="border_threecol" style="text-align:center; width:45.8%"><a href="boyas"><img src="img/boyas.jpg" alt="" />
                    <strong>Boyas</strong></a>
                    </li>
                    
                  
                  <li class="border_threecol" style="text-align:center; width:45.8%; margin-top:12px"><a href="tachas-u-ojos-de-gato"><img src="img/tachas.jpg" alt="" /></a>
                    <strong>Tachas u ojos de gato</strong>
                  </li>
                  
                    
                 
                </ul>
            </li>
        </ul>
          
        </div>
  
  
  
  <div class="clearfix mar_top2"></div>
    
        
 <div class="clearfix divider_line2"></div>

</div><!-- end content left side area -->


<!-- right sidebar starts -->
<div class="right_sidebar">

	<div class="sidebar_widget">
    	<h3>Productos</h3>
		<ul class="arrows_list1">		
            <?php include("listproductos.php"); ?>
		</ul>
	</div><!-- end section -->
    
    <div class="clearfix mar_top3"></div>
    
	
</div><!-- end right sidebar -->


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

<!-- tabs script -->
<script type="text/javascript" src="js/tabs/tabs.js"></script>
<script type="text/javascript" src="js/tabs/tabs-style2.js"></script>


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


<!-- portfolio -->
<script src="js/portfolio/jquery.prettyPhoto.js" type="text/javascript"></script>

<script type="text/javascript">
			$(document).ready(function(){
				$("area[title^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[title^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
				$(".gallery:gt(0) a[title^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[title^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				
			});
</script>




</body>
</html>

