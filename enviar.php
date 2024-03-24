<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$From = 'atendimento@lr4f.github.io.';

$headers = "MIMI-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: TESTE <$From>\n";
$headers .= "Return-Path: $From\n";
$headers .= "Reply-to: $email";

mail($email, $assunto, $mensagem, $headers, $From);

?>