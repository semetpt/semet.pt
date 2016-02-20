<?

$nome     = $_POST['nome'];
$email    = $_POST['email'];
$assunto  = $_POST['assunto'];
$msg      = $_POST['msg'];
$retorno  = "inscricao.html";

$corpo = "Nome: $nome<br>E-mail: $email<br>Mensagem: $msg";
$bound = "XYZ-" . date("dmYis") . "-ZYX";
if (($fp = fopen($_FILES['arquivo']['tmp_name'],"rb")))
{
$anexo = fread($fp,filesize($_FILES['arquivo']['tmp_name']));
$anexo = base64_encode($anexo);
fclose($fp);
$anexo = chunk_split($anexo);
}
if ($anexo)
{
$mensagem = "--$bound\nContent-type: text/html\nContent-Transfer-Encoding: 7bit\n\n$corpo\n\n"
. "--$bound\nContent-type: $_FILES[arquivo][type]\nContent-Disposition: attachment; filename=" . $_FILES['arquivo']['name'] . "\nContent-Transfer-Encoding: base64\n\n$anexo\n"
. "--$bound\r\n";
mail("hugobraz92@hotmail.com",$assunto,$mensagem,"From: $email\nMIME-Version: 1.0\nContent-type: multipart/mixed; boundary=\"$bound\"");
print("Mensagem Enviada com Sucesso!");
header("Location:$retorno");
//print($fp);
}
else
{
mail("hugobraz92@hotmail.com",$assunto,$corpo,"From: $email\nContent-type: text/html");
print("Mensagem Enviada com Sucesso - Sem Anexo" );
header("Location:$retorno");
}
?>
