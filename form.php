<link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body{
	background: url(images/back.png) repeat;
	margin:30px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:20px;
	color:#333;
	text-shadow: 1px 1px 0 #fff;
}
.botao {
	background: #ccc;
	background: -webkit-gradient(linear, left top, left bottom, from(#ccc), to(#999));
	background:-moz-linear-gradient(top, #ccc, #999);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ccc', endColorstr='#999');
	font-family: 'Nova Square', cursive;
	font-weight:normal;
	color: #013c73;
	text-shadow:1px 1px 0 #fff;
    border:0px solid #000;
	font-size:16px;
	
    -moz-border-radius:3px;
    -moz-border-radius:3px;
	-webkit-border-radius:3px;
	
	-moz-box-shadow: 2px 2px 5px #333;
	-webkit-box-shadow: 2px 2px 5px #333;
	box-shadow: 2px 2px 5px #333;
	
    cursor:pointer;
	margin-top:5px;
	height:25px;
	float:left;
}
</style>
<?php


//FORM
//-[
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$msg = $_POST["msg"];
//-]

$destinatario = "tiago@tiagobernardes.com.br";
$assunto = "$assunto";
$corpo = "**--dados do formulario--**<br> Nome: $nome <br> E-mail: $email <br> Assunto: $assunto <br> Mensagem: $msg <br><br> IP:$REMOTE_ADDR";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";

//endereço do remetente
$headers .= "From: Olá tem mensagem para você !!! <contato@logicasolutions.com.br>\r\n";

//endereço de resposta, se queremos que seja diferente a do remitente
$headers .= "Reply-To: contato@logicasolutions.com.br\r\n";

//endereços que receberão uma copia $headers .= "Cc: manel@desarrolloweb.com\r\n";
//endereços que receberão uma copia oculta
$headers .= "Bcc: contato@logicasolutions.com.br\r\n";
mail($destinatario,$assunto,$corpo,$headers) ;

// HTML do redirecionameto e se não redirecionar aparece um link
echo "<html><head>";
//echo "<meta http-equiv=\"refresh\" content=\"0;url=http://www.tiagobernardes.com.br/2012\">";
echo "</head><body>";
echo "Valeu <b><i>$nome</b></i>, O formul&aacute;rio foi enviado com sucesso !<br> Em breve entro em contato para conversarmos sobre <b><i>$assunto</b></i> .";
echo "<br><input type=button value=Voltar class=botao onclick=window.history.go(-1)>";
echo "</body></html>";

?>