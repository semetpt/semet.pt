<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>.: SEMET :.</title>
<meta name="keywords" content="" />
<meta name="Soothing" content="" />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
</head>
<body onload="MM_preloadImages(‘/images/menu_on.gif’)…;initLightbox()">
<div id="wrapper">
<!-- start header -->
<?php
	require("header.html");
?>
<!-- end header -->
		<!-- start page -->

	<div id="page">

<?php
	require("leftbar.html");
?>

		<!-- start content -->
		<div id="content">
		  <div class="post">
				<h2>Imagens</h2>

				<div style="clear: both;">&nbsp;</div>
			<div class="entry">
				<p>Clique nas imagens para ampliar.</p>
           <p> <table width="450" border="0" align="center">
			  <tr>
			    <td align="center" > <a href="img/Exterior.png" rel="lightbox[roadtrip]"> <IMG SRC="img/Exteriorsmal.png" BORDER=0> </IMG><br>Exterior</br></a></td>
			    <td align="center"><a href="img/Instalacoes.png" rel="lightbox[roadtrip]"> <IMG SRC="img/Instalacoessmal.png" BORDER=0> </IMG><br>Instalações</br></a></td>
				</tr>
			   <tr> 
				<td align="center"><a href="img/Instalacoes1.png" rel="lightbox[roadtrip]"> <IMG SRC="img/Instalacoes1smal.png" BORDER=0> </IMG><br>Instalações</br></a></td></td>
			    <td align="center"><a href="img/Recepcao.png" rel="lightbox[roadtrip]"> <IMG SRC="img/Recepcaosmal.png" BORDER=0> </IMG><br>Recepção</br></a></td>
		     </tr>
			  <tr>
			   <td align="center" height="195"><a href="img/SaladeEspera.png" rel="lightbox[roadtrip]"><IMG SRC="img/SaladeEsperasmal.png" BORDER=0></IMG><br>Sala de Espera</br></a></td>
			 <td align="center" ><a href="img/SalaFormacao.png" rel="lightbox[roadtrip]"><IMG SRC="img/SalaFormacaosmal.png" BORDER=0></IMG><br align="center">Sala de Formação</br></a></td>
			 </tr>
			 <tr>
		<td align="center" ><a href="img/SalaFormacao1.png" rel="lightbox[roadtrip]"><IMG SRC="img/SalaFormacao1smal.png" BORDER=0></IMG><br align="center">Sala de Formação</br></a></td>
		<td align="center" ><a href="img/SalaFormacao2.png" rel="lightbox[roadtrip]"><IMG SRC="img/SalaFormacao2smal.png" BORDER=0></IMG><br align="center">Sala de Formação</br></a></td>
			    </tr>
			  </table> 
			  </p>
			  </div>
			  </div>
		</div>
		
			<!-- end content -->
		<!-- start sidebars -->
<?php
	require("rightbar.html");
?>
		<!-- end sidebars -->
		<div style="clear: both;">&nbsp;</div>
        
	</div>
	<!-- end page -->
</div>

<?php
	require('footer.php');
?>
</body>
</html>
