<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>.: SEMET :.</title>
<meta name="keywords" content="" />
<meta name="Soothing" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />

		<script src="script/utilities.js" type="text/javascript"></script>

	</head>
<body>
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
				<h2>Inscrição</h2>

			<div class="entry">
<?php
/*
				<p><form action='envia_email.php' method='post' enctype='multipart/form-data' >
                <a href="Ficha_Ins.pdf" target="_new"><img src="images/icon/pdf.jpg" width="50" height="50" align="right"/></a><br />
<tr>
    <br><td>Nome:</td>
    <td><span id="sprytextfield1">
    <input type='text' name='nome' />
    <span class="textfieldRequiredMsg">Necessário inserir um Valor.</span><span class="textfieldMaxCharsMsg">Excedeu o máximo de caractéres.</span></span></td></br>
 </tr>
<tr>
    <br><td>E-mail:</td>
    <td><span id="sprytextfield2">
    <input type='text' name='email' />
    <span class="textfieldRequiredMsg">Necessário inserir um Valor.</span><span class="textfieldInvalidFormatMsg">Formato Inválido.</span></span></td></br>
</tr>
<tr>
    <br><td>Assunto:</td>
    <td><span id="sprytextfield3">
    <input type='text' name='assunto' />
    <span class="textfieldRequiredMsg">Necessário inserir um Valor.</span><span class="textfieldMaxCharsMsg">Máximo Excedido.</span></span></td></br>
</tr>
<tr>
    <br><td>Mensagem:</td>
    <td><span id="sprytextarea1">
    <textarea name='msg' cols='30' rows='5'></textarea>
    <span class="textareaRequiredMsg">Preencha o campo Mnesagem.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span><span class="textareaMinCharsMsg">Mensagem muito Curta.</span></span></td></br>
</tr>
<tr>
    <br><td>Ficheiro:</td>
    <td><input type='file' name='arquivo'></td></br>
</tr>
<tr>
    <td><input type='submit' value='Enviar'></td>
</tr>
 <label>
				        <input type="reset" name="limpar" id="limpar" value="Apagar" />
			          </label>
</form></p>
*/
?>				
              </div>
		  </div>

		<a href="Ficha_Ins.pdf" target="_new" style="float: right; margin: 1em 2em;">
        	<img src="images/icon/pdf.jpg" width="50" height="50" align="right"/>
        </a>
<?php
/*
		<p>Pode obter a ficha de inscrição <a href="Ficha_Ins.pdf" target="_new">aqui</a>, remetendo-a preenchida para <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#102;&#111;&#114;&#109;&#97;&#99;&#97;&#111;&#64;&#115;&#101;&#109;&#101;&#116;&#46;&#112;&#116;" target="_new" style="font-weight: bold">formacao[AT]semet[DOT]pt</a>.</p>
*/
?>
		<p>Pode obter a ficha de inscrição <a href="Ficha_Ins.pdf" target="_new">aqui</a>, remetendo-a preenchida para <script type="text/javascript">
        	mailto(["formacao"],["semet","pt"]);
        </script>.</p>
		<p>Em alternativa, pode clicar no endereço acima, sendo redireccionado para a sua aplicação e-mail pré-definida.</p>
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
