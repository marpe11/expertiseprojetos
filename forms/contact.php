<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "marcuspgk@gmail.com";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$nome = $_POST['name'];
// 3 - resgatar o assunto digitado no formulário e  grava na variavel
//$assunto
$assunto = $_POST['email'];
 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
 $mensagem .= "<br>  <strong>Nome: </strong>".$_POST['name'];
$mensagem .= "<br>  <strong>Telefone: </strong>".$_POST['subject'];
$mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['message'];

//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  expertiseprojetos.com.br<marcus@expertiseprojetos.com.br>\n";
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <marcus@expertiseprojetos.com.br>\n";
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <marcus@expertiseprojetos.com.br>\n";
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
?>
